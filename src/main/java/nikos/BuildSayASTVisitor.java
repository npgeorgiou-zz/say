package nikos;

import nikos.ast.*;
import nikos.ast.expressions.*;
import nikos.ast.expressions.literals.*;
import main.java.nikos.generated.SayParserBaseVisitor;
import main.java.nikos.generated.SayParser.*;
import org.antlr.v4.runtime.tree.ParseTree;
import org.antlr.v4.runtime.tree.TerminalNode;
import nikos.ast.expressions.literals.Map_;

import java.util.ArrayList;
import java.util.List;
import java.util.stream.Collectors;
import java.math.BigDecimal;

public class BuildSayASTVisitor extends SayParserBaseVisitor<Node> {

    public static String unquote(String string) {
        if ((string.startsWith("'") && string.endsWith("'"))) {
            return string.substring(1, string.length() - 1);
        }

        return string.substring(1, string.length() - 1);
    }

    public Node visitTop(TopContext context) {
        Program file = new Program();

        if (context.children == null) {
            return file;
        }

        List<ParseTree> children = context.children;

        for (ParseTree child : children) {
            file.statements.add(visit(child));
        }

        return file;
    }

    public Node visitAssignment(AssignmentContext context) {
        Assignment assignment = new Assignment();
        assignment.object = visit(context.getChild(0));
        assignment.expression = visit(context.getChild(2));

        return assignment;
    }

    public Node visitSay(SayContext context) {
        Say say = new Say();
        say.expression = visit(context.expression());
        return say;
    }

    public Node visitSayNL(SayNLContext context) {
        SayNL say = new SayNL();
        say.expression = visit(context.expression());
        return say;
    }

    public Node visitDebug(DebugContext context) {
        Debug debug = new Debug();

        for (ParseTree child : context.children) {
            if (child instanceof TerminalNode) {
                continue;
            }

            debug.expressions.add(visit(child));
        }

        return debug;
    }

    public Node visitAsk(AskContext context) {
        Ask ask = new Ask();
        ask.expression = visit(context.expression());
        return ask;
    }

    public Node visitP_expression(P_expressionContext context) {
        return visit(context.expression());
    }

    public Node visitArray_literal(Array_literalContext context) {
        Array array = new Array();

        if (context.array_init() instanceof ExplicitContext) {
            if (context.array_init().children == null) {
                return array;
            }

            array.values = context.array_init().children.stream()
                    .filter(child -> child instanceof ExpressionContext)
                    .map(child -> visit(child))
                    .collect(Collectors.toCollection(ArrayList<Node>::new));

            return array;
        }

        if (context.array_init() instanceof InfiniteContext) {
            array.range = true;
            array.infinite = true;
            array.start = visit(context.array_init().getChild(0));

            return array;
        }

        Closed_rangeContext closedRange = (Closed_rangeContext) context.array_init().getChild(0);
        array.range = true;
        array.start = visit(closedRange.getChild(0));
        array.end = visit(closedRange.getChild(2));
        return array;
    }

    public Node visitMap_literal(Map_literalContext context) {
        Map_ map = new Map_();

        if (context.map_init() instanceof Empty_MapContext) {
            return map;
        }

        for (ParseTree pair : context.map_init().children) {
            if (pair instanceof TerminalNode) {
                continue;
            }

            MapPair mapPair = new MapPair(
                    new Str(unquote(pair.getChild(0).getText())),
                    visit(pair.getChild(2))
            );
            map.pairs.add(mapPair);
        }

        return map;
    }

//    public Node visitPipe(PipeContext context) {
//        return visit(context.getChild(2));
//    }

    private ParseTree getParentOf(ParseTree tree) {
        ParseTree parent = tree.getParent();
        if (parent instanceof P_expressionContext) {
            parent = parent.getParent();
        }

        return parent;
    }

    public Node visitIndex_access(Index_accessContext context) {
        IndexAccess indexAccess = new IndexAccess();
        indexAccess.object = visit(context.getChild(0));

        Iterables_indexesContext indexes = context.iterables_indexes();

        if (indexes instanceof Explicit_index_accessContext) {
            indexAccess.indexes = indexes.children.stream()
                    .filter(child -> child instanceof ExpressionContext)
                    .map(child -> visit(child))
                    .collect(Collectors.toCollection(ArrayList<Node>::new));
        }

        if (indexes instanceof Range_index_accessContext) {
            Range_index_accessContext casted = (Range_index_accessContext) indexes;
            indexAccess.range = true;

            if (casted.closed_range() != null) {
                indexAccess.start = visit(casted.closed_range().getChild(0));
                indexAccess.end = visit(casted.closed_range().getChild(2));
            }

            if (casted.open_range() != null) {
                //$foo[$bar..]
                if (casted.open_range().getChild(1).getText().equals("..")) {
                    indexAccess.start = visit(casted.open_range().getChild(0));
                } else {
                    //$foo[..$bar]
                    indexAccess.end = visit(casted.open_range().getChild(1));
                }

            }
        }

        if (indexes instanceof Helper_index_accessContext) {
            Index_helperContext helper = ((Helper_index_accessContext) indexes).index_helper();

            indexAccess.indexes.add(new Str(helper.getText()));
        }

        return indexAccess;
    }

    public Node visitIf_(If_Context context) {
        If ifExpr = new If();

        ifExpr.test = visit(context.test);

        for (ParseTree thenStatement : context.then_body().children) {
            ifExpr.thenStatements.add(visit(thenStatement));
        }

        if (context.else_body() != null) {
            for (ParseTree elseStatement : context.else_body().children) {
                ifExpr.elseStatements.add(visit(elseStatement));
            }
        }

        return ifExpr;
    }

    public Node visitEach(EachContext context) {
        Each eachExpr = new Each();

        eachExpr.iterable = visit(context.getChild(1));

        if (context.each_aliases() != null) {
            if (context.each_aliases().valueAlias != null) {
                eachExpr.keyAlias = new Identifier(context.each_aliases().keyValueAlias.getText());
                eachExpr.valueAlias = new Identifier(context.each_aliases().valueAlias.getText());
            } else {
                eachExpr.valueAlias = new Identifier(context.each_aliases().keyValueAlias.getText());
            }
        }

        for (ParseTree expression : context.each_body().expression()) {
            eachExpr.body.add(visit(expression));
        }

        return eachExpr;
    }

    public Node visitWhile_do(While_doContext context) {
        WhileDo whileExpr = new WhileDo();
        whileExpr.test = visit(context.test);

        for (ParseTree expression : context.while_body().expression()) {
            whileExpr.body.add(visit(expression));
        }

        return whileExpr;
    }

    public Node visitDo_while(Do_whileContext context) {
        DoWhile doWhile = new DoWhile();
        doWhile.test = visit(context.test);

        for (ParseTree expression : context.do_body().expression()) {
            doWhile.body.add(visit(expression));
        }

        return doWhile;
    }

    public Node visitContinue(ContinueContext context) {
        return new Continue();
    }

    public Node visitBreak(BreakContext context) {
        return new Break();
    }

    public Node visitReturn(ReturnContext context) {
        Return expr = new Return();

        if (context.expression() != null) {
            expr.expression = visit(context.expression());
        }

        return expr;
    }

    public Node visitProperty_access(Property_accessContext context) {
        PropertyAccess propertyAccess = new PropertyAccess();

        propertyAccess.object = visit(context.expression());
        propertyAccess.identifier = new Identifier(context.IDENTIFIER().getText());

        return propertyAccess;
    }

    public Node visitMethod_call(Method_callContext context) {
        MethodCall call = new MethodCall();

        call.object = visit(context.expression());
        call.identifier = new Identifier(context.IDENTIFIER().getText());

        if (context.arg_list() != null) {
            for (ParseTree arg : context.arg_list().children) {
                if (arg instanceof TerminalNode) {
                    continue;
                }

                call.args.add(visit(arg));
            }
        }

        return call;
    }

    public Node visitFunction_literal(Function_literalContext context) {
        Function function = new Function();

        if (context.param_list() != null) {
            for (Function_paramContext param : context.param_list().params) {
                FunctionParam p = new FunctionParam();
                p.identifier = new Identifier(param.IDENTIFIER().getText());

                if (param.defaultValue != null) {
                    p.defaultValue = visit(param.defaultValue);
                }

                function.params.add(p);
            }
        }

        for (ParseTree expression : context.expression()) {
            function.body.add(visit(expression));
        }

        return function;
    }

    public Node visitImplied_variable(Implied_variableContext context) {
        return new ImpliedVariable();
    }

    public Node visitFunction_call(Function_callContext context) {
        FunctionCall call = new FunctionCall();

        call.object = visit(context.expression());

        if (context.arg_list() != null) {
            for (ParseTree arg : context.arg_list().children) {
                if (arg instanceof TerminalNode) {
                    continue;
                }

                call.args.add(visit(arg));
            }
        }

        return call;
    }

    public Node visitArgPlaceholder(ArgPlaceholderContext context) {
        return new ArgPlaceholder();
    }

    public Node visitInfix(InfixContext context) {
        return new Infix(
                visit(context.getChild(0)),
                context.getChild(1).getText(),
                visit(context.getChild(2))
        );
    }

    public Node visitIterableOperations(IterableOperationsContext context) {
        return new Infix(
                visit(context.getChild(0)),
                context.getChild(1).getText(),
                visit(context.getChild(2))
        );
    }

    public Node visitBooleanMath(BooleanMathContext context) {
        return new Infix(
                visit(context.getChild(0)),
                context.getChild(1).getText(),
                visit(context.getChild(2))
        );
    }

    public Node visitPrefix(PrefixContext context) {
        return new Prefix(
                context.getChild(0).getText(),
                visit(context.getChild(1))
        );
    }

    public Node visitPostfix(PostfixContext context) {
        return new Postfix(
                context.getChild(1).getText(),
                visit(context.getChild(0))
        );
    }

    public Node visitLiteral(LiteralContext context) {
        String value = context.getText();
        boolean pct = false;

        if (value.equals("true") || value.equals("false")) {
            return new Bool(Boolean.parseBoolean(value));
        }

        if (value.endsWith("%")) {
            value = value.substring(0, value.length() - 1);
            pct = true;
        }

        try {
            if (!pct) {
                return new Int(Integer.parseInt(value));
            }

            BigDecimal decimal = new BigDecimal(value);
            decimal = decimal.divide(BigDecimal.valueOf(100));

            // If is int
            if (decimal.stripTrailingZeros().scale() <= 0) {
                return new Int(decimal.intValue());
            }

            return new Dec(decimal);

        } catch (NumberFormatException e) {
            //not int
        }

        try {
            BigDecimal decimal = new BigDecimal(value);
            return new Dec(pct ? decimal.divide(BigDecimal.valueOf(100)) : decimal);
        } catch (NumberFormatException e) {
            //not float
        }

        return new Str(unquote(context.getText()));
    }

    public Node visitIdentifier(IdentifierContext context) {
        return new Identifier(context.getText());
    }

    public Node visitMacro_definition(Macro_definitionContext context) {
        Macro macro = new Macro();

        for (ParseTree child : context.children) {
            if (child.getText().equals("macro")) {
                continue;
            }

            if (child.getText().equals("->")) {
                break;
            }

            if (child instanceof TerminalNode) {
                macro.keywordsParamsOrder.add(new Identifier(child.getText()));
                macro.keywords.add(new Identifier(child.getText()));
                continue;
            }

            if (child instanceof Macro_paramContext) {
                Macro_paramContext foo = (Macro_paramContext) child;
                macro.keywordsParamsOrder.add(new Identifier(foo.param.getText()));
                macro.params.add(new Identifier(foo.param.getText()));
                continue;
            }


            System.out.println();
        }

//        for (Token keyword : context.keywords) {
//            macro.keywords.add(new Identifier(keyword.getText()));
//        }
//
//        if (!context.params.isEmpty()) {
//            for (Token param : context.params) {
//                macro.params.add(new Identifier(param.getText()));
//            }
//        }

        for (ParseTree expression : context.expression()) {
            macro.body.add(visit(expression));
        }

        return macro;
    }

    public Node visitMacro(MacroContext context) {
        MacroCall macro = new MacroCall();

        for (ParseTree expression : context.expression()) {
            macro.expressions.add(visit(expression));
        }

        return macro;
    }

    public Node visitRaw_php(Raw_phpContext context) {
        return new RawPHP(context.getText());
    }

    public Node visitImport_statement(Import_statementContext context) {
        return new Import(unquote(context.STRING().getText()));
    }
}
