// Generated from C:/Users/nikol/IdeaProjects/say-transpiler/src/main/antlr\SayParser.g4 by ANTLR 4.9.1

    package main.java.nikos.generated;

import org.antlr.v4.runtime.tree.ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@link SayParser}.
 */
public interface SayParserListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@link SayParser#top}.
	 * @param ctx the parse tree
	 */
	void enterTop(SayParser.TopContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#top}.
	 * @param ctx the parse tree
	 */
	void exitTop(SayParser.TopContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#import_statement}.
	 * @param ctx the parse tree
	 */
	void enterImport_statement(SayParser.Import_statementContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#import_statement}.
	 * @param ctx the parse tree
	 */
	void exitImport_statement(SayParser.Import_statementContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Each}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterEach(SayParser.EachContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Each}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitEach(SayParser.EachContext ctx);
	/**
	 * Enter a parse tree produced by the {@code If_}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterIf_(SayParser.If_Context ctx);
	/**
	 * Exit a parse tree produced by the {@code If_}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitIf_(SayParser.If_Context ctx);
	/**
	 * Enter a parse tree produced by the {@code Macro}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterMacro(SayParser.MacroContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Macro}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitMacro(SayParser.MacroContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Break}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterBreak(SayParser.BreakContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Break}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitBreak(SayParser.BreakContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Infix}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterInfix(SayParser.InfixContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Infix}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitInfix(SayParser.InfixContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Macro_definition}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterMacro_definition(SayParser.Macro_definitionContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Macro_definition}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitMacro_definition(SayParser.Macro_definitionContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Say}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterSay(SayParser.SayContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Say}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitSay(SayParser.SayContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Prefix}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterPrefix(SayParser.PrefixContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Prefix}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitPrefix(SayParser.PrefixContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Continue}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterContinue(SayParser.ContinueContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Continue}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitContinue(SayParser.ContinueContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Assignment}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterAssignment(SayParser.AssignmentContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Assignment}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitAssignment(SayParser.AssignmentContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Index_access}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterIndex_access(SayParser.Index_accessContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Index_access}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitIndex_access(SayParser.Index_accessContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Map_literal}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterMap_literal(SayParser.Map_literalContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Map_literal}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitMap_literal(SayParser.Map_literalContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Identifier}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterIdentifier(SayParser.IdentifierContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Identifier}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitIdentifier(SayParser.IdentifierContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Implied_variable}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterImplied_variable(SayParser.Implied_variableContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Implied_variable}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitImplied_variable(SayParser.Implied_variableContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Literal}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterLiteral(SayParser.LiteralContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Literal}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitLiteral(SayParser.LiteralContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Ask}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterAsk(SayParser.AskContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Ask}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitAsk(SayParser.AskContext ctx);
	/**
	 * Enter a parse tree produced by the {@code IterableOperations}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterIterableOperations(SayParser.IterableOperationsContext ctx);
	/**
	 * Exit a parse tree produced by the {@code IterableOperations}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitIterableOperations(SayParser.IterableOperationsContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Debug}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterDebug(SayParser.DebugContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Debug}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitDebug(SayParser.DebugContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Do_while}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterDo_while(SayParser.Do_whileContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Do_while}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitDo_while(SayParser.Do_whileContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Return}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterReturn(SayParser.ReturnContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Return}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitReturn(SayParser.ReturnContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Table}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterTable(SayParser.TableContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Table}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitTable(SayParser.TableContext ctx);
	/**
	 * Enter a parse tree produced by the {@code While_do}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterWhile_do(SayParser.While_doContext ctx);
	/**
	 * Exit a parse tree produced by the {@code While_do}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitWhile_do(SayParser.While_doContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Postfix}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterPostfix(SayParser.PostfixContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Postfix}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitPostfix(SayParser.PostfixContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Function_literal}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterFunction_literal(SayParser.Function_literalContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Function_literal}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitFunction_literal(SayParser.Function_literalContext ctx);
	/**
	 * Enter a parse tree produced by the {@code SayNL}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterSayNL(SayParser.SayNLContext ctx);
	/**
	 * Exit a parse tree produced by the {@code SayNL}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitSayNL(SayParser.SayNLContext ctx);
	/**
	 * Enter a parse tree produced by the {@code BooleanMath}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterBooleanMath(SayParser.BooleanMathContext ctx);
	/**
	 * Exit a parse tree produced by the {@code BooleanMath}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitBooleanMath(SayParser.BooleanMathContext ctx);
	/**
	 * Enter a parse tree produced by the {@code P_expression}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterP_expression(SayParser.P_expressionContext ctx);
	/**
	 * Exit a parse tree produced by the {@code P_expression}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitP_expression(SayParser.P_expressionContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Function_call}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterFunction_call(SayParser.Function_callContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Function_call}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitFunction_call(SayParser.Function_callContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Property_access}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterProperty_access(SayParser.Property_accessContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Property_access}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitProperty_access(SayParser.Property_accessContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Array_literal}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterArray_literal(SayParser.Array_literalContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Array_literal}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitArray_literal(SayParser.Array_literalContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Method_call}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterMethod_call(SayParser.Method_callContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Method_call}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitMethod_call(SayParser.Method_callContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Raw_php}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void enterRaw_php(SayParser.Raw_phpContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Raw_php}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 */
	void exitRaw_php(SayParser.Raw_phpContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#table_header}.
	 * @param ctx the parse tree
	 */
	void enterTable_header(SayParser.Table_headerContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#table_header}.
	 * @param ctx the parse tree
	 */
	void exitTable_header(SayParser.Table_headerContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#table_row}.
	 * @param ctx the parse tree
	 */
	void enterTable_row(SayParser.Table_rowContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#table_row}.
	 * @param ctx the parse tree
	 */
	void exitTable_row(SayParser.Table_rowContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#macro_param}.
	 * @param ctx the parse tree
	 */
	void enterMacro_param(SayParser.Macro_paramContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#macro_param}.
	 * @param ctx the parse tree
	 */
	void exitMacro_param(SayParser.Macro_paramContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#param_list}.
	 * @param ctx the parse tree
	 */
	void enterParam_list(SayParser.Param_listContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#param_list}.
	 * @param ctx the parse tree
	 */
	void exitParam_list(SayParser.Param_listContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#function_param}.
	 * @param ctx the parse tree
	 */
	void enterFunction_param(SayParser.Function_paramContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#function_param}.
	 * @param ctx the parse tree
	 */
	void exitFunction_param(SayParser.Function_paramContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Explicit}
	 * labeled alternative in {@link SayParser#array_init}.
	 * @param ctx the parse tree
	 */
	void enterExplicit(SayParser.ExplicitContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Explicit}
	 * labeled alternative in {@link SayParser#array_init}.
	 * @param ctx the parse tree
	 */
	void exitExplicit(SayParser.ExplicitContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Range}
	 * labeled alternative in {@link SayParser#array_init}.
	 * @param ctx the parse tree
	 */
	void enterRange(SayParser.RangeContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Range}
	 * labeled alternative in {@link SayParser#array_init}.
	 * @param ctx the parse tree
	 */
	void exitRange(SayParser.RangeContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Infinite}
	 * labeled alternative in {@link SayParser#array_init}.
	 * @param ctx the parse tree
	 */
	void enterInfinite(SayParser.InfiniteContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Infinite}
	 * labeled alternative in {@link SayParser#array_init}.
	 * @param ctx the parse tree
	 */
	void exitInfinite(SayParser.InfiniteContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#each_aliases}.
	 * @param ctx the parse tree
	 */
	void enterEach_aliases(SayParser.Each_aliasesContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#each_aliases}.
	 * @param ctx the parse tree
	 */
	void exitEach_aliases(SayParser.Each_aliasesContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Not_empty_Map}
	 * labeled alternative in {@link SayParser#map_init}.
	 * @param ctx the parse tree
	 */
	void enterNot_empty_Map(SayParser.Not_empty_MapContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Not_empty_Map}
	 * labeled alternative in {@link SayParser#map_init}.
	 * @param ctx the parse tree
	 */
	void exitNot_empty_Map(SayParser.Not_empty_MapContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Empty_Map}
	 * labeled alternative in {@link SayParser#map_init}.
	 * @param ctx the parse tree
	 */
	void enterEmpty_Map(SayParser.Empty_MapContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Empty_Map}
	 * labeled alternative in {@link SayParser#map_init}.
	 * @param ctx the parse tree
	 */
	void exitEmpty_Map(SayParser.Empty_MapContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#map_pair}.
	 * @param ctx the parse tree
	 */
	void enterMap_pair(SayParser.Map_pairContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#map_pair}.
	 * @param ctx the parse tree
	 */
	void exitMap_pair(SayParser.Map_pairContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Explicit_index_access}
	 * labeled alternative in {@link SayParser#iterables_indexes}.
	 * @param ctx the parse tree
	 */
	void enterExplicit_index_access(SayParser.Explicit_index_accessContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Explicit_index_access}
	 * labeled alternative in {@link SayParser#iterables_indexes}.
	 * @param ctx the parse tree
	 */
	void exitExplicit_index_access(SayParser.Explicit_index_accessContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Range_index_access}
	 * labeled alternative in {@link SayParser#iterables_indexes}.
	 * @param ctx the parse tree
	 */
	void enterRange_index_access(SayParser.Range_index_accessContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Range_index_access}
	 * labeled alternative in {@link SayParser#iterables_indexes}.
	 * @param ctx the parse tree
	 */
	void exitRange_index_access(SayParser.Range_index_accessContext ctx);
	/**
	 * Enter a parse tree produced by the {@code Helper_index_access}
	 * labeled alternative in {@link SayParser#iterables_indexes}.
	 * @param ctx the parse tree
	 */
	void enterHelper_index_access(SayParser.Helper_index_accessContext ctx);
	/**
	 * Exit a parse tree produced by the {@code Helper_index_access}
	 * labeled alternative in {@link SayParser#iterables_indexes}.
	 * @param ctx the parse tree
	 */
	void exitHelper_index_access(SayParser.Helper_index_accessContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#index_helper}.
	 * @param ctx the parse tree
	 */
	void enterIndex_helper(SayParser.Index_helperContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#index_helper}.
	 * @param ctx the parse tree
	 */
	void exitIndex_helper(SayParser.Index_helperContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#closed_range}.
	 * @param ctx the parse tree
	 */
	void enterClosed_range(SayParser.Closed_rangeContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#closed_range}.
	 * @param ctx the parse tree
	 */
	void exitClosed_range(SayParser.Closed_rangeContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#open_range}.
	 * @param ctx the parse tree
	 */
	void enterOpen_range(SayParser.Open_rangeContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#open_range}.
	 * @param ctx the parse tree
	 */
	void exitOpen_range(SayParser.Open_rangeContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#expression_list}.
	 * @param ctx the parse tree
	 */
	void enterExpression_list(SayParser.Expression_listContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#expression_list}.
	 * @param ctx the parse tree
	 */
	void exitExpression_list(SayParser.Expression_listContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#arg_list}.
	 * @param ctx the parse tree
	 */
	void enterArg_list(SayParser.Arg_listContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#arg_list}.
	 * @param ctx the parse tree
	 */
	void exitArg_list(SayParser.Arg_listContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#arg}.
	 * @param ctx the parse tree
	 */
	void enterArg(SayParser.ArgContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#arg}.
	 * @param ctx the parse tree
	 */
	void exitArg(SayParser.ArgContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#argPlaceholder}.
	 * @param ctx the parse tree
	 */
	void enterArgPlaceholder(SayParser.ArgPlaceholderContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#argPlaceholder}.
	 * @param ctx the parse tree
	 */
	void exitArgPlaceholder(SayParser.ArgPlaceholderContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#then_body}.
	 * @param ctx the parse tree
	 */
	void enterThen_body(SayParser.Then_bodyContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#then_body}.
	 * @param ctx the parse tree
	 */
	void exitThen_body(SayParser.Then_bodyContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#else_body}.
	 * @param ctx the parse tree
	 */
	void enterElse_body(SayParser.Else_bodyContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#else_body}.
	 * @param ctx the parse tree
	 */
	void exitElse_body(SayParser.Else_bodyContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#each_body}.
	 * @param ctx the parse tree
	 */
	void enterEach_body(SayParser.Each_bodyContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#each_body}.
	 * @param ctx the parse tree
	 */
	void exitEach_body(SayParser.Each_bodyContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#while_body}.
	 * @param ctx the parse tree
	 */
	void enterWhile_body(SayParser.While_bodyContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#while_body}.
	 * @param ctx the parse tree
	 */
	void exitWhile_body(SayParser.While_bodyContext ctx);
	/**
	 * Enter a parse tree produced by {@link SayParser#do_body}.
	 * @param ctx the parse tree
	 */
	void enterDo_body(SayParser.Do_bodyContext ctx);
	/**
	 * Exit a parse tree produced by {@link SayParser#do_body}.
	 * @param ctx the parse tree
	 */
	void exitDo_body(SayParser.Do_bodyContext ctx);
}