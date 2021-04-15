<?php
require __DIR__ . '/vendor/autoload.php';
require_once './lib/all.php';

use PhpParser\Node;
use PhpParser\NodeDumper;
use PhpParser\ParserFactory;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\ConstFetch;
use PhpParser\Node\Name;
use PhpParser\PrettyPrinter\Standard;

// To see how an ast looks:
//$code = 'while($x <= 100) {  }';
//$goodAst = phpCodeToPhpAst($code);
//die(json_encode($goodAst, JSON_PRETTY_PRINT));

$sourceFile = $argv[1] ?? 'input/playground.say.json';
$destinationFile = $argv[2] ?? str_replace(
        ['input/', '.say.json'],
        ['output/', '.say.php'],
        $sourceFile);
$GLOBALS['$destinationFile'] = $destinationFile;

$sayAst = json_decode(file_get_contents($sourceFile));

//visitAndBuildConnections($sayAst);

$phpAst = sayAstToPhpAst($sayAst);
$phpCode = phpAstToPhpCode($phpAst);

if (!is_dir(dirname($destinationFile))) {
    mkdir(dirname($destinationFile));
}

file_put_contents($destinationFile, $phpCode);

function visitAndBuildConnections($ast, $parent = null) {
    $previous = null;

    foreach ($ast as $key => $value) {
        if (is_array($value)) {
            visitAndBuildConnections($value, $ast);
        }

        if (is_object($value)) {
            visitAndBuildConnections($value, $value);

            if (is_object($parent)) {
                $value->parent =& $parent;
            }

            if ($previous) {
                $value->previous =& $previous;
                $previous->next =& $value;
            }

            $previous = $value;
        }
    }
}

class Context {

    public function __construct(
        public $addSemicolon = false,
        public $insideIf = false,
        public $wrapIfsInClosure = false,
        public $knownVariables = [],
        public $currentVariable = null,
        public $inMacro = false,
        public $macroVariables = [],
    ) {
    }
}

function sayAstToPhpAst($sayAst) {
    $phpAst = [];

    // Import assets
    $imports = [phpCodeToPhpAst("require_once('./lib/all.php');")[0]];

    $context = new Context(addSemicolon: true);

    foreach ($sayAst->statements as $statement) {
        $expression = visit($statement, $context);

        if ($expression) {
            $phpAst[] = $expression;
        }
    }

    $phpAst = [
        ...$imports,
        ...$phpAst
    ];

    return $phpAst;
}

function visit($expr, Context $c) {
    static $macros = [];

    if ($expr->type === 'Say') {
        $lc = clone($c);
        $lc->addSemicolon = false;
        $lc->wrapIfsInClosure = true;

        $say = PHPfunctionCall('Say_', [visit($expr->expression, $lc)]);
        return PHPexpression($say);
    }

    if ($expr->type === 'SayNL') {
        $lc = clone($c);
        $lc->addSemicolon = false;
        $lc->wrapIfsInClosure = true;

        $say = PHPfunctionCall('SayNL_', [visit($expr->expression, $lc)]);
        return PHPexpression($say);
    }

    if ($expr->type === 'Ask') {
        $ask = PHPfunctionCall('Ask_', [visit($expr->expression, $c)]);
        return $c->addSemicolon ? PHPexpression(PHPmethodCall($ask, 'evaluate')) : $ask;
    }

    if ($expr->type === 'Assignment') {
        if ($expr->object->type !== 'IndexAccess') {
            $c->currentVariable = $expr->object->id;
            $c->knownVariables[] = $expr->object->id;
        }

        $lc = clone($c);
        $lc->addSemicolon = false;

        if ($expr->expression->type !== 'Function') {
            $lc->wrapIfsInClosure = true;
        }

        if ($expr->object->type === 'IndexAccess') {
            $call = PHPmethodCall(
                visit($expr->object->object, $lc),
                'setAtIndex',
                [
                    visit($expr->object->indexes[0], $lc),
                    visit($expr->expression, $lc)
                ]);

            return PHPexpression($call);
        }

        $assignment = PHPassignment(
            visit($expr->object, $lc),
            visit($expr->expression, $lc)
        );

        $c->currentVariable = null;

        return $c->addSemicolon ? PHPexpression($assignment) : $assignment;
    }

    if ($expr->type === 'Function') {
        $lc = clone($c);
        // Reset wrapIfsInClosure. For example, we might be doing:
        // return (a -> if true then say 1 else say 2) or
        // array << [(a -> if true then say 1 else say 2)]
        // In these cases, we dont want the external wrapIfsInClosure to propagate in teh function
        $lc->wrapIfsInClosure = false;

        // param name might already exist in scope. Unset it from knownVariables,
        // as if it is in the use() part, it will conflict with the param name.
        foreach ($expr->params as $param) {
            $lc->knownVariables = array_diff($lc->knownVariables, [$param->identifier->id]);
        }

        $lc->knownVariables = array_unique($lc->knownVariables);
        $uses = array_map(fn($it) => PHPuse($it), $lc->knownVariables);

        foreach ($expr->params as $param) {
            $lc->knownVariables[] = $param->identifier->id;
            $lc->params[] = $param->identifier->id;
        }

        $lc->addSemicolon = true;

        $body = array_map(fn($it) => visit($it, $lc), $expr->body);

        $lc->currentVariable && array_unshift($body, PHPglobal([PHPvariable($lc->currentVariable)]));

        $lc->addSemicolon = false;
        $params = array_map(function ($it) use ($lc) {
//            $defaultValue = $it->defaultValue ? visit($it->defaultValue, $lc) : null;
            return PHPparam(visit($it->identifier, $lc));
        }, $expr->params);

        $function = PHPstaticCall('Function_', 'from', [PHPclosure(
            $body,
            $params,
            $uses
        )]);

        return $c->addSemicolon ? PHPexpression($function) : $function;
    }

    if ($expr->type === 'FunctionCall') {
        $lc = clone($c);
        $lc->addSemicolon = false;
        $lc->wrapIfsInClosure = true;

        $args = array_map(fn($it) => visit($it, $lc), $expr->args);

        $call = PHPfunctionCall(visit($expr->object, $c), $args);

        return $c->addSemicolon ? PHPexpression($call) : $call;
    }

    if ($expr->type === 'ArgPlaceholder') {
        return PHPstring('?');
    }

    if ($expr->type === 'MethodCall') {
        $lc = clone($c);
        $lc->addSemicolon = false;
        $lc->wrapIfsInClosure = true;

        $args = array_map(fn($it) => visit($it, $lc), $expr->args);

        $call = PHPmethodCall(
            visit($expr->object, $lc),
            $expr->identifier->id,
            $args
        );

        return $c->addSemicolon ? PHPexpression($call) : $call;
    }

    if ($expr->type === 'IndexAccess') {
        // TODO: Check that:
//        $lc = clone($c);
//        $lc->addSemicolon = false;
//        $lc->isReturn = true;


        if ($expr->range) {
            if ($expr->start === null) {
                $args = [PHPnull(), visit($expr->end, $c)];
            } else if ($expr->end === null) {
                $args = [visit($expr->start, $c), PHPnull()];
            } else {
                $args = [visit($expr->start, $c), visit($expr->end, $c)];
            }

            return PHPmethodCall(visit($expr->object, $c), 'getBetweenIndexes', $args);
        }

        if (count($expr->indexes) === 1) {
            return PHPmethodCall(visit($expr->object, $c), 'getAtIndex', [visit($expr->indexes[0], $c)]);
        }

        return PHPmethodCall(
            visit($expr->object, $c),
            'getAtIndexes',
            array_map(fn($it) => visit($it, $c), $expr->indexes)
        );
    }

    if ($expr->type === 'PropertyAccess') {
        $propertyAccess = PHPpropertyFetch(visit($expr->object, $c), $expr->identifier->id);
        return $c->addSemicolon ? PHPexpression($propertyAccess) : $propertyAccess;
    }

    if ($expr->type === 'Identifier') {
        if ($c->inMacro && array_key_exists($expr->id, $c->macroVariables)) {
            return visit($c->macroVariables[$expr->id], $c);
        }

        if (!in_array($expr->id, $c->knownVariables) && $expr->id !== 'this') {
//            throw new Error($expr->id . ' not found in scope');
        }

        return PHPvariable($expr->id);
    }

    if ($expr->type === 'Macro') {
        $macros[$expr->keywords[0]->id] = $expr;
    }

    if ($expr->type === 'MacroCall') {
        $name = $expr->expressions[0]->id;
        if (!array_key_exists($name, $macros)) {
            throw new Error("Macro $name not found");
        }

        $macro = $macros[$name];

        $lc = clone($c);
        $lc->addSemicolon = false;

        foreach ($macro->keywordsParamsOrder as $index => $keywordOrParam) {
            $isKeyword = in_array($keywordOrParam->id, array_column($macro->keywords, 'id'));

            if ($isKeyword) {
                continue;
            }

            $lc->macroVariables[$keywordOrParam->id] = $expr->expressions[$index];
        }

        $lc->inMacro = true;

        $expanded = array_map(fn($it) => visit($it, $lc), $macro->body);

        $lc->inMacro = false;
        $lc->macroVariables = [];

        // Try to avoid wrapping in closure, for less visual spam.
//        if (count($expanded) === 1) {
//            $expanded = $expanded[0];
//        } else {
        $c->knownVariables = array_unique($c->knownVariables);
        $uses = array_map(fn($it) => PHPuse($it), $c->knownVariables);
        $expanded = PHPexpression(PHPfunctionCall(PHPclosure($expanded, [], $uses)));
//        }

        $expanded->setDocComment(new \PhpParser\Comment\Doc("// expanded macro $name"));
        return $expanded;

    }

    if ($expr->type === 'If') {
        $lc = clone($c);
        $lc->addSemicolon = false;
        $lc->insideIf = true;

        $test = visit($expr->test, $lc);

        $lc->addSemicolon = true;

        $then = array_map(fn($it) => visit($it, $lc), $expr->thenStatements);
        if (
            count($expr->thenStatements) === 1
            && $c->wrapIfsInClosure && $expr->thenStatements[0]->type !== 'Return'
            && $then[0]::class !== Node\Stmt\If_::class
        ) {
            $toReturn = ($then[0] instanceof Node\Stmt) ? $then[0]->expr : $then[0];
            $then = [PHPreturn($toReturn)];
        }

        $else = array_map(fn($it) => visit($it, $lc), $expr->elseStatements);
        if (
            count($expr->elseStatements) === 1
            && $c->wrapIfsInClosure && $expr->elseStatements[0]->type !== 'Return'
            && $else[0]::class !== Node\Stmt\If_::class
        ) {
            $toReturn = ($else[0] instanceof Node\Stmt) ? $else[0]->expr : $else[0];
            $else = [PHPreturn($toReturn)];
        }

        $if = PHPif(
            PHPmethodCall($test, 'toNative'),
            $then,
            $else ?? []
        );

        if (!$c->wrapIfsInClosure || $c->insideIf) {
            return $if;
        }

        $c->knownVariables = array_unique($c->knownVariables);
        $uses = array_map(fn($it) => PHPuse($it), $c->knownVariables);
        $if = PHPfunctionCall(PHPclosure([$if], [], $uses));

        return $c->addSemicolon ? PHPexpression($if) : $if;
    }

    if ($expr->type === 'Each') {
        $lc = clone($c);
        $lc->addSemicolon = true;

        $hasValueAlias = $expr->valueAlias;
        $hasKeyAlias = $expr->keyAlias;

        $lc->knownVariables[] = $hasValueAlias ? $expr->valueAlias->id : '$it';
        $hasKeyAlias && $lc->knownVariables[] = $expr->keyAlias->id;

        $body = array_map(fn($it) => visit($it, $lc), $expr->body);

        $each = PHPForeach(
            visit($expr->iterable, $lc),
            $hasValueAlias ? visit($expr->valueAlias, $lc) : PHPvariable('$it'),
            $body,
            $hasKeyAlias ? visit($expr->keyAlias, $lc) : null,
        );

        return $each;

//        $c->knownVariables = array_unique($c->knownVariables);
//        $uses = array_map(fn($it) => PHPuse($it), $c->knownVariables);
//        $each = PHPfunctionCall(PHPclosure([$each], [], $uses));
//
//        return $c->addSemicolon ? PHPexpression($each) : $each;
    }

    if ($expr->type === 'WhileDo') {
        $lc = clone($c);
        $lc->addSemicolon = false;

        $condition = visit($expr->test, $lc);

        $lc->addSemicolon = true;
        $body = array_map(fn($it) => visit($it, $lc), $expr->body);

        return PHPwhileDo(PHPmethodCall($condition, 'toNative'), $body);
    }

    if ($expr->type === 'DoWhile') {
        $lc = clone($c);
        $lc->addSemicolon = false;

        $condition = visit($expr->test, $lc);

        $lc->addSemicolon = true;
        $body = array_map(fn($it) => visit($it, $lc), $expr->body);

        return PHPdoWhile($body, PHPmethodCall($condition, 'toNative'));
    }

    if ($expr->type === 'Continue') {
        return PHPcontinue();
    }

    if ($expr->type === 'Break') {
        return PHPbreak();
    }

    if ($expr->type === 'Return') {
        $lc = clone($c);
        $lc->addSemicolon = false;
        $lc->wrapIfsInClosure = true;

        return PHPreturn($expr->expression ? visit($expr->expression, $lc) : null);
    }

    if ($expr->type === 'Prefix') {
        $functionName = match ($expr->operator) {
            '!' => 'prefix_exclamation',
            default => throw new Error('unknown operator ' . $expr->operator),
        };

        $lc = clone($c);
        $lc->addSemicolon = false;
        $lc->wrapIfsInClosure = true;

        $call = PHPmethodCall(
            visit($expr->expression, $lc),
            $functionName
        );

        return $c->addSemicolon ? PHPexpression($call) : $call;
    }

    if ($expr->type === 'Postfix') {
        $functionName = match ($expr->operator) {
            '!' => 'postfix_exclamation',
            '?' => 'postfix_question',
            '+' => 'postfix_plus',
            '-' => 'postfix_minus',
            '*' => 'postfix_asterisk',
            '/' => 'postfix_slash',
            '&' => 'postfix_ampersand',
            'and' => 'postfix_and',
            'or' => 'postfix_or',
            default => throw new Error('unknown operator ' . $expr->operator),
        };

        $lc = clone($c);
        $lc->addSemicolon = false;
        $lc->wrapIfsInClosure = true;

        $call = PHPmethodCall(
            visit($expr->expression, $lc),
            $functionName
        );

        return $c->addSemicolon ? PHPexpression($call) : $call;
    }

    if ($expr->type === 'Infix') {
        $assignModifyExpander = function ($operator) {
            return function ($expr) use ($operator) {
                $identifier = $expr->left;
                return (object)[
                    'type' => 'Assignment',
                    'object' => $identifier,
                    'expression' => (object)[
                        'type' => 'Infix',
                        'left' => $identifier,
                        'operator' => $operator,
                        'right' => $expr->right,
                    ],
                ];
            };
        };


        $functionName = match ($expr->operator) {
            '=' => 'infix_equal',
            '!=' => 'infix_exclamation_equal',
            '>' => 'infix_right_angle_bracket',
            '<' => 'infix_left_angle_bracket',
            '>=' => 'infix_right_angle_bracket_equal',
            '<=' => 'infix_left_angle_bracket_equal',
            '+' => 'infix_plus',
            '-' => 'infix_minus',
            '*' => 'infix_asterisk',
            '/' => 'infix_slash',
            '%' => 'infix_percentage',
            '^' => 'infix_caret',
            '&' => 'infix_ampersand',
            '|' => 'infix_pipe',
            'and' => 'infix_and',
            'or' => 'infix_or',
            '!' => 'infix_exclamation',
            '?' => 'infix_question',
            '~' => 'infix_tilde',
            '@' => 'infix_at',
            '#' => 'infix_hash',
            '_' => 'infix_underscore',
            '/?' => 'infix_slash_question',
            '<<&' => $assignModifyExpander('&'),
            '<<+' => $assignModifyExpander('+'),
            '<<-' => $assignModifyExpander('-'),
            '<<*' => $assignModifyExpander('*'),
            '<</' => $assignModifyExpander('/'),
            'kinda' => 'infix_kinda',
            'union' => 'infix_union',
            'intersection' => 'infix_intersection',
            'difference' => 'infix_difference',
            'only' => 'only',
            'except' => 'except',
            'map' => 'map',
            'apply' => 'apply',
            default => throw new Error('unknown operator ' . $expr->operator),
        };

        if ($functionName instanceof Closure) {
            return visit($functionName($expr), $c);
        }


        $lc = clone($c);
        $lc->addSemicolon = false;
        $lc->wrapIfsInClosure = true;

        $left = visit($expr->left, $lc);

        if (in_array($functionName, ['map', 'only', 'except'])) {
            // Right part can be an expression too, for shortness. E.g. :
            // [1,2,3] only $ > 5
            // [1,2,3] map if $ < 3 then 'x' else $
            if ($expr->right->type !== 'Function') {
                $lc->knownVariables[] = '$it';
                $expression = visit($expr->right, $lc);

                $c->knownVariables = array_unique($c->knownVariables);
                $uses = array_map(fn($it) => PHPuse($it), $c->knownVariables);

                // If statements would already return something
                if (!($expression instanceof Node\Stmt\If_)) {
                    $expression = PHPreturn($expression);
                }

                $closure = PHPclosure(
                    [$expression],
                    [PHPvariable('$it')],
                    $uses
                );
            } else {
                $closure = visit($expr->right, $lc);
            }

            $call = PHPfunctionCall($functionName, [$left, $closure]);
        } else if (in_array($functionName, ['apply'])) {
            $call = PHPfunctionCall($functionName, [$left, visit($expr->right, $lc)]);
        } else {
            $call = PHPmethodCall(
                visit($expr->left, $lc),
                $functionName,
                [visit($expr->right, $lc)],
            );
        }

        return $c->addSemicolon ? PHPexpression($call) : $call;
    }

    if ($expr->type === 'ImpliedVariable') {
        return PHPvariable('$it');
    }

    if ($expr->type === 'Str') {
        $parts = explode(' ', $expr->value);
        $parts = array_map(fn($it) => $it === '$' ? '$it' : $it, $parts);
        $toReplace = array_unique(array_filter($parts, fn($it) => in_array($it, $c->knownVariables)));

        if (empty($toReplace)) {
            $string = PHPstaticCall('String_', 'from', [new Node\Scalar\String_($expr->value)]);
            return $c->addSemicolon ? PHPexpression($string) : $string;
        }

        $chunks = [$expr->value];

        while ($current = array_shift($toReplace)) {
            foreach ($chunks as &$chunk) {
                $interspersed = [];
                foreach (explode($current, $chunk) as $foo) {
                    $interspersed[] = $foo;
                    $interspersed[] = $current;
                }
                array_pop($interspersed);

                $chunk = $interspersed;
            }

            $chunks = array_merge(...array_values($chunks));
        }

        $chunks = array_map(function ($it) use ($c) {
            if (in_array($it, $c->knownVariables)) {
                return PHPmethodCall(PHPvariable($it), 'asString');
            }

            return phpCodeToPhpAst("String_::from('$it')->asString();")[0]->expr;
        }, $chunks);

        $concatenated = array_reduce($chunks, function ($acc, $part) {
            return new Node\Expr\BinaryOp\Concat($acc, $part);
        }, new String_(''));
//
//        $string = $concatenated;
////        $string = PHPstaticCall('String_', 'from', [new Node\Scalar\String_($string)]);
//        return $c->addSemicolon ? PHPexpression($string) : $string;


        return PHPstaticCall('String_', 'from', [$concatenated]);
    }

    if ($expr->type === 'Int') {
        $int = PHPstaticCall('Integer_', 'from', [new Node\Scalar\LNumber($expr->value)]);
        return $c->addSemicolon ? PHPexpression($int) : $int;
    }

    if ($expr->type === 'Dec') {
        $dec = PHPstaticCall('Decimal_', 'from', [new Node\Scalar\DNumber($expr->value)]);
        return $c->addSemicolon ? PHPexpression($dec) : $dec;
    }

    if ($expr->type === 'Bool') {
        $strval = $expr->value === true ? 'true' : 'false';
        $bool = PHPstaticCall('Boolean_', 'from', [new ConstFetch(new Name($strval))]);
        return $c->addSemicolon ? PHPexpression($bool) : $bool;
    }

    if ($expr->type === 'Array') {
        $lc = clone($c);
        $lc->addSemicolon = false;
        $lc->wrapIfsInClosure = true;

        if ($expr->range === true) {
            if ($expr->infinite === true) {
                return PHPstaticCall('Array_', 'from', [
                        PHParray([]),
                        visit($expr->start, $lc),
                        PHPstring('inf')]
                );
            }
            return PHPstaticCall('Array_', 'from', [
                    PHParray([]),
                    visit($expr->start, $lc),
                    visit($expr->end, $lc)]
            );
        }

        if ($expr->values === null) {
            $expr->values = [];
        }

        $values = array_map(fn($it) => visit($it, $lc), $expr->values);

        return PHPstaticCall('Array_', 'from', [PHParray($values)]);
    }

    if ($expr->type === 'Map_') {
        $lc = clone($c);
        $lc->addSemicolon = false;
        $lc->wrapIfsInClosure = true;

        $pairs = [];
        foreach ($expr->pairs as $pair) {
            $item = new Node\Expr\ArrayItem(visit($pair->value, $lc), PHPstring($pair->key->value));
            $pairs[] = $item;
        }

        return PHPstaticCall('Map_', 'from', [PHParray($pairs)]);
    }

    if ($expr->type === 'RawPHP') {
        $phpAST = phpCodeToPhpAst($expr->code);

        $c->knownVariables = array_unique($c->knownVariables);
        $uses = array_map(fn($it) => PHPuse($it), $c->knownVariables);

        return PHPexpression(PHPfunctionCall(PHPclosure($phpAST, [], $uses)));
    }

    if ($expr->type === 'Import') {
        $destinationFile = $GLOBALS['$destinationFile'];                        // output\/katas\/elementary.say.php
        $timesRemovedFromRoot = count(explode('/', dirname($destinationFile))); // 2
        $timesRemovedFromRoot--;                                                // Because actually their root is output/

        $relativePath = array_reduce(range(1, $timesRemovedFromRoot), function ($acc, $it) {
            return $acc . '/..';
        }, '');

        $relativePath .= '/' . $expr->path;

        $relativePath = new Node\Expr\BinaryOp\Concat(
            new PhpParser\Node\Scalar\MagicConst\Dir(),
            new String_($relativePath)
        );

        return PHPexpression(PHPInclude($relativePath));
    }
}

function PHPexpression(Node\Expr $expr) {
    return new PhpParser\Node\Stmt\Expression($expr);
}

function PHPpropertyFetch(Node\Expr $var, string $name) {
    return new Node\Expr\PropertyFetch($var, new Node\Identifier($name));
}

function PHPassignment($variable, $init) {
    return new Node\Expr\Assign($variable, $init);
}

function sayNameToPhpName($name) {
    return str_replace(
        ['!', '@', '#', '?', '*', '$', '%'],
        ['_excl_', '_at_', '_hash_', '_quest_', '_star_', '_dollar_', '_pct_'],
        $name
    );
}

function PHPvariable(string $name) {
    return new Node\Expr\Variable(sayNameToPhpName($name));
}

function PHPfunctionCall($nameOrExpr, array $args = []) {
    return new FuncCall(
        is_string($nameOrExpr) ? new Name($nameOrExpr) : $nameOrExpr,
        $args
    );
}

function PHPmethodCall(Node\Expr $var, string $methodName, array $args = []) {
    return new Node\Expr\MethodCall(
        $var,
        new Node\Identifier($methodName),
        $args
    );
}

function PHPreturn($expression) {
    return new Node\Stmt\Return_($expression);
}

function PHPcontinue() {
    return new Node\Stmt\Continue_();
}

function PHPbreak() {
    return new Node\Stmt\Break_();
}

function PHPparam($var, $default = null) {
    return new Node\Param(
        $var,
        $default
    );
}

function PHPclosure(array $statements, array $params = [], array $uses = []) {
    return new Node\Expr\Closure(
        [
            'static' => false,
            'byRef' => false,
            'params' => $params,
            'uses' => $uses,
            'returnType' => null,
            'stmts' => $statements,
            'attrGroups' => [],
        ],
    );
}

function PHPuse(string $name, $byRef = true) {
    return new Node\Expr\ClosureUse(PHPvariable($name), $byRef);
}

function PHPglobal(array $globals) {
    return new Node\Stmt\Global_($globals);
}

function PHPstaticCall(string $className, string $methodName, array $args = []) {
    return new Node\Expr\StaticCall(
        new Name($className),
        new Node\Identifier($methodName),
        $args
    );
}

function PHPInclude(string|Node\Expr $path) {
    return new Node\Expr\Include_(
        is_string($path) ? new String_($path) : $path,
        Node\Expr\Include_::TYPE_REQUIRE_ONCE
    );
}

function PHPForeach(
    Node\Expr $iterable,
    Node\Expr $valueVar,
    array $statements = [],
    Node\Expr $keyVar = null,
    bool $byRef = false
) {
    return new Node\Stmt\Foreach_(
        $iterable,
        $valueVar,
        [
            'keyVar' => $keyVar,
            'byRef' => $byRef,
            'stmts' => $statements
        ]
    );
}

function PHPwhileDo(Node\Expr $condition, array $statements) {
    return new Node\Stmt\While_($condition, $statements);
}

function PHPdoWhile(array $statements, Node\Expr $condition) {
    return new Node\Stmt\Do_($condition, $statements);
}

function PHPif(
    Node\Expr $test,
    array $thenStatements,
    array $elseStatements = [],
    array $elseIfs = [],
) {
    return new Node\Stmt\If_(
        $test,
        [
            'stmts' => $thenStatements,
            'elseifs' => $elseIfs,
            'else' => !empty($elseStatements) ? (new Node\Stmt\Else_($elseStatements)) : null,
        ]
    );
}

function PHParray($items = []) {
    return new Node\Expr\Array_($items);
}

function PHPnull() {
    return new ConstFetch(new Name('null'));
}

function PHPstring($string) {
    return new String_($string);
}

/**
 * @return Node\Stmt[]|null
 */
function phpCodeToPhpAst(string $code): ?array {
    $code = "<?php $code";

    $parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
    return $parser->parse($code);
}

function phpAstToPhpCode($ast): string {
    $prettyPrinter = new Standard(['shortArraySyntax' => true]);
    return $prettyPrinter->prettyPrintFile($ast);
}

function phpAstDump($ast) {
    $dumper = new NodeDumper;
    echo $dumper->dump($ast) . PHP_EOL;
}
