<?php

/*
 * Generated from SayParser.g4 by ANTLR 4.9
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see SayParser}.
 */
interface SayParserVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see SayParser::top()}.
	 *
	 * @param Context\TopContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTop(Context\TopContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::import_statement()}.
	 *
	 * @param Context\Import_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitImport_statement(Context\Import_statementContext $context);

	/**
	 * Visit a parse tree produced by the `Each` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\EachContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEach(Context\EachContext $context);

	/**
	 * Visit a parse tree produced by the `If_` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\If_Context $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIf_(Context\If_Context $context);

	/**
	 * Visit a parse tree produced by the `Macro` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\MacroContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMacro(Context\MacroContext $context);

	/**
	 * Visit a parse tree produced by the `Break` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\BreakContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBreak(Context\BreakContext $context);

	/**
	 * Visit a parse tree produced by the `Infix` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\InfixContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInfix(Context\InfixContext $context);

	/**
	 * Visit a parse tree produced by the `Macro_definition` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\Macro_definitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMacro_definition(Context\Macro_definitionContext $context);

	/**
	 * Visit a parse tree produced by the `Say` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\SayContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSay(Context\SayContext $context);

	/**
	 * Visit a parse tree produced by the `Prefix` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\PrefixContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrefix(Context\PrefixContext $context);

	/**
	 * Visit a parse tree produced by the `Continue` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\ContinueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContinue(Context\ContinueContext $context);

	/**
	 * Visit a parse tree produced by the `Assignment` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\AssignmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignment(Context\AssignmentContext $context);

	/**
	 * Visit a parse tree produced by the `Index_access` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\Index_accessContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndex_access(Context\Index_accessContext $context);

	/**
	 * Visit a parse tree produced by the `Map_literal` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\Map_literalContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMap_literal(Context\Map_literalContext $context);

	/**
	 * Visit a parse tree produced by the `Identifier` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\IdentifierContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentifier(Context\IdentifierContext $context);

	/**
	 * Visit a parse tree produced by the `Implied_variable` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\Implied_variableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitImplied_variable(Context\Implied_variableContext $context);

	/**
	 * Visit a parse tree produced by the `Literal` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\LiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLiteral(Context\LiteralContext $context);

	/**
	 * Visit a parse tree produced by the `Ask` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\AskContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAsk(Context\AskContext $context);

	/**
	 * Visit a parse tree produced by the `IterableOperations` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\IterableOperationsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIterableOperations(Context\IterableOperationsContext $context);

	/**
	 * Visit a parse tree produced by the `Debug` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\DebugContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDebug(Context\DebugContext $context);

	/**
	 * Visit a parse tree produced by the `Do_while` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\Do_whileContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDo_while(Context\Do_whileContext $context);

	/**
	 * Visit a parse tree produced by the `Return` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\ReturnContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReturn(Context\ReturnContext $context);

	/**
	 * Visit a parse tree produced by the `Table` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\TableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable(Context\TableContext $context);

	/**
	 * Visit a parse tree produced by the `While_do` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\While_doContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWhile_do(Context\While_doContext $context);

	/**
	 * Visit a parse tree produced by the `Postfix` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\PostfixContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPostfix(Context\PostfixContext $context);

	/**
	 * Visit a parse tree produced by the `Function_literal` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\Function_literalContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunction_literal(Context\Function_literalContext $context);

	/**
	 * Visit a parse tree produced by the `SayNL` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\SayNLContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSayNL(Context\SayNLContext $context);

	/**
	 * Visit a parse tree produced by the `BooleanMath` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\BooleanMathContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBooleanMath(Context\BooleanMathContext $context);

	/**
	 * Visit a parse tree produced by the `P_expression` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\P_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitP_expression(Context\P_expressionContext $context);

	/**
	 * Visit a parse tree produced by the `Function_call` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\Function_callContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunction_call(Context\Function_callContext $context);

	/**
	 * Visit a parse tree produced by the `Property_access` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\Property_accessContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProperty_access(Context\Property_accessContext $context);

	/**
	 * Visit a parse tree produced by the `Array_literal` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\Array_literalContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArray_literal(Context\Array_literalContext $context);

	/**
	 * Visit a parse tree produced by the `Method_call` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\Method_callContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMethod_call(Context\Method_callContext $context);

	/**
	 * Visit a parse tree produced by the `Raw_php` labeled alternative
	 * in {@see SayParser::expression()}.
	 *
	 * @param Context\Raw_phpContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRaw_php(Context\Raw_phpContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::table_header()}.
	 *
	 * @param Context\Table_headerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_header(Context\Table_headerContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::table_row()}.
	 *
	 * @param Context\Table_rowContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_row(Context\Table_rowContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::macro_param()}.
	 *
	 * @param Context\Macro_paramContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMacro_param(Context\Macro_paramContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::param_list()}.
	 *
	 * @param Context\Param_listContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParam_list(Context\Param_listContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::function_param()}.
	 *
	 * @param Context\Function_paramContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunction_param(Context\Function_paramContext $context);

	/**
	 * Visit a parse tree produced by the `Explicit` labeled alternative
	 * in {@see SayParser::array_init()}.
	 *
	 * @param Context\ExplicitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExplicit(Context\ExplicitContext $context);

	/**
	 * Visit a parse tree produced by the `Range` labeled alternative
	 * in {@see SayParser::array_init()}.
	 *
	 * @param Context\RangeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRange(Context\RangeContext $context);

	/**
	 * Visit a parse tree produced by the `Infinite` labeled alternative
	 * in {@see SayParser::array_init()}.
	 *
	 * @param Context\InfiniteContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInfinite(Context\InfiniteContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::each_aliases()}.
	 *
	 * @param Context\Each_aliasesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEach_aliases(Context\Each_aliasesContext $context);

	/**
	 * Visit a parse tree produced by the `Not_empty_Map` labeled alternative
	 * in {@see SayParser::map_init()}.
	 *
	 * @param Context\Not_empty_MapContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNot_empty_Map(Context\Not_empty_MapContext $context);

	/**
	 * Visit a parse tree produced by the `Empty_Map` labeled alternative
	 * in {@see SayParser::map_init()}.
	 *
	 * @param Context\Empty_MapContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEmpty_Map(Context\Empty_MapContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::map_pair()}.
	 *
	 * @param Context\Map_pairContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMap_pair(Context\Map_pairContext $context);

	/**
	 * Visit a parse tree produced by the `Explicit_index_access` labeled alternative
	 * in {@see SayParser::iterables_indexes()}.
	 *
	 * @param Context\Explicit_index_accessContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExplicit_index_access(Context\Explicit_index_accessContext $context);

	/**
	 * Visit a parse tree produced by the `Range_index_access` labeled alternative
	 * in {@see SayParser::iterables_indexes()}.
	 *
	 * @param Context\Range_index_accessContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRange_index_access(Context\Range_index_accessContext $context);

	/**
	 * Visit a parse tree produced by the `Helper_index_access` labeled alternative
	 * in {@see SayParser::iterables_indexes()}.
	 *
	 * @param Context\Helper_index_accessContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitHelper_index_access(Context\Helper_index_accessContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::index_helper()}.
	 *
	 * @param Context\Index_helperContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndex_helper(Context\Index_helperContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::closed_range()}.
	 *
	 * @param Context\Closed_rangeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitClosed_range(Context\Closed_rangeContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::open_range()}.
	 *
	 * @param Context\Open_rangeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOpen_range(Context\Open_rangeContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::expression_list()}.
	 *
	 * @param Context\Expression_listContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpression_list(Context\Expression_listContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::arg_list()}.
	 *
	 * @param Context\Arg_listContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArg_list(Context\Arg_listContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::arg()}.
	 *
	 * @param Context\ArgContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArg(Context\ArgContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::argPlaceholder()}.
	 *
	 * @param Context\ArgPlaceholderContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArgPlaceholder(Context\ArgPlaceholderContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::then_body()}.
	 *
	 * @param Context\Then_bodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitThen_body(Context\Then_bodyContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::else_body()}.
	 *
	 * @param Context\Else_bodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitElse_body(Context\Else_bodyContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::each_body()}.
	 *
	 * @param Context\Each_bodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEach_body(Context\Each_bodyContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::while_body()}.
	 *
	 * @param Context\While_bodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWhile_body(Context\While_bodyContext $context);

	/**
	 * Visit a parse tree produced by {@see SayParser::do_body()}.
	 *
	 * @param Context\Do_bodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDo_body(Context\Do_bodyContext $context);
}