// Generated from SayParser.g4 by ANTLR 4.9.1

    package main.java.nikos.generated;

import org.antlr.v4.runtime.tree.ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced
 * by {@link SayParser}.
 *
 * @param <T> The return type of the visit operation. Use {@link Void} for
 * operations with no return type.
 */
public interface SayParserVisitor<T> extends ParseTreeVisitor<T> {
	/**
	 * Visit a parse tree produced by {@link SayParser#top}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitTop(SayParser.TopContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#import_statement}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitImport_statement(SayParser.Import_statementContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Each}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitEach(SayParser.EachContext ctx);
	/**
	 * Visit a parse tree produced by the {@code If_}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitIf_(SayParser.If_Context ctx);
	/**
	 * Visit a parse tree produced by the {@code Macro}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitMacro(SayParser.MacroContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Break}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitBreak(SayParser.BreakContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Infix}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitInfix(SayParser.InfixContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Macro_definition}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitMacro_definition(SayParser.Macro_definitionContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Say}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitSay(SayParser.SayContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Prefix}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitPrefix(SayParser.PrefixContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Continue}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitContinue(SayParser.ContinueContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Assignment}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitAssignment(SayParser.AssignmentContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Index_access}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitIndex_access(SayParser.Index_accessContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Map_literal}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitMap_literal(SayParser.Map_literalContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Identifier}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitIdentifier(SayParser.IdentifierContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Implied_variable}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitImplied_variable(SayParser.Implied_variableContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Literal}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitLiteral(SayParser.LiteralContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Ask}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitAsk(SayParser.AskContext ctx);
	/**
	 * Visit a parse tree produced by the {@code IterableOperations}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitIterableOperations(SayParser.IterableOperationsContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Debug}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitDebug(SayParser.DebugContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Do_while}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitDo_while(SayParser.Do_whileContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Return}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitReturn(SayParser.ReturnContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Table}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitTable(SayParser.TableContext ctx);
	/**
	 * Visit a parse tree produced by the {@code While_do}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitWhile_do(SayParser.While_doContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Postfix}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitPostfix(SayParser.PostfixContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Function_literal}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitFunction_literal(SayParser.Function_literalContext ctx);
	/**
	 * Visit a parse tree produced by the {@code SayNL}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitSayNL(SayParser.SayNLContext ctx);
	/**
	 * Visit a parse tree produced by the {@code BooleanMath}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitBooleanMath(SayParser.BooleanMathContext ctx);
	/**
	 * Visit a parse tree produced by the {@code P_expression}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitP_expression(SayParser.P_expressionContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Function_call}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitFunction_call(SayParser.Function_callContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Property_access}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitProperty_access(SayParser.Property_accessContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Array_literal}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitArray_literal(SayParser.Array_literalContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Method_call}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitMethod_call(SayParser.Method_callContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Raw_php}
	 * labeled alternative in {@link SayParser#expression}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitRaw_php(SayParser.Raw_phpContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#table_header}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitTable_header(SayParser.Table_headerContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#table_row}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitTable_row(SayParser.Table_rowContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#macro_param}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitMacro_param(SayParser.Macro_paramContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#param_list}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitParam_list(SayParser.Param_listContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#function_param}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitFunction_param(SayParser.Function_paramContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Explicit}
	 * labeled alternative in {@link SayParser#array_init}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitExplicit(SayParser.ExplicitContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Range}
	 * labeled alternative in {@link SayParser#array_init}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitRange(SayParser.RangeContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Infinite}
	 * labeled alternative in {@link SayParser#array_init}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitInfinite(SayParser.InfiniteContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#each_aliases}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitEach_aliases(SayParser.Each_aliasesContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Not_empty_Map}
	 * labeled alternative in {@link SayParser#map_init}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitNot_empty_Map(SayParser.Not_empty_MapContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Empty_Map}
	 * labeled alternative in {@link SayParser#map_init}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitEmpty_Map(SayParser.Empty_MapContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#map_pair}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitMap_pair(SayParser.Map_pairContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Explicit_index_access}
	 * labeled alternative in {@link SayParser#iterables_indexes}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitExplicit_index_access(SayParser.Explicit_index_accessContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Range_index_access}
	 * labeled alternative in {@link SayParser#iterables_indexes}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitRange_index_access(SayParser.Range_index_accessContext ctx);
	/**
	 * Visit a parse tree produced by the {@code Helper_index_access}
	 * labeled alternative in {@link SayParser#iterables_indexes}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitHelper_index_access(SayParser.Helper_index_accessContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#index_helper}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitIndex_helper(SayParser.Index_helperContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#closed_range}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitClosed_range(SayParser.Closed_rangeContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#open_range}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitOpen_range(SayParser.Open_rangeContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#expression_list}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitExpression_list(SayParser.Expression_listContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#arg_list}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitArg_list(SayParser.Arg_listContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#arg}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitArg(SayParser.ArgContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#argPlaceholder}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitArgPlaceholder(SayParser.ArgPlaceholderContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#then_body}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitThen_body(SayParser.Then_bodyContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#else_body}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitElse_body(SayParser.Else_bodyContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#each_body}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitEach_body(SayParser.Each_bodyContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#while_body}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitWhile_body(SayParser.While_bodyContext ctx);
	/**
	 * Visit a parse tree produced by {@link SayParser#do_body}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitDo_body(SayParser.Do_bodyContext ctx);
}