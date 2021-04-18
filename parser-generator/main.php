<?php
//namespace Nikos;

require __DIR__ . '/vendor/autoload.php';

spl_autoload_register(function ($class) {
    require_once 'build/' . ucfirst($class) . '.php';
});

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;

ini_set('memory_limit', '-1');

final class Visitor extends \SayParserBaseVisitor {
    public function visitTop(Context\TopContext $context) {
        $program = (object)[
            'name' => 'default',
            'statements' => []
        ];

        foreach ($context->children as $child) {
            $program->statements[] = $this->visit($child);
        }

        return $program;
    }

    public function visitAssignment(Context\AssignmentContext $context) {
        return (object)[
            'name' => 'Assignment',
            'object' => $this->visit($context->getChild(0)),
            'expression' => $this->visit($context->getChild(2))
        ];
    }

    public function visitSay(Context\SayContext $context) {
        return (object)[
            'type' => 'Say',
            'expression' => $this->visit($context->expression())
        ];
    }

    public function visitSayNL(Context\SayNLContext $context) {
        return (object)[
            'type' => 'SayNL',
            'expression' => $this->visit($context->expression())
        ];
    }

    public function visitAsk(Context\AskContext $context) {
        return (object)[
            'type' => 'Ask',
            'expression' => $this->visit($context->expression())
        ];
    }

    public function visitP_expression(Context\P_expressionContext $context) {
        return $this->visit($context->expression());
    }

    public function visitArray_literal(Context\Array_literalContext $context) {
        $array = (object)['type' => 'Array'];

        if ($context->array_init() instanceof \Context\ExplicitContext) {
            if (empty($context->array_init()->children)) {
                return $array;
            }

            $array->values = array_map(function ($it) {
                return $this->visit($it);
            }, array_filter($context->array_init()->children, function ($it) {
                return $it instanceof \Context\ExpressionContext;
            }));

            return $array;
        }

        if ($context->array_init() instanceof \Context\InfiniteContext) {
            $array->range = true;
            $array->infinite = true;
            $array->start = $this->visit($context->array_init()->getChild(0));
            return $array;
        }

        $array->range = true;
        $array->start = $this->visit($context->array_init()->getChild(0)->getChild(0));
        $array->end = $this->visit($context->array_init()->getChild(0)->getChild(2));
    }

    public function visitMap_literal(Context\Map_literalContext $context) {
        $map = (object)['type' => 'Map_'];

        if ($context->map_init() instanceof \Context\Empty_MapContext) {
            return $map;
        }

        foreach ($context->map_init()->children as $pairOrComma) {
            if ($pairOrComma instanceof TerminalNode) {
                continue;
            }

            $map->pairs[] = (object)[
                'type' => 'MapPair',
                'key' => str_unquote($pairOrComma->getChild(0)->getText()),
                'value' => $this->visit($pairOrComma->getChild(2)),
            ];

        }
    }

    public function visitIndex_access(Context\Index_accessContext $context) {
        $indexAccess = (object)['type' => 'IndexAccess'];
        $indexAccess->object = $this->visit($context->getChild(0));

        $indexes = $context->iterables_indexes();

        if ($indexes instanceof \Context\Explicit_index_accessContext) {
            $indexAccess->indexes = array_map(function ($it) {
                return $this->visit($it);
            }, array_filter($indexes->children, function ($it) {
                return $it instanceof \Context\ExpressionContext;
            }));
        }

        if ($indexes instanceof \Context\Range_index_accessContext) {
            $indexAccess->range = true;

            if ($indexes->closed_range()) {
                $indexAccess->start = $this->visit($indexes->closed_range()->getChild(0));
                $indexAccess->end = $this->visit($indexes->closed_range()->getChild(2));
            }

            if ($indexes->open_range()) {
                //$foo[$bar..]
                if ($indexes->open_range()->getChild(1)->getText() === '..') {
                    $indexAccess->start = $this->visit($indexes->open_range()->getChild(0));
                } else {
                    //$foo[..$bar]
                    $indexAccess->end = $this->visit($indexes->open_range()->getChild(1));
                }
            }
        }

        if ($indexes instanceof \Context\Helper_index_accessContext) {
            $indexAccess->indexes[] = (object)[
                'type' => 'Str',
                'value' => $indexes->index_helper()->getText()
            ];
        }
    }

    public function visitIf_(Context\If_Context $context) {
        $if = (object)['type' => 'If'];

        $if->test = $this->visit($context->test);

        foreach ($context->then_body()->children as $thenStatement) {
            $if->thenStatements[] = $this->visit($thenStatement);
        }

        if ($context->else_body()) {
            foreach ($context->else_body()->children as $elseStatement) {
                $if->elseStatements[] = $this->visit($elseStatement);
            }
        }

        return $if;
    }

    public function visitEach(Context\EachContext $context) {
        $each = (object)['type' => 'Each'];

        $each->iterable = $this->visit($context->getChild(1));

        if ($context->each_aliases()) {
            if ($context->each_aliases()->valueAlias) {
                $each->keyAlias = (object)[
                    'type' => 'Identifier',
                    'id' => $context->each_aliases()->keyValueAlias->getText()
                ];
                $each->valueAlias = (object)[
                    'type' => 'Identifier',
                    'id' => $context->each_aliases()->valueAlias->getText()
                ];
            } else {
                $each->valueAlias = (object)[
                    'type' => 'Identifier',
                    'id' => $context->each_aliases()->keyValueAlias->getText()
                ];
            }
        }

        return $each;
    }

    public function visitWhile_do(Context\While_doContext $context) {
        $whileExpr = (object)['type' => 'WhileDo'];
        $whileExpr->test = $this->visit($context->test);

        foreach ($context->while_body()->expression() as $expression) {
            $whileExpr->body[] = $this->visit($expression);
        }

        return $whileExpr;
    }

    public function visitDo_while(Context\Do_whileContext $context) {
        $doWhile = (object)['type' => 'DoWhile'];
        $doWhile->test = $this->visit($context->test);

        foreach ($context->do_body()->expression() as $expression) {
            $doWhile->body[] = $this->visit($expression);
        }
    }

    public function visitContinue(Context\ContinueContext $context) {
        return (object)['type' => 'Continue'];
    }

    public function visitBreak(Context\BreakContext $context) {
        return (object)['type' => 'Break'];
    }

    public function visitReturn(Context\ReturnContext $context) {
        $return = (object)['type' => 'Return'];

        if ($context->expression()) {
            $return->expression = $this->visit($context->expression());
        }

        return $return;
    }

    public function visitProperty_access(Context\Property_accessContext $context) {
        $propertyAccess = (object)['type' => 'PropertyAccess'];
        $propertyAccess->object = $this->visit($context->expression());
        $propertyAccess->identifier = (object)[
            'type' => 'Identifier',
            'id' => $context->IDENTIFIER()->getText()
        ];

        return $propertyAccess;
    }

    public function visitMethod_call(Context\Method_callContext $context) {
        $call = (object)['type' => 'MethodCall'];
        $call->object = $this->visit($context->expression());
        $call->identifier = (object)[
            'type' => 'Identifier',
            'id' => $context->IDENTIFIER()->getText()
        ];

        if ($context->arg_list()) {
            foreach ($context->arg_list()->children as $argument) {
                if ($argument instanceof TerminalNode) {
                    continue;
                }

                $call->args[] = $this->visit($argument);
            }

        }

        return $call;
    }

    public function visitFunction_literal(Context\Function_literalContext $context) {
        $function = (object)['type' => 'Function'];

        if ($context->param_list()) {
            foreach ($context->param_list()->params as $param) {
                $p = (object)['type' => 'FunctionParam'];
                $p->identifier = (object)[
                    'type' => 'Identifier',
                    'id' => $param->IDENTIFIER()->getText()
                ];

                if ($param->defaultValue) {
                    $p->defaultValue = $this->visit($param->defaultValue);
                }

                $function->params[] = $p;
            }

            foreach ($context->expression() as $expression) {
                $function->body[] = $this->visit($expression);
            }
        }

        return $function;
    }

    public function visitImplied_variable(Context\Implied_variableContext $context) {
        return (object)['type' => 'ImpliedVariable'];
    }

    public function visitFunction_call(Context\Function_callContext $context) {
        $call = (object)['type' => 'FunctionCall'];
        $call->object = $this->visit($context->expression());

        if ($context->arg_list()) {
            foreach ($context->arg_list()->children as $arg) {
                if ($arg instanceof TerminalNode) {
                    continue;
                }

                $call->args[] = $this->visit($arg);
            }
        }

        return $call;
    }

    public function visitArgPlaceholder(Context\ArgPlaceholderContext $context) {
        return (object)['type' => 'ArgPlaceholder'];
    }

    public function visitInfix(Context\InfixContext $context) {
        return (object)[
            'type' => 'Infix',
            'left' => $this->visit($context->getChild(0)),
            'operator' => $context->getChild(1)->getText(),
            'right' => $this->visit($context->getChild(2)),
        ];
    }

    public function visitIterableOperations(Context\IterableOperationsContext $context) {
        return (object)[
            'type' => 'Infix',
            'left' => $this->visit($context->getChild(0)),
            'operator' => $context->getChild(1)->getText(),
            'right' => $this->visit($context->getChild(2)),
        ];
    }

    public function visitBooleanMath(Context\BooleanMathContext $context) {
        return (object)[
            'type' => 'Infix',
            'left' => $this->visit($context->getChild(0)),
            'operator' => $context->getChild(1)->getText(),
            'right' => $this->visit($context->getChild(2)),
        ];
    }

    public function visitPrefix(Context\PrefixContext $context) {
        return (object)[
            'type' => 'Prefix',
            'left' => $this->visit($context->getChild(0)),
            'operator' => $context->getChild(1)->getText()
        ];
    }

    public function visitPostfix(Context\PostfixContext $context) {
        return (object)[
            'type' => 'Postfix',
            'operator' => $context->getChild(1)->getText(),
            'left' => $this->visit($context->getChild(0))
        ];
    }

    public function visitLiteral(Context\LiteralContext $context) {
        $floatToNode = function ($float) {
            if (intval($float) == $float) {
                return (object)[
                    'type' => 'Int',
                    'value' => intval($float)
                ];
            }

            return (object)[
                'type' => 'Dec',
                'value' => floatval($float)
            ];
        };

        $value = $context->getText();
        $pct = false;


        if ($value === 'true' || $value === 'false') {
            return (object)[
                'type' => 'Bool',
                'value' => $value === 'true'
            ];
        }

        if (str_ends_with($value, '%')) {
            $value = substr($value, 0, -1);
            $pct = true;
        }

        if (is_numeric($value)) {
            $float = floatval($value);
            if ($pct) {
                $float = $float / 100;
            }

            return $floatToNode($float);

        }

        return (object)[
            'type' => 'Str',
            'value' => str_unquote($value)
        ];
    }

    public function visitIdentifier(Context\IdentifierContext $context) {
        return (object)[
            'type' => 'Identifier',
            'id' => $context->getText()
        ];
    }

    public function visitMacro_definition(Context\Macro_definitionContext $context) {
        $macro = (object)['type' => 'Macro'];

        foreach ($context->children as $child) {
            if ($child->getText() === 'macro') {
                continue;
            }

            if ($child->getText() === '->') {
                continue;
            }

            if ($child instanceof TerminalNode) {
                $macro->keywordsParamsOrder[] = (object)[
                    'type' => 'Identifier',
                    'id' => $child->getText()
                ];
                $macro->keywords[] = (object)[
                    'type' => 'Identifier',
                    'id' => $child->getText()
                ];
                continue;
            }

            if ($child instanceof \Context\Macro_paramContext) {
                $macro->keywordsParamsOrder[] = (object)[
                    'type' => 'Identifier',
                    'id' => $child->param->getText()
                ];
                $macro->keywords[] = (object)[
                    'type' => 'Identifier',
                    'id' => $child->param->getText()
                ];
            }

            foreach ($context->expression() as $expression) {
                $macro->body[] = $this->visit($expression);
            }
        }
    }

    public function visitMacro(Context\MacroContext $context) {
        $macro = (object)['type' => 'MacroCall'];

        foreach ($context->expression() as $expression) {
            $macro->expressions[] = $this->visit($expression);
        }

        return $macro;
    }

    public function visitRaw_php(Context\Raw_phpContext $context) {
        return (object)[
            'type' => 'RawPHP',
            'code' => $context->getText()
        ];
    }

    public function visitImport_statement(Context\Import_statementContext $context) {
        return (object)[
            'type' => 'Import',
            'code' => str_unquote($context->STRING()->getText())
        ];
    }

}

function str_ends_with($haystack, $needle) {
    $length = strlen($needle);
    if (!$length) {
        return true;
    }
    return substr($haystack, -$length) === $needle;
}

function str_unquote($string) {
    return substr($string, 1, -1);
}

$input = InputStream::fromPath($argv[1]);
$lexer = new \SayLexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new SayParser($tokens);
$parser->addErrorListener(new DiagnosticErrorListener());
$parser->setBuildParseTree(true);
$tree = $parser->top();
$visitor = new Visitor();

die(json_encode($visitor->visitTop($tree), JSON_PRETTY_PRINT));
