<?php

/*
 * Generated from SayParser.g4 by ANTLR 4.9
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see SayParser}.
 */
interface SayParserListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see SayParser::top()}.
	 * @param $context The parse tree.
	 */
	public function enterTop(Context\TopContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::top()}.
	 * @param $context The parse tree.
	 */
	public function exitTop(Context\TopContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::import_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterImport_statement(Context\Import_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::import_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitImport_statement(Context\Import_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Each`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterEach(Context\EachContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Each` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitEach(Context\EachContext $context) : void;
	/**
	 * Enter a parse tree produced by the `If_`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterIf_(Context\If_Context $context) : void;
	/**
	 * Exit a parse tree produced by the `If_` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitIf_(Context\If_Context $context) : void;
	/**
	 * Enter a parse tree produced by the `Macro`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterMacro(Context\MacroContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Macro` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitMacro(Context\MacroContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Break`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterBreak(Context\BreakContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Break` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitBreak(Context\BreakContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Infix`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterInfix(Context\InfixContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Infix` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitInfix(Context\InfixContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Macro_definition`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterMacro_definition(Context\Macro_definitionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Macro_definition` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitMacro_definition(Context\Macro_definitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Say`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterSay(Context\SayContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Say` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitSay(Context\SayContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Prefix`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterPrefix(Context\PrefixContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Prefix` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitPrefix(Context\PrefixContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Continue`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterContinue(Context\ContinueContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Continue` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitContinue(Context\ContinueContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Assignment`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignment(Context\AssignmentContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Assignment` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignment(Context\AssignmentContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Index_access`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterIndex_access(Context\Index_accessContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Index_access` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitIndex_access(Context\Index_accessContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Map_literal`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterMap_literal(Context\Map_literalContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Map_literal` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitMap_literal(Context\Map_literalContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Identifier`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentifier(Context\IdentifierContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Identifier` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentifier(Context\IdentifierContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Implied_variable`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterImplied_variable(Context\Implied_variableContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Implied_variable` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitImplied_variable(Context\Implied_variableContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Literal`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteral(Context\LiteralContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Literal` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteral(Context\LiteralContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Ask`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterAsk(Context\AskContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Ask` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitAsk(Context\AskContext $context) : void;
	/**
	 * Enter a parse tree produced by the `IterableOperations`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterIterableOperations(Context\IterableOperationsContext $context) : void;
	/**
	 * Exit a parse tree produced by the `IterableOperations` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitIterableOperations(Context\IterableOperationsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Debug`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterDebug(Context\DebugContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Debug` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitDebug(Context\DebugContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Do_while`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterDo_while(Context\Do_whileContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Do_while` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitDo_while(Context\Do_whileContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Return`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterReturn(Context\ReturnContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Return` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitReturn(Context\ReturnContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Table`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterTable(Context\TableContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Table` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitTable(Context\TableContext $context) : void;
	/**
	 * Enter a parse tree produced by the `While_do`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterWhile_do(Context\While_doContext $context) : void;
	/**
	 * Exit a parse tree produced by the `While_do` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitWhile_do(Context\While_doContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Postfix`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterPostfix(Context\PostfixContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Postfix` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitPostfix(Context\PostfixContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Function_literal`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterFunction_literal(Context\Function_literalContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Function_literal` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitFunction_literal(Context\Function_literalContext $context) : void;
	/**
	 * Enter a parse tree produced by the `SayNL`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterSayNL(Context\SayNLContext $context) : void;
	/**
	 * Exit a parse tree produced by the `SayNL` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitSayNL(Context\SayNLContext $context) : void;
	/**
	 * Enter a parse tree produced by the `BooleanMath`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterBooleanMath(Context\BooleanMathContext $context) : void;
	/**
	 * Exit a parse tree produced by the `BooleanMath` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitBooleanMath(Context\BooleanMathContext $context) : void;
	/**
	 * Enter a parse tree produced by the `P_expression`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterP_expression(Context\P_expressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `P_expression` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitP_expression(Context\P_expressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Function_call`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterFunction_call(Context\Function_callContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Function_call` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitFunction_call(Context\Function_callContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Property_access`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterProperty_access(Context\Property_accessContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Property_access` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitProperty_access(Context\Property_accessContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Array_literal`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterArray_literal(Context\Array_literalContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Array_literal` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitArray_literal(Context\Array_literalContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Method_call`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterMethod_call(Context\Method_callContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Method_call` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitMethod_call(Context\Method_callContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Raw_php`
	 * labeled alternative in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterRaw_php(Context\Raw_phpContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Raw_php` labeled alternative
	 * in {@see SayParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitRaw_php(Context\Raw_phpContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::table_header()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_header(Context\Table_headerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::table_header()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_header(Context\Table_headerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::table_row()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_row(Context\Table_rowContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::table_row()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_row(Context\Table_rowContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::macro_param()}.
	 * @param $context The parse tree.
	 */
	public function enterMacro_param(Context\Macro_paramContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::macro_param()}.
	 * @param $context The parse tree.
	 */
	public function exitMacro_param(Context\Macro_paramContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::param_list()}.
	 * @param $context The parse tree.
	 */
	public function enterParam_list(Context\Param_listContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::param_list()}.
	 * @param $context The parse tree.
	 */
	public function exitParam_list(Context\Param_listContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::function_param()}.
	 * @param $context The parse tree.
	 */
	public function enterFunction_param(Context\Function_paramContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::function_param()}.
	 * @param $context The parse tree.
	 */
	public function exitFunction_param(Context\Function_paramContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Explicit`
	 * labeled alternative in {@see SayParser::array_init()}.
	 * @param $context The parse tree.
	 */
	public function enterExplicit(Context\ExplicitContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Explicit` labeled alternative
	 * in {@see SayParser::array_init()}.
	 * @param $context The parse tree.
	 */
	public function exitExplicit(Context\ExplicitContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Range`
	 * labeled alternative in {@see SayParser::array_init()}.
	 * @param $context The parse tree.
	 */
	public function enterRange(Context\RangeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Range` labeled alternative
	 * in {@see SayParser::array_init()}.
	 * @param $context The parse tree.
	 */
	public function exitRange(Context\RangeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Infinite`
	 * labeled alternative in {@see SayParser::array_init()}.
	 * @param $context The parse tree.
	 */
	public function enterInfinite(Context\InfiniteContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Infinite` labeled alternative
	 * in {@see SayParser::array_init()}.
	 * @param $context The parse tree.
	 */
	public function exitInfinite(Context\InfiniteContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::each_aliases()}.
	 * @param $context The parse tree.
	 */
	public function enterEach_aliases(Context\Each_aliasesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::each_aliases()}.
	 * @param $context The parse tree.
	 */
	public function exitEach_aliases(Context\Each_aliasesContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Not_empty_Map`
	 * labeled alternative in {@see SayParser::map_init()}.
	 * @param $context The parse tree.
	 */
	public function enterNot_empty_Map(Context\Not_empty_MapContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Not_empty_Map` labeled alternative
	 * in {@see SayParser::map_init()}.
	 * @param $context The parse tree.
	 */
	public function exitNot_empty_Map(Context\Not_empty_MapContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Empty_Map`
	 * labeled alternative in {@see SayParser::map_init()}.
	 * @param $context The parse tree.
	 */
	public function enterEmpty_Map(Context\Empty_MapContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Empty_Map` labeled alternative
	 * in {@see SayParser::map_init()}.
	 * @param $context The parse tree.
	 */
	public function exitEmpty_Map(Context\Empty_MapContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::map_pair()}.
	 * @param $context The parse tree.
	 */
	public function enterMap_pair(Context\Map_pairContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::map_pair()}.
	 * @param $context The parse tree.
	 */
	public function exitMap_pair(Context\Map_pairContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Explicit_index_access`
	 * labeled alternative in {@see SayParser::iterables_indexes()}.
	 * @param $context The parse tree.
	 */
	public function enterExplicit_index_access(Context\Explicit_index_accessContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Explicit_index_access` labeled alternative
	 * in {@see SayParser::iterables_indexes()}.
	 * @param $context The parse tree.
	 */
	public function exitExplicit_index_access(Context\Explicit_index_accessContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Range_index_access`
	 * labeled alternative in {@see SayParser::iterables_indexes()}.
	 * @param $context The parse tree.
	 */
	public function enterRange_index_access(Context\Range_index_accessContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Range_index_access` labeled alternative
	 * in {@see SayParser::iterables_indexes()}.
	 * @param $context The parse tree.
	 */
	public function exitRange_index_access(Context\Range_index_accessContext $context) : void;
	/**
	 * Enter a parse tree produced by the `Helper_index_access`
	 * labeled alternative in {@see SayParser::iterables_indexes()}.
	 * @param $context The parse tree.
	 */
	public function enterHelper_index_access(Context\Helper_index_accessContext $context) : void;
	/**
	 * Exit a parse tree produced by the `Helper_index_access` labeled alternative
	 * in {@see SayParser::iterables_indexes()}.
	 * @param $context The parse tree.
	 */
	public function exitHelper_index_access(Context\Helper_index_accessContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::index_helper()}.
	 * @param $context The parse tree.
	 */
	public function enterIndex_helper(Context\Index_helperContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::index_helper()}.
	 * @param $context The parse tree.
	 */
	public function exitIndex_helper(Context\Index_helperContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::closed_range()}.
	 * @param $context The parse tree.
	 */
	public function enterClosed_range(Context\Closed_rangeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::closed_range()}.
	 * @param $context The parse tree.
	 */
	public function exitClosed_range(Context\Closed_rangeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::open_range()}.
	 * @param $context The parse tree.
	 */
	public function enterOpen_range(Context\Open_rangeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::open_range()}.
	 * @param $context The parse tree.
	 */
	public function exitOpen_range(Context\Open_rangeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::expression_list()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression_list(Context\Expression_listContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::expression_list()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression_list(Context\Expression_listContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::arg_list()}.
	 * @param $context The parse tree.
	 */
	public function enterArg_list(Context\Arg_listContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::arg_list()}.
	 * @param $context The parse tree.
	 */
	public function exitArg_list(Context\Arg_listContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::arg()}.
	 * @param $context The parse tree.
	 */
	public function enterArg(Context\ArgContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::arg()}.
	 * @param $context The parse tree.
	 */
	public function exitArg(Context\ArgContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::argPlaceholder()}.
	 * @param $context The parse tree.
	 */
	public function enterArgPlaceholder(Context\ArgPlaceholderContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::argPlaceholder()}.
	 * @param $context The parse tree.
	 */
	public function exitArgPlaceholder(Context\ArgPlaceholderContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::then_body()}.
	 * @param $context The parse tree.
	 */
	public function enterThen_body(Context\Then_bodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::then_body()}.
	 * @param $context The parse tree.
	 */
	public function exitThen_body(Context\Then_bodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::else_body()}.
	 * @param $context The parse tree.
	 */
	public function enterElse_body(Context\Else_bodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::else_body()}.
	 * @param $context The parse tree.
	 */
	public function exitElse_body(Context\Else_bodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::each_body()}.
	 * @param $context The parse tree.
	 */
	public function enterEach_body(Context\Each_bodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::each_body()}.
	 * @param $context The parse tree.
	 */
	public function exitEach_body(Context\Each_bodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::while_body()}.
	 * @param $context The parse tree.
	 */
	public function enterWhile_body(Context\While_bodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::while_body()}.
	 * @param $context The parse tree.
	 */
	public function exitWhile_body(Context\While_bodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see SayParser::do_body()}.
	 * @param $context The parse tree.
	 */
	public function enterDo_body(Context\Do_bodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see SayParser::do_body()}.
	 * @param $context The parse tree.
	 */
	public function exitDo_body(Context\Do_bodyContext $context) : void;
}