// Generated from SayParser.g4 by ANTLR 4.9.1

    package main.java.nikos.generated;

import org.antlr.v4.runtime.atn.*;
import org.antlr.v4.runtime.dfa.DFA;
import org.antlr.v4.runtime.*;
import org.antlr.v4.runtime.misc.*;
import org.antlr.v4.runtime.tree.*;
import java.util.List;
import java.util.Iterator;
import java.util.ArrayList;

@SuppressWarnings({"all", "warnings", "unchecked", "unused", "cast"})
public class SayParser extends Parser {
	static { RuntimeMetaData.checkVersion("4.9.1", RuntimeMetaData.VERSION); }

	protected static final DFA[] _decisionToDFA;
	protected static final PredictionContextCache _sharedContextCache =
		new PredictionContextCache();
	public static final int
		IMPORT=1, SAY=2, SAYNL=3, DEBUG=4, ASK=5, DOT=6, COMMA=7, DOTDOT=8, COLON=9, 
		INF=10, PO=11, PC=12, CBO=13, CBC=14, SBO=15, SBC=16, ARROW=17, DOLLAR=18, 
		IF=19, THEN=20, ELSE=21, EACH=22, WHILE=23, DO=24, AS=25, CONTINUE=26, 
		RETURN=27, BREAK=28, EQUALS=29, EXCLAMATION_EQUALS=30, ABO=31, ABC=32, 
		ABO_EQUALS=33, ABC_EQUALS=34, KINDA=35, PLUS=36, MINUS=37, STAR=38, FSLASH=39, 
		PERCENTAGE=40, CARET=41, AMPERSAND=42, UNION=43, INTERSECTION=44, DIFFERENCE=45, 
		AND=46, OR=47, EXCLAMATION=48, QUESTION=49, FSLASH_QUESTION=50, ASSIGN_QUESTION=51, 
		ASSIGN_PLUS=52, ASSIGN_MINUS=53, ASSIGN_STAR=54, ASSIGN_FSLASH=55, ONLY=56, 
		EXCEPT=57, MAP=58, APPLY=59, MACRO=60, ASSIGN=61, FIRST=62, NEXT=63, LAST=64, 
		TABLE=65, STRING=66, INTEGER=67, FLOAT=68, BOOLEAN=69, IDENTIFIER=70, 
		BLOCK_COMMENT=71, LINE_COMMENT=72, WS=73, PHP_OPEN_TAG=74, RAW_PHP=75, 
		PHP_CLOSE_TAG=76;
	public static final int
		RULE_top = 0, RULE_import_statement = 1, RULE_expression = 2, RULE_table_header = 3, 
		RULE_table_row = 4, RULE_macro_param = 5, RULE_param_list = 6, RULE_function_param = 7, 
		RULE_array_init = 8, RULE_each_aliases = 9, RULE_map_init = 10, RULE_map_pair = 11, 
		RULE_iterables_indexes = 12, RULE_index_helper = 13, RULE_closed_range = 14, 
		RULE_open_range = 15, RULE_expression_list = 16, RULE_arg_list = 17, RULE_arg = 18, 
		RULE_argPlaceholder = 19, RULE_then_body = 20, RULE_else_body = 21, RULE_each_body = 22, 
		RULE_while_body = 23, RULE_do_body = 24;
	private static String[] makeRuleNames() {
		return new String[] {
			"top", "import_statement", "expression", "table_header", "table_row", 
			"macro_param", "param_list", "function_param", "array_init", "each_aliases", 
			"map_init", "map_pair", "iterables_indexes", "index_helper", "closed_range", 
			"open_range", "expression_list", "arg_list", "arg", "argPlaceholder", 
			"then_body", "else_body", "each_body", "while_body", "do_body"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'import'", "'say'", "'sayNL'", "'debug'", "'ask'", "'.'", "','", 
			"'..'", "':'", "'inf'", "'('", "')'", "'{'", "'}'", "'['", "']'", "'->'", 
			"'$'", "'if'", "'then'", "'else'", "'each'", "'while'", "'do'", "'as'", 
			"'continue'", "'return'", "'break'", "'='", "'!='", "'>'", "'<'", "'>='", 
			"'<='", "'kinda'", "'+'", "'-'", "'*'", "'/'", "'%'", "'^'", "'&'", "'union'", 
			"'intersection'", "'difference'", "'and'", "'or'", "'!'", "'?'", "'/?'", 
			"'<<&'", "'<<+'", "'<<-'", "'<</'", "'<<*'", "'only'", "'except'", "'map'", 
			"'apply'", "'macro'", "'<<'", "'first'", "'next'", "'last'", "'table'", 
			null, null, null, null, null, null, null, null, "'<?php'", null, "'?>'"
		};
	}
	private static final String[] _LITERAL_NAMES = makeLiteralNames();
	private static String[] makeSymbolicNames() {
		return new String[] {
			null, "IMPORT", "SAY", "SAYNL", "DEBUG", "ASK", "DOT", "COMMA", "DOTDOT", 
			"COLON", "INF", "PO", "PC", "CBO", "CBC", "SBO", "SBC", "ARROW", "DOLLAR", 
			"IF", "THEN", "ELSE", "EACH", "WHILE", "DO", "AS", "CONTINUE", "RETURN", 
			"BREAK", "EQUALS", "EXCLAMATION_EQUALS", "ABO", "ABC", "ABO_EQUALS", 
			"ABC_EQUALS", "KINDA", "PLUS", "MINUS", "STAR", "FSLASH", "PERCENTAGE", 
			"CARET", "AMPERSAND", "UNION", "INTERSECTION", "DIFFERENCE", "AND", "OR", 
			"EXCLAMATION", "QUESTION", "FSLASH_QUESTION", "ASSIGN_QUESTION", "ASSIGN_PLUS", 
			"ASSIGN_MINUS", "ASSIGN_STAR", "ASSIGN_FSLASH", "ONLY", "EXCEPT", "MAP", 
			"APPLY", "MACRO", "ASSIGN", "FIRST", "NEXT", "LAST", "TABLE", "STRING", 
			"INTEGER", "FLOAT", "BOOLEAN", "IDENTIFIER", "BLOCK_COMMENT", "LINE_COMMENT", 
			"WS", "PHP_OPEN_TAG", "RAW_PHP", "PHP_CLOSE_TAG"
		};
	}
	private static final String[] _SYMBOLIC_NAMES = makeSymbolicNames();
	public static final Vocabulary VOCABULARY = new VocabularyImpl(_LITERAL_NAMES, _SYMBOLIC_NAMES);

	/**
	 * @deprecated Use {@link #VOCABULARY} instead.
	 */
	@Deprecated
	public static final String[] tokenNames;
	static {
		tokenNames = new String[_SYMBOLIC_NAMES.length];
		for (int i = 0; i < tokenNames.length; i++) {
			tokenNames[i] = VOCABULARY.getLiteralName(i);
			if (tokenNames[i] == null) {
				tokenNames[i] = VOCABULARY.getSymbolicName(i);
			}

			if (tokenNames[i] == null) {
				tokenNames[i] = "<INVALID>";
			}
		}
	}

	@Override
	@Deprecated
	public String[] getTokenNames() {
		return tokenNames;
	}

	@Override

	public Vocabulary getVocabulary() {
		return VOCABULARY;
	}

	@Override
	public String getGrammarFileName() { return "SayParser.g4"; }

	@Override
	public String[] getRuleNames() { return ruleNames; }

	@Override
	public String getSerializedATN() { return _serializedATN; }

	@Override
	public ATN getATN() { return _ATN; }

	public SayParser(TokenStream input) {
		super(input);
		_interp = new ParserATNSimulator(this,_ATN,_decisionToDFA,_sharedContextCache);
	}

	public static class TopContext extends ParserRuleContext {
		public List<Import_statementContext> import_statement() {
			return getRuleContexts(Import_statementContext.class);
		}
		public Import_statementContext import_statement(int i) {
			return getRuleContext(Import_statementContext.class,i);
		}
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public TopContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_top; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitTop(this);
			else return visitor.visitChildren(this);
		}
	}

	public final TopContext top() throws RecognitionException {
		TopContext _localctx = new TopContext(_ctx, getState());
		enterRule(_localctx, 0, RULE_top);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			{
			setState(53);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==IMPORT) {
				{
				{
				setState(50);
				import_statement();
				}
				}
				setState(55);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(59);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & ((1L << SAY) | (1L << SAYNL) | (1L << DEBUG) | (1L << ASK) | (1L << PO) | (1L << SBO) | (1L << ARROW) | (1L << DOLLAR) | (1L << IF) | (1L << EACH) | (1L << WHILE) | (1L << DO) | (1L << CONTINUE) | (1L << RETURN) | (1L << BREAK) | (1L << EXCLAMATION) | (1L << MACRO))) != 0) || ((((_la - 65)) & ~0x3f) == 0 && ((1L << (_la - 65)) & ((1L << (TABLE - 65)) | (1L << (STRING - 65)) | (1L << (INTEGER - 65)) | (1L << (FLOAT - 65)) | (1L << (BOOLEAN - 65)) | (1L << (IDENTIFIER - 65)) | (1L << (RAW_PHP - 65)))) != 0)) {
				{
				{
				setState(56);
				expression(0);
				}
				}
				setState(61);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Import_statementContext extends ParserRuleContext {
		public TerminalNode IMPORT() { return getToken(SayParser.IMPORT, 0); }
		public TerminalNode STRING() { return getToken(SayParser.STRING, 0); }
		public Import_statementContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_import_statement; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitImport_statement(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Import_statementContext import_statement() throws RecognitionException {
		Import_statementContext _localctx = new Import_statementContext(_ctx, getState());
		enterRule(_localctx, 2, RULE_import_statement);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(62);
			match(IMPORT);
			setState(63);
			match(STRING);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class ExpressionContext extends ParserRuleContext {
		public ExpressionContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_expression; }
	 
		public ExpressionContext() { }
		public void copyFrom(ExpressionContext ctx) {
			super.copyFrom(ctx);
		}
	}
	public static class EachContext extends ExpressionContext {
		public TerminalNode EACH() { return getToken(SayParser.EACH, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public Each_bodyContext each_body() {
			return getRuleContext(Each_bodyContext.class,0);
		}
		public Each_aliasesContext each_aliases() {
			return getRuleContext(Each_aliasesContext.class,0);
		}
		public EachContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitEach(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class If_Context extends ExpressionContext {
		public ExpressionContext test;
		public TerminalNode IF() { return getToken(SayParser.IF, 0); }
		public TerminalNode THEN() { return getToken(SayParser.THEN, 0); }
		public Then_bodyContext then_body() {
			return getRuleContext(Then_bodyContext.class,0);
		}
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public TerminalNode ELSE() { return getToken(SayParser.ELSE, 0); }
		public Else_bodyContext else_body() {
			return getRuleContext(Else_bodyContext.class,0);
		}
		public If_Context(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitIf_(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class MacroContext extends ExpressionContext {
		public TerminalNode MACRO() { return getToken(SayParser.MACRO, 0); }
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public MacroContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitMacro(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class BreakContext extends ExpressionContext {
		public TerminalNode BREAK() { return getToken(SayParser.BREAK, 0); }
		public BreakContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitBreak(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class InfixContext extends ExpressionContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public TerminalNode CARET() { return getToken(SayParser.CARET, 0); }
		public TerminalNode STAR() { return getToken(SayParser.STAR, 0); }
		public TerminalNode FSLASH() { return getToken(SayParser.FSLASH, 0); }
		public TerminalNode PERCENTAGE() { return getToken(SayParser.PERCENTAGE, 0); }
		public TerminalNode MINUS() { return getToken(SayParser.MINUS, 0); }
		public TerminalNode PLUS() { return getToken(SayParser.PLUS, 0); }
		public TerminalNode EQUALS() { return getToken(SayParser.EQUALS, 0); }
		public TerminalNode EXCLAMATION_EQUALS() { return getToken(SayParser.EXCLAMATION_EQUALS, 0); }
		public TerminalNode ABO() { return getToken(SayParser.ABO, 0); }
		public TerminalNode ABC() { return getToken(SayParser.ABC, 0); }
		public TerminalNode ABO_EQUALS() { return getToken(SayParser.ABO_EQUALS, 0); }
		public TerminalNode ABC_EQUALS() { return getToken(SayParser.ABC_EQUALS, 0); }
		public TerminalNode KINDA() { return getToken(SayParser.KINDA, 0); }
		public TerminalNode AMPERSAND() { return getToken(SayParser.AMPERSAND, 0); }
		public TerminalNode FSLASH_QUESTION() { return getToken(SayParser.FSLASH_QUESTION, 0); }
		public TerminalNode UNION() { return getToken(SayParser.UNION, 0); }
		public TerminalNode INTERSECTION() { return getToken(SayParser.INTERSECTION, 0); }
		public TerminalNode DIFFERENCE() { return getToken(SayParser.DIFFERENCE, 0); }
		public TerminalNode ASSIGN_QUESTION() { return getToken(SayParser.ASSIGN_QUESTION, 0); }
		public TerminalNode ASSIGN_PLUS() { return getToken(SayParser.ASSIGN_PLUS, 0); }
		public TerminalNode ASSIGN_MINUS() { return getToken(SayParser.ASSIGN_MINUS, 0); }
		public TerminalNode ASSIGN_STAR() { return getToken(SayParser.ASSIGN_STAR, 0); }
		public TerminalNode ASSIGN_FSLASH() { return getToken(SayParser.ASSIGN_FSLASH, 0); }
		public InfixContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitInfix(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class Macro_definitionContext extends ExpressionContext {
		public Token IDENTIFIER;
		public List<Token> keywords = new ArrayList<Token>();
		public Macro_paramContext macro_param;
		public List<Macro_paramContext> macroParams = new ArrayList<Macro_paramContext>();
		public TerminalNode MACRO() { return getToken(SayParser.MACRO, 0); }
		public TerminalNode ARROW() { return getToken(SayParser.ARROW, 0); }
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public List<TerminalNode> IDENTIFIER() { return getTokens(SayParser.IDENTIFIER); }
		public TerminalNode IDENTIFIER(int i) {
			return getToken(SayParser.IDENTIFIER, i);
		}
		public List<Macro_paramContext> macro_param() {
			return getRuleContexts(Macro_paramContext.class);
		}
		public Macro_paramContext macro_param(int i) {
			return getRuleContext(Macro_paramContext.class,i);
		}
		public Macro_definitionContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitMacro_definition(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class SayContext extends ExpressionContext {
		public TerminalNode SAY() { return getToken(SayParser.SAY, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public SayContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitSay(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class PrefixContext extends ExpressionContext {
		public TerminalNode EXCLAMATION() { return getToken(SayParser.EXCLAMATION, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public PrefixContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitPrefix(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class ContinueContext extends ExpressionContext {
		public TerminalNode CONTINUE() { return getToken(SayParser.CONTINUE, 0); }
		public ContinueContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitContinue(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class AssignmentContext extends ExpressionContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public TerminalNode ASSIGN() { return getToken(SayParser.ASSIGN, 0); }
		public AssignmentContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitAssignment(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class Index_accessContext extends ExpressionContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public TerminalNode SBO() { return getToken(SayParser.SBO, 0); }
		public Iterables_indexesContext iterables_indexes() {
			return getRuleContext(Iterables_indexesContext.class,0);
		}
		public TerminalNode SBC() { return getToken(SayParser.SBC, 0); }
		public Index_accessContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitIndex_access(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class Map_literalContext extends ExpressionContext {
		public TerminalNode SBO() { return getToken(SayParser.SBO, 0); }
		public Map_initContext map_init() {
			return getRuleContext(Map_initContext.class,0);
		}
		public TerminalNode SBC() { return getToken(SayParser.SBC, 0); }
		public Map_literalContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitMap_literal(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class IdentifierContext extends ExpressionContext {
		public TerminalNode IDENTIFIER() { return getToken(SayParser.IDENTIFIER, 0); }
		public IdentifierContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitIdentifier(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class Implied_variableContext extends ExpressionContext {
		public TerminalNode DOLLAR() { return getToken(SayParser.DOLLAR, 0); }
		public Implied_variableContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitImplied_variable(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class LiteralContext extends ExpressionContext {
		public TerminalNode INTEGER() { return getToken(SayParser.INTEGER, 0); }
		public TerminalNode FLOAT() { return getToken(SayParser.FLOAT, 0); }
		public TerminalNode BOOLEAN() { return getToken(SayParser.BOOLEAN, 0); }
		public TerminalNode STRING() { return getToken(SayParser.STRING, 0); }
		public LiteralContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitLiteral(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class AskContext extends ExpressionContext {
		public TerminalNode ASK() { return getToken(SayParser.ASK, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public AskContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitAsk(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class IterableOperationsContext extends ExpressionContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public TerminalNode ONLY() { return getToken(SayParser.ONLY, 0); }
		public TerminalNode EXCEPT() { return getToken(SayParser.EXCEPT, 0); }
		public TerminalNode MAP() { return getToken(SayParser.MAP, 0); }
		public TerminalNode APPLY() { return getToken(SayParser.APPLY, 0); }
		public IterableOperationsContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitIterableOperations(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class DebugContext extends ExpressionContext {
		public TerminalNode DEBUG() { return getToken(SayParser.DEBUG, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public DebugContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitDebug(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class Do_whileContext extends ExpressionContext {
		public ExpressionContext test;
		public TerminalNode DO() { return getToken(SayParser.DO, 0); }
		public Do_bodyContext do_body() {
			return getRuleContext(Do_bodyContext.class,0);
		}
		public TerminalNode WHILE() { return getToken(SayParser.WHILE, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public Do_whileContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitDo_while(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class ReturnContext extends ExpressionContext {
		public TerminalNode RETURN() { return getToken(SayParser.RETURN, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public ReturnContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitReturn(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class TableContext extends ExpressionContext {
		public TerminalNode TABLE() { return getToken(SayParser.TABLE, 0); }
		public TerminalNode IDENTIFIER() { return getToken(SayParser.IDENTIFIER, 0); }
		public TerminalNode CBO() { return getToken(SayParser.CBO, 0); }
		public Table_headerContext table_header() {
			return getRuleContext(Table_headerContext.class,0);
		}
		public TerminalNode CBC() { return getToken(SayParser.CBC, 0); }
		public List<Table_rowContext> table_row() {
			return getRuleContexts(Table_rowContext.class);
		}
		public Table_rowContext table_row(int i) {
			return getRuleContext(Table_rowContext.class,i);
		}
		public TableContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitTable(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class While_doContext extends ExpressionContext {
		public ExpressionContext test;
		public TerminalNode WHILE() { return getToken(SayParser.WHILE, 0); }
		public TerminalNode DO() { return getToken(SayParser.DO, 0); }
		public While_bodyContext while_body() {
			return getRuleContext(While_bodyContext.class,0);
		}
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public While_doContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitWhile_do(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class PostfixContext extends ExpressionContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public TerminalNode EXCLAMATION() { return getToken(SayParser.EXCLAMATION, 0); }
		public TerminalNode QUESTION() { return getToken(SayParser.QUESTION, 0); }
		public TerminalNode PLUS() { return getToken(SayParser.PLUS, 0); }
		public TerminalNode MINUS() { return getToken(SayParser.MINUS, 0); }
		public TerminalNode STAR() { return getToken(SayParser.STAR, 0); }
		public TerminalNode FSLASH() { return getToken(SayParser.FSLASH, 0); }
		public TerminalNode AMPERSAND() { return getToken(SayParser.AMPERSAND, 0); }
		public TerminalNode AND() { return getToken(SayParser.AND, 0); }
		public TerminalNode OR() { return getToken(SayParser.OR, 0); }
		public PostfixContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitPostfix(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class Function_literalContext extends ExpressionContext {
		public TerminalNode ARROW() { return getToken(SayParser.ARROW, 0); }
		public Param_listContext param_list() {
			return getRuleContext(Param_listContext.class,0);
		}
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public Function_literalContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitFunction_literal(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class SayNLContext extends ExpressionContext {
		public TerminalNode SAYNL() { return getToken(SayParser.SAYNL, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public SayNLContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitSayNL(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class BooleanMathContext extends ExpressionContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public TerminalNode AND() { return getToken(SayParser.AND, 0); }
		public TerminalNode OR() { return getToken(SayParser.OR, 0); }
		public BooleanMathContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitBooleanMath(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class P_expressionContext extends ExpressionContext {
		public TerminalNode PO() { return getToken(SayParser.PO, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public TerminalNode PC() { return getToken(SayParser.PC, 0); }
		public P_expressionContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitP_expression(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class Function_callContext extends ExpressionContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public TerminalNode COLON() { return getToken(SayParser.COLON, 0); }
		public TerminalNode SBO() { return getToken(SayParser.SBO, 0); }
		public TerminalNode SBC() { return getToken(SayParser.SBC, 0); }
		public Arg_listContext arg_list() {
			return getRuleContext(Arg_listContext.class,0);
		}
		public Function_callContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitFunction_call(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class Property_accessContext extends ExpressionContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public TerminalNode DOT() { return getToken(SayParser.DOT, 0); }
		public TerminalNode IDENTIFIER() { return getToken(SayParser.IDENTIFIER, 0); }
		public Property_accessContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitProperty_access(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class Array_literalContext extends ExpressionContext {
		public TerminalNode SBO() { return getToken(SayParser.SBO, 0); }
		public Array_initContext array_init() {
			return getRuleContext(Array_initContext.class,0);
		}
		public TerminalNode SBC() { return getToken(SayParser.SBC, 0); }
		public Array_literalContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitArray_literal(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class Method_callContext extends ExpressionContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public TerminalNode DOT() { return getToken(SayParser.DOT, 0); }
		public TerminalNode IDENTIFIER() { return getToken(SayParser.IDENTIFIER, 0); }
		public TerminalNode COLON() { return getToken(SayParser.COLON, 0); }
		public TerminalNode SBO() { return getToken(SayParser.SBO, 0); }
		public Arg_listContext arg_list() {
			return getRuleContext(Arg_listContext.class,0);
		}
		public TerminalNode SBC() { return getToken(SayParser.SBC, 0); }
		public Method_callContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitMethod_call(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class Raw_phpContext extends ExpressionContext {
		public List<TerminalNode> RAW_PHP() { return getTokens(SayParser.RAW_PHP); }
		public TerminalNode RAW_PHP(int i) {
			return getToken(SayParser.RAW_PHP, i);
		}
		public Raw_phpContext(ExpressionContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitRaw_php(this);
			else return visitor.visitChildren(this);
		}
	}

	public final ExpressionContext expression() throws RecognitionException {
		return expression(0);
	}

	private ExpressionContext expression(int _p) throws RecognitionException {
		ParserRuleContext _parentctx = _ctx;
		int _parentState = getState();
		ExpressionContext _localctx = new ExpressionContext(_ctx, _parentState);
		ExpressionContext _prevctx = _localctx;
		int _startState = 4;
		enterRecursionRule(_localctx, 4, RULE_expression, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(169);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,13,_ctx) ) {
			case 1:
				{
				_localctx = new IdentifierContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;

				setState(66);
				match(IDENTIFIER);
				}
				break;
			case 2:
				{
				_localctx = new Implied_variableContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(67);
				match(DOLLAR);
				}
				break;
			case 3:
				{
				_localctx = new LiteralContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(68);
				_la = _input.LA(1);
				if ( !(((((_la - 66)) & ~0x3f) == 0 && ((1L << (_la - 66)) & ((1L << (STRING - 66)) | (1L << (INTEGER - 66)) | (1L << (FLOAT - 66)) | (1L << (BOOLEAN - 66)))) != 0)) ) {
				_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				}
				break;
			case 4:
				{
				_localctx = new Array_literalContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(69);
				match(SBO);
				setState(70);
				array_init();
				setState(71);
				match(SBC);
				}
				break;
			case 5:
				{
				_localctx = new Map_literalContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(73);
				match(SBO);
				setState(74);
				map_init();
				setState(75);
				match(SBC);
				}
				break;
			case 6:
				{
				_localctx = new Function_literalContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(78);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==IDENTIFIER) {
					{
					setState(77);
					param_list();
					}
				}

				setState(80);
				match(ARROW);
				setState(82); 
				_errHandler.sync(this);
				_alt = 1;
				do {
					switch (_alt) {
					case 1:
						{
						{
						setState(81);
						expression(0);
						}
						}
						break;
					default:
						throw new NoViableAltException(this);
					}
					setState(84); 
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,3,_ctx);
				} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
				}
				break;
			case 7:
				{
				_localctx = new If_Context(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(86);
				match(IF);
				setState(87);
				((If_Context)_localctx).test = expression(0);
				setState(88);
				match(THEN);
				setState(89);
				then_body();
				setState(92);
				_errHandler.sync(this);
				switch ( getInterpreter().adaptivePredict(_input,4,_ctx) ) {
				case 1:
					{
					setState(90);
					match(ELSE);
					setState(91);
					else_body();
					}
					break;
				}
				}
				break;
			case 8:
				{
				_localctx = new PrefixContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(94);
				match(EXCLAMATION);
				setState(95);
				expression(20);
				}
				break;
			case 9:
				{
				_localctx = new ContinueContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(96);
				match(CONTINUE);
				}
				break;
			case 10:
				{
				_localctx = new ReturnContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(97);
				match(RETURN);
				setState(99);
				_errHandler.sync(this);
				switch ( getInterpreter().adaptivePredict(_input,5,_ctx) ) {
				case 1:
					{
					setState(98);
					expression(0);
					}
					break;
				}
				}
				break;
			case 11:
				{
				_localctx = new BreakContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(101);
				match(BREAK);
				}
				break;
			case 12:
				{
				_localctx = new SayContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(102);
				match(SAY);
				setState(103);
				expression(13);
				}
				break;
			case 13:
				{
				_localctx = new SayNLContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(104);
				match(SAYNL);
				setState(105);
				expression(12);
				}
				break;
			case 14:
				{
				_localctx = new DebugContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(106);
				match(DEBUG);
				setState(107);
				expression(11);
				}
				break;
			case 15:
				{
				_localctx = new AskContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(108);
				match(ASK);
				setState(109);
				expression(10);
				}
				break;
			case 16:
				{
				_localctx = new Macro_definitionContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(110);
				match(MACRO);
				setState(115); 
				_errHandler.sync(this);
				_la = _input.LA(1);
				do {
					{
					{
					setState(111);
					((Macro_definitionContext)_localctx).IDENTIFIER = match(IDENTIFIER);
					((Macro_definitionContext)_localctx).keywords.add(((Macro_definitionContext)_localctx).IDENTIFIER);
					setState(113);
					_errHandler.sync(this);
					_la = _input.LA(1);
					if (_la==CBO) {
						{
						setState(112);
						((Macro_definitionContext)_localctx).macro_param = macro_param();
						((Macro_definitionContext)_localctx).macroParams.add(((Macro_definitionContext)_localctx).macro_param);
						}
					}

					}
					}
					setState(117); 
					_errHandler.sync(this);
					_la = _input.LA(1);
				} while ( _la==IDENTIFIER );
				setState(119);
				match(ARROW);
				setState(121); 
				_errHandler.sync(this);
				_alt = 1;
				do {
					switch (_alt) {
					case 1:
						{
						{
						setState(120);
						expression(0);
						}
						}
						break;
					default:
						throw new NoViableAltException(this);
					}
					setState(123); 
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,8,_ctx);
				} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
				}
				break;
			case 17:
				{
				_localctx = new MacroContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(125);
				match(MACRO);
				setState(129);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,9,_ctx);
				while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
					if ( _alt==1 ) {
						{
						{
						setState(126);
						expression(0);
						}
						} 
					}
					setState(131);
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,9,_ctx);
				}
				}
				break;
			case 18:
				{
				_localctx = new EachContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(132);
				match(EACH);
				setState(133);
				expression(0);
				setState(135);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==AS) {
					{
					setState(134);
					each_aliases();
					}
				}

				setState(137);
				each_body();
				}
				break;
			case 19:
				{
				_localctx = new While_doContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(139);
				match(WHILE);
				setState(140);
				((While_doContext)_localctx).test = expression(0);
				setState(141);
				match(DO);
				setState(142);
				while_body();
				}
				break;
			case 20:
				{
				_localctx = new Do_whileContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(144);
				match(DO);
				setState(145);
				do_body();
				setState(146);
				match(WHILE);
				setState(147);
				((Do_whileContext)_localctx).test = expression(5);
				}
				break;
			case 21:
				{
				_localctx = new P_expressionContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(149);
				match(PO);
				setState(150);
				expression(0);
				setState(151);
				match(PC);
				}
				break;
			case 22:
				{
				_localctx = new Raw_phpContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(154); 
				_errHandler.sync(this);
				_alt = 1;
				do {
					switch (_alt) {
					case 1:
						{
						{
						setState(153);
						match(RAW_PHP);
						}
						}
						break;
					default:
						throw new NoViableAltException(this);
					}
					setState(156); 
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,11,_ctx);
				} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
				}
				break;
			case 23:
				{
				_localctx = new TableContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(158);
				match(TABLE);
				setState(159);
				match(IDENTIFIER);
				setState(160);
				match(CBO);
				setState(161);
				table_header();
				setState(163); 
				_errHandler.sync(this);
				_la = _input.LA(1);
				do {
					{
					{
					setState(162);
					table_row();
					}
					}
					setState(165); 
					_errHandler.sync(this);
					_la = _input.LA(1);
				} while ( _la==PO );
				setState(167);
				match(CBC);
				}
				break;
			}
			_ctx.stop = _input.LT(-1);
			setState(223);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,18,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					setState(221);
					_errHandler.sync(this);
					switch ( getInterpreter().adaptivePredict(_input,17,_ctx) ) {
					case 1:
						{
						_localctx = new InfixContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(171);
						if (!(precpred(_ctx, 24))) throw new FailedPredicateException(this, "precpred(_ctx, 24)");
						{
						setState(172);
						match(CARET);
						}
						setState(173);
						expression(25);
						}
						break;
					case 2:
						{
						_localctx = new InfixContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(174);
						if (!(precpred(_ctx, 23))) throw new FailedPredicateException(this, "precpred(_ctx, 23)");
						setState(175);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & ((1L << STAR) | (1L << FSLASH) | (1L << PERCENTAGE))) != 0)) ) {
						_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(176);
						expression(24);
						}
						break;
					case 3:
						{
						_localctx = new InfixContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(177);
						if (!(precpred(_ctx, 22))) throw new FailedPredicateException(this, "precpred(_ctx, 22)");
						setState(178);
						_la = _input.LA(1);
						if ( !(_la==PLUS || _la==MINUS) ) {
						_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(179);
						expression(23);
						}
						break;
					case 4:
						{
						_localctx = new InfixContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(180);
						if (!(precpred(_ctx, 21))) throw new FailedPredicateException(this, "precpred(_ctx, 21)");
						setState(181);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & ((1L << EQUALS) | (1L << EXCLAMATION_EQUALS) | (1L << ABO) | (1L << ABC) | (1L << ABO_EQUALS) | (1L << ABC_EQUALS) | (1L << KINDA) | (1L << AMPERSAND) | (1L << UNION) | (1L << INTERSECTION) | (1L << DIFFERENCE) | (1L << FSLASH_QUESTION) | (1L << ASSIGN_QUESTION) | (1L << ASSIGN_PLUS) | (1L << ASSIGN_MINUS) | (1L << ASSIGN_STAR) | (1L << ASSIGN_FSLASH))) != 0)) ) {
						_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(182);
						expression(22);
						}
						break;
					case 5:
						{
						_localctx = new BooleanMathContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(183);
						if (!(precpred(_ctx, 18))) throw new FailedPredicateException(this, "precpred(_ctx, 18)");
						setState(184);
						_la = _input.LA(1);
						if ( !(_la==AND || _la==OR) ) {
						_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(185);
						expression(19);
						}
						break;
					case 6:
						{
						_localctx = new IterableOperationsContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(186);
						if (!(precpred(_ctx, 17))) throw new FailedPredicateException(this, "precpred(_ctx, 17)");
						setState(187);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & ((1L << ONLY) | (1L << EXCEPT) | (1L << MAP) | (1L << APPLY))) != 0)) ) {
						_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(188);
						expression(18);
						}
						break;
					case 7:
						{
						_localctx = new AssignmentContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(189);
						if (!(precpred(_ctx, 4))) throw new FailedPredicateException(this, "precpred(_ctx, 4)");
						setState(190);
						match(ASSIGN);
						setState(191);
						expression(4);
						}
						break;
					case 8:
						{
						_localctx = new Method_callContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(192);
						if (!(precpred(_ctx, 35))) throw new FailedPredicateException(this, "precpred(_ctx, 35)");
						setState(193);
						match(DOT);
						setState(194);
						match(IDENTIFIER);
						setState(195);
						match(COLON);
						setState(200);
						_errHandler.sync(this);
						switch ( getInterpreter().adaptivePredict(_input,14,_ctx) ) {
						case 1:
							{
							setState(196);
							match(SBO);
							setState(197);
							arg_list();
							setState(198);
							match(SBC);
							}
							break;
						}
						}
						break;
					case 9:
						{
						_localctx = new Function_callContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(202);
						if (!(precpred(_ctx, 34))) throw new FailedPredicateException(this, "precpred(_ctx, 34)");
						setState(203);
						match(COLON);
						setState(209);
						_errHandler.sync(this);
						switch ( getInterpreter().adaptivePredict(_input,16,_ctx) ) {
						case 1:
							{
							setState(204);
							match(SBO);
							setState(206);
							_errHandler.sync(this);
							_la = _input.LA(1);
							if ((((_la) & ~0x3f) == 0 && ((1L << _la) & ((1L << SAY) | (1L << SAYNL) | (1L << DEBUG) | (1L << ASK) | (1L << PO) | (1L << SBO) | (1L << ARROW) | (1L << DOLLAR) | (1L << IF) | (1L << EACH) | (1L << WHILE) | (1L << DO) | (1L << CONTINUE) | (1L << RETURN) | (1L << BREAK) | (1L << EXCLAMATION) | (1L << QUESTION) | (1L << MACRO))) != 0) || ((((_la - 65)) & ~0x3f) == 0 && ((1L << (_la - 65)) & ((1L << (TABLE - 65)) | (1L << (STRING - 65)) | (1L << (INTEGER - 65)) | (1L << (FLOAT - 65)) | (1L << (BOOLEAN - 65)) | (1L << (IDENTIFIER - 65)) | (1L << (RAW_PHP - 65)))) != 0)) {
								{
								setState(205);
								arg_list();
								}
							}

							setState(208);
							match(SBC);
							}
							break;
						}
						}
						break;
					case 10:
						{
						_localctx = new Property_accessContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(211);
						if (!(precpred(_ctx, 33))) throw new FailedPredicateException(this, "precpred(_ctx, 33)");
						setState(212);
						match(DOT);
						setState(213);
						match(IDENTIFIER);
						}
						break;
					case 11:
						{
						_localctx = new Index_accessContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(214);
						if (!(precpred(_ctx, 26))) throw new FailedPredicateException(this, "precpred(_ctx, 26)");
						setState(215);
						match(SBO);
						setState(216);
						iterables_indexes();
						setState(217);
						match(SBC);
						}
						break;
					case 12:
						{
						_localctx = new PostfixContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(219);
						if (!(precpred(_ctx, 19))) throw new FailedPredicateException(this, "precpred(_ctx, 19)");
						setState(220);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & ((1L << PLUS) | (1L << MINUS) | (1L << STAR) | (1L << FSLASH) | (1L << AMPERSAND) | (1L << AND) | (1L << OR) | (1L << EXCLAMATION) | (1L << QUESTION))) != 0)) ) {
						_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						}
						break;
					}
					} 
				}
				setState(225);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,18,_ctx);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			unrollRecursionContexts(_parentctx);
		}
		return _localctx;
	}

	public static class Table_headerContext extends ParserRuleContext {
		public TerminalNode PO() { return getToken(SayParser.PO, 0); }
		public TerminalNode PC() { return getToken(SayParser.PC, 0); }
		public List<TerminalNode> IDENTIFIER() { return getTokens(SayParser.IDENTIFIER); }
		public TerminalNode IDENTIFIER(int i) {
			return getToken(SayParser.IDENTIFIER, i);
		}
		public Table_headerContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_table_header; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitTable_header(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Table_headerContext table_header() throws RecognitionException {
		Table_headerContext _localctx = new Table_headerContext(_ctx, getState());
		enterRule(_localctx, 6, RULE_table_header);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(226);
			match(PO);
			setState(230);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==IDENTIFIER) {
				{
				{
				setState(227);
				match(IDENTIFIER);
				}
				}
				setState(232);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(233);
			match(PC);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Table_rowContext extends ParserRuleContext {
		public TerminalNode PO() { return getToken(SayParser.PO, 0); }
		public TerminalNode PC() { return getToken(SayParser.PC, 0); }
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public Table_rowContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_table_row; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitTable_row(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Table_rowContext table_row() throws RecognitionException {
		Table_rowContext _localctx = new Table_rowContext(_ctx, getState());
		enterRule(_localctx, 8, RULE_table_row);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(235);
			match(PO);
			setState(239);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & ((1L << SAY) | (1L << SAYNL) | (1L << DEBUG) | (1L << ASK) | (1L << PO) | (1L << SBO) | (1L << ARROW) | (1L << DOLLAR) | (1L << IF) | (1L << EACH) | (1L << WHILE) | (1L << DO) | (1L << CONTINUE) | (1L << RETURN) | (1L << BREAK) | (1L << EXCLAMATION) | (1L << MACRO))) != 0) || ((((_la - 65)) & ~0x3f) == 0 && ((1L << (_la - 65)) & ((1L << (TABLE - 65)) | (1L << (STRING - 65)) | (1L << (INTEGER - 65)) | (1L << (FLOAT - 65)) | (1L << (BOOLEAN - 65)) | (1L << (IDENTIFIER - 65)) | (1L << (RAW_PHP - 65)))) != 0)) {
				{
				{
				setState(236);
				expression(0);
				}
				}
				setState(241);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(242);
			match(PC);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Macro_paramContext extends ParserRuleContext {
		public Token param;
		public TerminalNode CBO() { return getToken(SayParser.CBO, 0); }
		public TerminalNode CBC() { return getToken(SayParser.CBC, 0); }
		public TerminalNode IDENTIFIER() { return getToken(SayParser.IDENTIFIER, 0); }
		public Macro_paramContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_macro_param; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitMacro_param(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Macro_paramContext macro_param() throws RecognitionException {
		Macro_paramContext _localctx = new Macro_paramContext(_ctx, getState());
		enterRule(_localctx, 10, RULE_macro_param);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(244);
			match(CBO);
			setState(245);
			((Macro_paramContext)_localctx).param = match(IDENTIFIER);
			setState(246);
			match(CBC);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Param_listContext extends ParserRuleContext {
		public Function_paramContext function_param;
		public List<Function_paramContext> params = new ArrayList<Function_paramContext>();
		public List<Function_paramContext> function_param() {
			return getRuleContexts(Function_paramContext.class);
		}
		public Function_paramContext function_param(int i) {
			return getRuleContext(Function_paramContext.class,i);
		}
		public List<TerminalNode> COMMA() { return getTokens(SayParser.COMMA); }
		public TerminalNode COMMA(int i) {
			return getToken(SayParser.COMMA, i);
		}
		public Param_listContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_param_list; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitParam_list(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Param_listContext param_list() throws RecognitionException {
		Param_listContext _localctx = new Param_listContext(_ctx, getState());
		enterRule(_localctx, 12, RULE_param_list);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(248);
			((Param_listContext)_localctx).function_param = function_param();
			((Param_listContext)_localctx).params.add(((Param_listContext)_localctx).function_param);
			setState(253);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,21,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(249);
					match(COMMA);
					setState(250);
					((Param_listContext)_localctx).function_param = function_param();
					((Param_listContext)_localctx).params.add(((Param_listContext)_localctx).function_param);
					}
					} 
				}
				setState(255);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,21,_ctx);
			}
			setState(257);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==COMMA) {
				{
				setState(256);
				match(COMMA);
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Function_paramContext extends ParserRuleContext {
		public ExpressionContext defaultValue;
		public TerminalNode IDENTIFIER() { return getToken(SayParser.IDENTIFIER, 0); }
		public TerminalNode ASSIGN() { return getToken(SayParser.ASSIGN, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public Function_paramContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_function_param; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitFunction_param(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Function_paramContext function_param() throws RecognitionException {
		Function_paramContext _localctx = new Function_paramContext(_ctx, getState());
		enterRule(_localctx, 14, RULE_function_param);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(259);
			match(IDENTIFIER);
			setState(262);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ASSIGN) {
				{
				setState(260);
				match(ASSIGN);
				setState(261);
				((Function_paramContext)_localctx).defaultValue = expression(0);
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Array_initContext extends ParserRuleContext {
		public Array_initContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_array_init; }
	 
		public Array_initContext() { }
		public void copyFrom(Array_initContext ctx) {
			super.copyFrom(ctx);
		}
	}
	public static class InfiniteContext extends Array_initContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public TerminalNode DOTDOT() { return getToken(SayParser.DOTDOT, 0); }
		public TerminalNode INF() { return getToken(SayParser.INF, 0); }
		public InfiniteContext(Array_initContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitInfinite(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class ExplicitContext extends Array_initContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public List<TerminalNode> COMMA() { return getTokens(SayParser.COMMA); }
		public TerminalNode COMMA(int i) {
			return getToken(SayParser.COMMA, i);
		}
		public ExplicitContext(Array_initContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitExplicit(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class RangeContext extends Array_initContext {
		public Closed_rangeContext closed_range() {
			return getRuleContext(Closed_rangeContext.class,0);
		}
		public RangeContext(Array_initContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitRange(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Array_initContext array_init() throws RecognitionException {
		Array_initContext _localctx = new Array_initContext(_ctx, getState());
		enterRule(_localctx, 16, RULE_array_init);
		int _la;
		try {
			int _alt;
			setState(282);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,27,_ctx) ) {
			case 1:
				_localctx = new ExplicitContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(265);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & ((1L << SAY) | (1L << SAYNL) | (1L << DEBUG) | (1L << ASK) | (1L << PO) | (1L << SBO) | (1L << ARROW) | (1L << DOLLAR) | (1L << IF) | (1L << EACH) | (1L << WHILE) | (1L << DO) | (1L << CONTINUE) | (1L << RETURN) | (1L << BREAK) | (1L << EXCLAMATION) | (1L << MACRO))) != 0) || ((((_la - 65)) & ~0x3f) == 0 && ((1L << (_la - 65)) & ((1L << (TABLE - 65)) | (1L << (STRING - 65)) | (1L << (INTEGER - 65)) | (1L << (FLOAT - 65)) | (1L << (BOOLEAN - 65)) | (1L << (IDENTIFIER - 65)) | (1L << (RAW_PHP - 65)))) != 0)) {
					{
					setState(264);
					expression(0);
					}
				}

				setState(271);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,25,_ctx);
				while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
					if ( _alt==1 ) {
						{
						{
						setState(267);
						match(COMMA);
						setState(268);
						expression(0);
						}
						} 
					}
					setState(273);
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,25,_ctx);
				}
				setState(275);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==COMMA) {
					{
					setState(274);
					match(COMMA);
					}
				}

				}
				break;
			case 2:
				_localctx = new RangeContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(277);
				closed_range();
				}
				break;
			case 3:
				_localctx = new InfiniteContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(278);
				expression(0);
				setState(279);
				match(DOTDOT);
				setState(280);
				match(INF);
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Each_aliasesContext extends ParserRuleContext {
		public Token keyValueAlias;
		public Token valueAlias;
		public TerminalNode AS() { return getToken(SayParser.AS, 0); }
		public List<TerminalNode> IDENTIFIER() { return getTokens(SayParser.IDENTIFIER); }
		public TerminalNode IDENTIFIER(int i) {
			return getToken(SayParser.IDENTIFIER, i);
		}
		public TerminalNode ARROW() { return getToken(SayParser.ARROW, 0); }
		public Each_aliasesContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_each_aliases; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitEach_aliases(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Each_aliasesContext each_aliases() throws RecognitionException {
		Each_aliasesContext _localctx = new Each_aliasesContext(_ctx, getState());
		enterRule(_localctx, 18, RULE_each_aliases);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(284);
			match(AS);
			setState(285);
			((Each_aliasesContext)_localctx).keyValueAlias = match(IDENTIFIER);
			setState(288);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,28,_ctx) ) {
			case 1:
				{
				setState(286);
				match(ARROW);
				setState(287);
				((Each_aliasesContext)_localctx).valueAlias = match(IDENTIFIER);
				}
				break;
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Map_initContext extends ParserRuleContext {
		public Map_initContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_map_init; }
	 
		public Map_initContext() { }
		public void copyFrom(Map_initContext ctx) {
			super.copyFrom(ctx);
		}
	}
	public static class Not_empty_MapContext extends Map_initContext {
		public List<Map_pairContext> map_pair() {
			return getRuleContexts(Map_pairContext.class);
		}
		public Map_pairContext map_pair(int i) {
			return getRuleContext(Map_pairContext.class,i);
		}
		public List<TerminalNode> COMMA() { return getTokens(SayParser.COMMA); }
		public TerminalNode COMMA(int i) {
			return getToken(SayParser.COMMA, i);
		}
		public Not_empty_MapContext(Map_initContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitNot_empty_Map(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class Empty_MapContext extends Map_initContext {
		public TerminalNode ARROW() { return getToken(SayParser.ARROW, 0); }
		public Empty_MapContext(Map_initContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitEmpty_Map(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Map_initContext map_init() throws RecognitionException {
		Map_initContext _localctx = new Map_initContext(_ctx, getState());
		enterRule(_localctx, 20, RULE_map_init);
		int _la;
		try {
			int _alt;
			setState(302);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case STRING:
				_localctx = new Not_empty_MapContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(290);
				map_pair();
				setState(295);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,29,_ctx);
				while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
					if ( _alt==1 ) {
						{
						{
						setState(291);
						match(COMMA);
						setState(292);
						map_pair();
						}
						} 
					}
					setState(297);
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,29,_ctx);
				}
				setState(299);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==COMMA) {
					{
					setState(298);
					match(COMMA);
					}
				}

				}
				break;
			case ARROW:
				_localctx = new Empty_MapContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(301);
				match(ARROW);
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Map_pairContext extends ParserRuleContext {
		public TerminalNode STRING() { return getToken(SayParser.STRING, 0); }
		public TerminalNode ARROW() { return getToken(SayParser.ARROW, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public Map_pairContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_map_pair; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitMap_pair(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Map_pairContext map_pair() throws RecognitionException {
		Map_pairContext _localctx = new Map_pairContext(_ctx, getState());
		enterRule(_localctx, 22, RULE_map_pair);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(304);
			match(STRING);
			setState(305);
			match(ARROW);
			setState(306);
			expression(0);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Iterables_indexesContext extends ParserRuleContext {
		public Iterables_indexesContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_iterables_indexes; }
	 
		public Iterables_indexesContext() { }
		public void copyFrom(Iterables_indexesContext ctx) {
			super.copyFrom(ctx);
		}
	}
	public static class Range_index_accessContext extends Iterables_indexesContext {
		public Open_rangeContext open_range() {
			return getRuleContext(Open_rangeContext.class,0);
		}
		public Closed_rangeContext closed_range() {
			return getRuleContext(Closed_rangeContext.class,0);
		}
		public Range_index_accessContext(Iterables_indexesContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitRange_index_access(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class Explicit_index_accessContext extends Iterables_indexesContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public List<TerminalNode> COMMA() { return getTokens(SayParser.COMMA); }
		public TerminalNode COMMA(int i) {
			return getToken(SayParser.COMMA, i);
		}
		public Explicit_index_accessContext(Iterables_indexesContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitExplicit_index_access(this);
			else return visitor.visitChildren(this);
		}
	}
	public static class Helper_index_accessContext extends Iterables_indexesContext {
		public Index_helperContext index_helper() {
			return getRuleContext(Index_helperContext.class,0);
		}
		public Helper_index_accessContext(Iterables_indexesContext ctx) { copyFrom(ctx); }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitHelper_index_access(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Iterables_indexesContext iterables_indexes() throws RecognitionException {
		Iterables_indexesContext _localctx = new Iterables_indexesContext(_ctx, getState());
		enterRule(_localctx, 24, RULE_iterables_indexes);
		int _la;
		try {
			int _alt;
			setState(324);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,35,_ctx) ) {
			case 1:
				_localctx = new Explicit_index_accessContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(308);
				expression(0);
				setState(313);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,32,_ctx);
				while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
					if ( _alt==1 ) {
						{
						{
						setState(309);
						match(COMMA);
						setState(310);
						expression(0);
						}
						} 
					}
					setState(315);
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,32,_ctx);
				}
				setState(317);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==COMMA) {
					{
					setState(316);
					match(COMMA);
					}
				}

				}
				break;
			case 2:
				_localctx = new Range_index_accessContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(321);
				_errHandler.sync(this);
				switch ( getInterpreter().adaptivePredict(_input,34,_ctx) ) {
				case 1:
					{
					setState(319);
					open_range();
					}
					break;
				case 2:
					{
					setState(320);
					closed_range();
					}
					break;
				}
				}
				break;
			case 3:
				_localctx = new Helper_index_accessContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(323);
				index_helper();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Index_helperContext extends ParserRuleContext {
		public TerminalNode FIRST() { return getToken(SayParser.FIRST, 0); }
		public TerminalNode LAST() { return getToken(SayParser.LAST, 0); }
		public TerminalNode NEXT() { return getToken(SayParser.NEXT, 0); }
		public Index_helperContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_index_helper; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitIndex_helper(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Index_helperContext index_helper() throws RecognitionException {
		Index_helperContext _localctx = new Index_helperContext(_ctx, getState());
		enterRule(_localctx, 26, RULE_index_helper);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(326);
			_la = _input.LA(1);
			if ( !(((((_la - 62)) & ~0x3f) == 0 && ((1L << (_la - 62)) & ((1L << (FIRST - 62)) | (1L << (NEXT - 62)) | (1L << (LAST - 62)))) != 0)) ) {
			_errHandler.recoverInline(this);
			}
			else {
				if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
				_errHandler.reportMatch(this);
				consume();
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Closed_rangeContext extends ParserRuleContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public TerminalNode DOTDOT() { return getToken(SayParser.DOTDOT, 0); }
		public Closed_rangeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_closed_range; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitClosed_range(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Closed_rangeContext closed_range() throws RecognitionException {
		Closed_rangeContext _localctx = new Closed_rangeContext(_ctx, getState());
		enterRule(_localctx, 28, RULE_closed_range);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(328);
			expression(0);
			setState(329);
			match(DOTDOT);
			setState(330);
			expression(0);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Open_rangeContext extends ParserRuleContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public TerminalNode DOTDOT() { return getToken(SayParser.DOTDOT, 0); }
		public Open_rangeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_open_range; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitOpen_range(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Open_rangeContext open_range() throws RecognitionException {
		Open_rangeContext _localctx = new Open_rangeContext(_ctx, getState());
		enterRule(_localctx, 30, RULE_open_range);
		try {
			setState(337);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case SAY:
			case SAYNL:
			case DEBUG:
			case ASK:
			case PO:
			case SBO:
			case ARROW:
			case DOLLAR:
			case IF:
			case EACH:
			case WHILE:
			case DO:
			case CONTINUE:
			case RETURN:
			case BREAK:
			case EXCLAMATION:
			case MACRO:
			case TABLE:
			case STRING:
			case INTEGER:
			case FLOAT:
			case BOOLEAN:
			case IDENTIFIER:
			case RAW_PHP:
				enterOuterAlt(_localctx, 1);
				{
				{
				setState(332);
				expression(0);
				setState(333);
				match(DOTDOT);
				}
				}
				break;
			case DOTDOT:
				enterOuterAlt(_localctx, 2);
				{
				{
				setState(335);
				match(DOTDOT);
				setState(336);
				expression(0);
				}
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Expression_listContext extends ParserRuleContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public List<TerminalNode> COMMA() { return getTokens(SayParser.COMMA); }
		public TerminalNode COMMA(int i) {
			return getToken(SayParser.COMMA, i);
		}
		public Expression_listContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_expression_list; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitExpression_list(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Expression_listContext expression_list() throws RecognitionException {
		Expression_listContext _localctx = new Expression_listContext(_ctx, getState());
		enterRule(_localctx, 32, RULE_expression_list);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(339);
			expression(0);
			setState(344);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==COMMA) {
				{
				{
				setState(340);
				match(COMMA);
				setState(341);
				expression(0);
				}
				}
				setState(346);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Arg_listContext extends ParserRuleContext {
		public List<ArgContext> arg() {
			return getRuleContexts(ArgContext.class);
		}
		public ArgContext arg(int i) {
			return getRuleContext(ArgContext.class,i);
		}
		public List<TerminalNode> COMMA() { return getTokens(SayParser.COMMA); }
		public TerminalNode COMMA(int i) {
			return getToken(SayParser.COMMA, i);
		}
		public Arg_listContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arg_list; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitArg_list(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Arg_listContext arg_list() throws RecognitionException {
		Arg_listContext _localctx = new Arg_listContext(_ctx, getState());
		enterRule(_localctx, 34, RULE_arg_list);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(347);
			arg();
			setState(352);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==COMMA) {
				{
				{
				setState(348);
				match(COMMA);
				setState(349);
				arg();
				}
				}
				setState(354);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class ArgContext extends ParserRuleContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public ArgPlaceholderContext argPlaceholder() {
			return getRuleContext(ArgPlaceholderContext.class,0);
		}
		public ArgContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arg; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitArg(this);
			else return visitor.visitChildren(this);
		}
	}

	public final ArgContext arg() throws RecognitionException {
		ArgContext _localctx = new ArgContext(_ctx, getState());
		enterRule(_localctx, 36, RULE_arg);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(357);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case SAY:
			case SAYNL:
			case DEBUG:
			case ASK:
			case PO:
			case SBO:
			case ARROW:
			case DOLLAR:
			case IF:
			case EACH:
			case WHILE:
			case DO:
			case CONTINUE:
			case RETURN:
			case BREAK:
			case EXCLAMATION:
			case MACRO:
			case TABLE:
			case STRING:
			case INTEGER:
			case FLOAT:
			case BOOLEAN:
			case IDENTIFIER:
			case RAW_PHP:
				{
				setState(355);
				expression(0);
				}
				break;
			case QUESTION:
				{
				setState(356);
				argPlaceholder();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class ArgPlaceholderContext extends ParserRuleContext {
		public TerminalNode QUESTION() { return getToken(SayParser.QUESTION, 0); }
		public ArgPlaceholderContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_argPlaceholder; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitArgPlaceholder(this);
			else return visitor.visitChildren(this);
		}
	}

	public final ArgPlaceholderContext argPlaceholder() throws RecognitionException {
		ArgPlaceholderContext _localctx = new ArgPlaceholderContext(_ctx, getState());
		enterRule(_localctx, 38, RULE_argPlaceholder);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(359);
			match(QUESTION);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Then_bodyContext extends ParserRuleContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public Then_bodyContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_then_body; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitThen_body(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Then_bodyContext then_body() throws RecognitionException {
		Then_bodyContext _localctx = new Then_bodyContext(_ctx, getState());
		enterRule(_localctx, 40, RULE_then_body);
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(362); 
			_errHandler.sync(this);
			_alt = 1;
			do {
				switch (_alt) {
				case 1:
					{
					{
					setState(361);
					expression(0);
					}
					}
					break;
				default:
					throw new NoViableAltException(this);
				}
				setState(364); 
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,40,_ctx);
			} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Else_bodyContext extends ParserRuleContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public Else_bodyContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_else_body; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitElse_body(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Else_bodyContext else_body() throws RecognitionException {
		Else_bodyContext _localctx = new Else_bodyContext(_ctx, getState());
		enterRule(_localctx, 42, RULE_else_body);
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(367); 
			_errHandler.sync(this);
			_alt = 1;
			do {
				switch (_alt) {
				case 1:
					{
					{
					setState(366);
					expression(0);
					}
					}
					break;
				default:
					throw new NoViableAltException(this);
				}
				setState(369); 
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,41,_ctx);
			} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Each_bodyContext extends ParserRuleContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public Each_bodyContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_each_body; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitEach_body(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Each_bodyContext each_body() throws RecognitionException {
		Each_bodyContext _localctx = new Each_bodyContext(_ctx, getState());
		enterRule(_localctx, 44, RULE_each_body);
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(372); 
			_errHandler.sync(this);
			_alt = 1;
			do {
				switch (_alt) {
				case 1:
					{
					{
					setState(371);
					expression(0);
					}
					}
					break;
				default:
					throw new NoViableAltException(this);
				}
				setState(374); 
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,42,_ctx);
			} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class While_bodyContext extends ParserRuleContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public While_bodyContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_while_body; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitWhile_body(this);
			else return visitor.visitChildren(this);
		}
	}

	public final While_bodyContext while_body() throws RecognitionException {
		While_bodyContext _localctx = new While_bodyContext(_ctx, getState());
		enterRule(_localctx, 46, RULE_while_body);
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(377); 
			_errHandler.sync(this);
			_alt = 1;
			do {
				switch (_alt) {
				case 1:
					{
					{
					setState(376);
					expression(0);
					}
					}
					break;
				default:
					throw new NoViableAltException(this);
				}
				setState(379); 
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,43,_ctx);
			} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static class Do_bodyContext extends ParserRuleContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public Do_bodyContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_do_body; }
		@Override
		public <T> T accept(ParseTreeVisitor<? extends T> visitor) {
			if ( visitor instanceof SayParserVisitor ) return ((SayParserVisitor<? extends T>)visitor).visitDo_body(this);
			else return visitor.visitChildren(this);
		}
	}

	public final Do_bodyContext do_body() throws RecognitionException {
		Do_bodyContext _localctx = new Do_bodyContext(_ctx, getState());
		enterRule(_localctx, 48, RULE_do_body);
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(382); 
			_errHandler.sync(this);
			_alt = 1;
			do {
				switch (_alt) {
				case 1:
					{
					{
					setState(381);
					expression(0);
					}
					}
					break;
				default:
					throw new NoViableAltException(this);
				}
				setState(384); 
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,44,_ctx);
			} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public boolean sempred(RuleContext _localctx, int ruleIndex, int predIndex) {
		switch (ruleIndex) {
		case 2:
			return expression_sempred((ExpressionContext)_localctx, predIndex);
		}
		return true;
	}
	private boolean expression_sempred(ExpressionContext _localctx, int predIndex) {
		switch (predIndex) {
		case 0:
			return precpred(_ctx, 24);
		case 1:
			return precpred(_ctx, 23);
		case 2:
			return precpred(_ctx, 22);
		case 3:
			return precpred(_ctx, 21);
		case 4:
			return precpred(_ctx, 18);
		case 5:
			return precpred(_ctx, 17);
		case 6:
			return precpred(_ctx, 4);
		case 7:
			return precpred(_ctx, 35);
		case 8:
			return precpred(_ctx, 34);
		case 9:
			return precpred(_ctx, 33);
		case 10:
			return precpred(_ctx, 26);
		case 11:
			return precpred(_ctx, 19);
		}
		return true;
	}

	public static final String _serializedATN =
		"\3\u608b\ua72a\u8133\ub9ed\u417c\u3be7\u7786\u5964\3N\u0185\4\2\t\2\4"+
		"\3\t\3\4\4\t\4\4\5\t\5\4\6\t\6\4\7\t\7\4\b\t\b\4\t\t\t\4\n\t\n\4\13\t"+
		"\13\4\f\t\f\4\r\t\r\4\16\t\16\4\17\t\17\4\20\t\20\4\21\t\21\4\22\t\22"+
		"\4\23\t\23\4\24\t\24\4\25\t\25\4\26\t\26\4\27\t\27\4\30\t\30\4\31\t\31"+
		"\4\32\t\32\3\2\7\2\66\n\2\f\2\16\29\13\2\3\2\7\2<\n\2\f\2\16\2?\13\2\3"+
		"\3\3\3\3\3\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\5\4Q\n"+
		"\4\3\4\3\4\6\4U\n\4\r\4\16\4V\3\4\3\4\3\4\3\4\3\4\3\4\5\4_\n\4\3\4\3\4"+
		"\3\4\3\4\3\4\5\4f\n\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4"+
		"\5\4t\n\4\6\4v\n\4\r\4\16\4w\3\4\3\4\6\4|\n\4\r\4\16\4}\3\4\3\4\7\4\u0082"+
		"\n\4\f\4\16\4\u0085\13\4\3\4\3\4\3\4\5\4\u008a\n\4\3\4\3\4\3\4\3\4\3\4"+
		"\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\6\4\u009d\n\4\r\4\16"+
		"\4\u009e\3\4\3\4\3\4\3\4\3\4\6\4\u00a6\n\4\r\4\16\4\u00a7\3\4\3\4\5\4"+
		"\u00ac\n\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4"+
		"\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\3\4\5\4\u00cb\n\4"+
		"\3\4\3\4\3\4\3\4\5\4\u00d1\n\4\3\4\5\4\u00d4\n\4\3\4\3\4\3\4\3\4\3\4\3"+
		"\4\3\4\3\4\3\4\3\4\7\4\u00e0\n\4\f\4\16\4\u00e3\13\4\3\5\3\5\7\5\u00e7"+
		"\n\5\f\5\16\5\u00ea\13\5\3\5\3\5\3\6\3\6\7\6\u00f0\n\6\f\6\16\6\u00f3"+
		"\13\6\3\6\3\6\3\7\3\7\3\7\3\7\3\b\3\b\3\b\7\b\u00fe\n\b\f\b\16\b\u0101"+
		"\13\b\3\b\5\b\u0104\n\b\3\t\3\t\3\t\5\t\u0109\n\t\3\n\5\n\u010c\n\n\3"+
		"\n\3\n\7\n\u0110\n\n\f\n\16\n\u0113\13\n\3\n\5\n\u0116\n\n\3\n\3\n\3\n"+
		"\3\n\3\n\5\n\u011d\n\n\3\13\3\13\3\13\3\13\5\13\u0123\n\13\3\f\3\f\3\f"+
		"\7\f\u0128\n\f\f\f\16\f\u012b\13\f\3\f\5\f\u012e\n\f\3\f\5\f\u0131\n\f"+
		"\3\r\3\r\3\r\3\r\3\16\3\16\3\16\7\16\u013a\n\16\f\16\16\16\u013d\13\16"+
		"\3\16\5\16\u0140\n\16\3\16\3\16\5\16\u0144\n\16\3\16\5\16\u0147\n\16\3"+
		"\17\3\17\3\20\3\20\3\20\3\20\3\21\3\21\3\21\3\21\3\21\5\21\u0154\n\21"+
		"\3\22\3\22\3\22\7\22\u0159\n\22\f\22\16\22\u015c\13\22\3\23\3\23\3\23"+
		"\7\23\u0161\n\23\f\23\16\23\u0164\13\23\3\24\3\24\5\24\u0168\n\24\3\25"+
		"\3\25\3\26\6\26\u016d\n\26\r\26\16\26\u016e\3\27\6\27\u0172\n\27\r\27"+
		"\16\27\u0173\3\30\6\30\u0177\n\30\r\30\16\30\u0178\3\31\6\31\u017c\n\31"+
		"\r\31\16\31\u017d\3\32\6\32\u0181\n\32\r\32\16\32\u0182\3\32\2\3\6\33"+
		"\2\4\6\b\n\f\16\20\22\24\26\30\32\34\36 \"$&(*,.\60\62\2\n\3\2DG\3\2("+
		"*\3\2&\'\5\2\37%,/\649\3\2\60\61\3\2:=\5\2&),,\60\63\3\2@B\2\u01b9\2\67"+
		"\3\2\2\2\4@\3\2\2\2\6\u00ab\3\2\2\2\b\u00e4\3\2\2\2\n\u00ed\3\2\2\2\f"+
		"\u00f6\3\2\2\2\16\u00fa\3\2\2\2\20\u0105\3\2\2\2\22\u011c\3\2\2\2\24\u011e"+
		"\3\2\2\2\26\u0130\3\2\2\2\30\u0132\3\2\2\2\32\u0146\3\2\2\2\34\u0148\3"+
		"\2\2\2\36\u014a\3\2\2\2 \u0153\3\2\2\2\"\u0155\3\2\2\2$\u015d\3\2\2\2"+
		"&\u0167\3\2\2\2(\u0169\3\2\2\2*\u016c\3\2\2\2,\u0171\3\2\2\2.\u0176\3"+
		"\2\2\2\60\u017b\3\2\2\2\62\u0180\3\2\2\2\64\66\5\4\3\2\65\64\3\2\2\2\66"+
		"9\3\2\2\2\67\65\3\2\2\2\678\3\2\2\28=\3\2\2\29\67\3\2\2\2:<\5\6\4\2;:"+
		"\3\2\2\2<?\3\2\2\2=;\3\2\2\2=>\3\2\2\2>\3\3\2\2\2?=\3\2\2\2@A\7\3\2\2"+
		"AB\7D\2\2B\5\3\2\2\2CD\b\4\1\2D\u00ac\7H\2\2E\u00ac\7\24\2\2F\u00ac\t"+
		"\2\2\2GH\7\21\2\2HI\5\22\n\2IJ\7\22\2\2J\u00ac\3\2\2\2KL\7\21\2\2LM\5"+
		"\26\f\2MN\7\22\2\2N\u00ac\3\2\2\2OQ\5\16\b\2PO\3\2\2\2PQ\3\2\2\2QR\3\2"+
		"\2\2RT\7\23\2\2SU\5\6\4\2TS\3\2\2\2UV\3\2\2\2VT\3\2\2\2VW\3\2\2\2W\u00ac"+
		"\3\2\2\2XY\7\25\2\2YZ\5\6\4\2Z[\7\26\2\2[^\5*\26\2\\]\7\27\2\2]_\5,\27"+
		"\2^\\\3\2\2\2^_\3\2\2\2_\u00ac\3\2\2\2`a\7\62\2\2a\u00ac\5\6\4\26b\u00ac"+
		"\7\34\2\2ce\7\35\2\2df\5\6\4\2ed\3\2\2\2ef\3\2\2\2f\u00ac\3\2\2\2g\u00ac"+
		"\7\36\2\2hi\7\4\2\2i\u00ac\5\6\4\17jk\7\5\2\2k\u00ac\5\6\4\16lm\7\6\2"+
		"\2m\u00ac\5\6\4\rno\7\7\2\2o\u00ac\5\6\4\fpu\7>\2\2qs\7H\2\2rt\5\f\7\2"+
		"sr\3\2\2\2st\3\2\2\2tv\3\2\2\2uq\3\2\2\2vw\3\2\2\2wu\3\2\2\2wx\3\2\2\2"+
		"xy\3\2\2\2y{\7\23\2\2z|\5\6\4\2{z\3\2\2\2|}\3\2\2\2}{\3\2\2\2}~\3\2\2"+
		"\2~\u00ac\3\2\2\2\177\u0083\7>\2\2\u0080\u0082\5\6\4\2\u0081\u0080\3\2"+
		"\2\2\u0082\u0085\3\2\2\2\u0083\u0081\3\2\2\2\u0083\u0084\3\2\2\2\u0084"+
		"\u00ac\3\2\2\2\u0085\u0083\3\2\2\2\u0086\u0087\7\30\2\2\u0087\u0089\5"+
		"\6\4\2\u0088\u008a\5\24\13\2\u0089\u0088\3\2\2\2\u0089\u008a\3\2\2\2\u008a"+
		"\u008b\3\2\2\2\u008b\u008c\5.\30\2\u008c\u00ac\3\2\2\2\u008d\u008e\7\31"+
		"\2\2\u008e\u008f\5\6\4\2\u008f\u0090\7\32\2\2\u0090\u0091\5\60\31\2\u0091"+
		"\u00ac\3\2\2\2\u0092\u0093\7\32\2\2\u0093\u0094\5\62\32\2\u0094\u0095"+
		"\7\31\2\2\u0095\u0096\5\6\4\7\u0096\u00ac\3\2\2\2\u0097\u0098\7\r\2\2"+
		"\u0098\u0099\5\6\4\2\u0099\u009a\7\16\2\2\u009a\u00ac\3\2\2\2\u009b\u009d"+
		"\7M\2\2\u009c\u009b\3\2\2\2\u009d\u009e\3\2\2\2\u009e\u009c\3\2\2\2\u009e"+
		"\u009f\3\2\2\2\u009f\u00ac\3\2\2\2\u00a0\u00a1\7C\2\2\u00a1\u00a2\7H\2"+
		"\2\u00a2\u00a3\7\17\2\2\u00a3\u00a5\5\b\5\2\u00a4\u00a6\5\n\6\2\u00a5"+
		"\u00a4\3\2\2\2\u00a6\u00a7\3\2\2\2\u00a7\u00a5\3\2\2\2\u00a7\u00a8\3\2"+
		"\2\2\u00a8\u00a9\3\2\2\2\u00a9\u00aa\7\20\2\2\u00aa\u00ac\3\2\2\2\u00ab"+
		"C\3\2\2\2\u00abE\3\2\2\2\u00abF\3\2\2\2\u00abG\3\2\2\2\u00abK\3\2\2\2"+
		"\u00abP\3\2\2\2\u00abX\3\2\2\2\u00ab`\3\2\2\2\u00abb\3\2\2\2\u00abc\3"+
		"\2\2\2\u00abg\3\2\2\2\u00abh\3\2\2\2\u00abj\3\2\2\2\u00abl\3\2\2\2\u00ab"+
		"n\3\2\2\2\u00abp\3\2\2\2\u00ab\177\3\2\2\2\u00ab\u0086\3\2\2\2\u00ab\u008d"+
		"\3\2\2\2\u00ab\u0092\3\2\2\2\u00ab\u0097\3\2\2\2\u00ab\u009c\3\2\2\2\u00ab"+
		"\u00a0\3\2\2\2\u00ac\u00e1\3\2\2\2\u00ad\u00ae\f\32\2\2\u00ae\u00af\7"+
		"+\2\2\u00af\u00e0\5\6\4\33\u00b0\u00b1\f\31\2\2\u00b1\u00b2\t\3\2\2\u00b2"+
		"\u00e0\5\6\4\32\u00b3\u00b4\f\30\2\2\u00b4\u00b5\t\4\2\2\u00b5\u00e0\5"+
		"\6\4\31\u00b6\u00b7\f\27\2\2\u00b7\u00b8\t\5\2\2\u00b8\u00e0\5\6\4\30"+
		"\u00b9\u00ba\f\24\2\2\u00ba\u00bb\t\6\2\2\u00bb\u00e0\5\6\4\25\u00bc\u00bd"+
		"\f\23\2\2\u00bd\u00be\t\7\2\2\u00be\u00e0\5\6\4\24\u00bf\u00c0\f\6\2\2"+
		"\u00c0\u00c1\7?\2\2\u00c1\u00e0\5\6\4\6\u00c2\u00c3\f%\2\2\u00c3\u00c4"+
		"\7\b\2\2\u00c4\u00c5\7H\2\2\u00c5\u00ca\7\13\2\2\u00c6\u00c7\7\21\2\2"+
		"\u00c7\u00c8\5$\23\2\u00c8\u00c9\7\22\2\2\u00c9\u00cb\3\2\2\2\u00ca\u00c6"+
		"\3\2\2\2\u00ca\u00cb\3\2\2\2\u00cb\u00e0\3\2\2\2\u00cc\u00cd\f$\2\2\u00cd"+
		"\u00d3\7\13\2\2\u00ce\u00d0\7\21\2\2\u00cf\u00d1\5$\23\2\u00d0\u00cf\3"+
		"\2\2\2\u00d0\u00d1\3\2\2\2\u00d1\u00d2\3\2\2\2\u00d2\u00d4\7\22\2\2\u00d3"+
		"\u00ce\3\2\2\2\u00d3\u00d4\3\2\2\2\u00d4\u00e0\3\2\2\2\u00d5\u00d6\f#"+
		"\2\2\u00d6\u00d7\7\b\2\2\u00d7\u00e0\7H\2\2\u00d8\u00d9\f\34\2\2\u00d9"+
		"\u00da\7\21\2\2\u00da\u00db\5\32\16\2\u00db\u00dc\7\22\2\2\u00dc\u00e0"+
		"\3\2\2\2\u00dd\u00de\f\25\2\2\u00de\u00e0\t\b\2\2\u00df\u00ad\3\2\2\2"+
		"\u00df\u00b0\3\2\2\2\u00df\u00b3\3\2\2\2\u00df\u00b6\3\2\2\2\u00df\u00b9"+
		"\3\2\2\2\u00df\u00bc\3\2\2\2\u00df\u00bf\3\2\2\2\u00df\u00c2\3\2\2\2\u00df"+
		"\u00cc\3\2\2\2\u00df\u00d5\3\2\2\2\u00df\u00d8\3\2\2\2\u00df\u00dd\3\2"+
		"\2\2\u00e0\u00e3\3\2\2\2\u00e1\u00df\3\2\2\2\u00e1\u00e2\3\2\2\2\u00e2"+
		"\7\3\2\2\2\u00e3\u00e1\3\2\2\2\u00e4\u00e8\7\r\2\2\u00e5\u00e7\7H\2\2"+
		"\u00e6\u00e5\3\2\2\2\u00e7\u00ea\3\2\2\2\u00e8\u00e6\3\2\2\2\u00e8\u00e9"+
		"\3\2\2\2\u00e9\u00eb\3\2\2\2\u00ea\u00e8\3\2\2\2\u00eb\u00ec\7\16\2\2"+
		"\u00ec\t\3\2\2\2\u00ed\u00f1\7\r\2\2\u00ee\u00f0\5\6\4\2\u00ef\u00ee\3"+
		"\2\2\2\u00f0\u00f3\3\2\2\2\u00f1\u00ef\3\2\2\2\u00f1\u00f2\3\2\2\2\u00f2"+
		"\u00f4\3\2\2\2\u00f3\u00f1\3\2\2\2\u00f4\u00f5\7\16\2\2\u00f5\13\3\2\2"+
		"\2\u00f6\u00f7\7\17\2\2\u00f7\u00f8\7H\2\2\u00f8\u00f9\7\20\2\2\u00f9"+
		"\r\3\2\2\2\u00fa\u00ff\5\20\t\2\u00fb\u00fc\7\t\2\2\u00fc\u00fe\5\20\t"+
		"\2\u00fd\u00fb\3\2\2\2\u00fe\u0101\3\2\2\2\u00ff\u00fd\3\2\2\2\u00ff\u0100"+
		"\3\2\2\2\u0100\u0103\3\2\2\2\u0101\u00ff\3\2\2\2\u0102\u0104\7\t\2\2\u0103"+
		"\u0102\3\2\2\2\u0103\u0104\3\2\2\2\u0104\17\3\2\2\2\u0105\u0108\7H\2\2"+
		"\u0106\u0107\7?\2\2\u0107\u0109\5\6\4\2\u0108\u0106\3\2\2\2\u0108\u0109"+
		"\3\2\2\2\u0109\21\3\2\2\2\u010a\u010c\5\6\4\2\u010b\u010a\3\2\2\2\u010b"+
		"\u010c\3\2\2\2\u010c\u0111\3\2\2\2\u010d\u010e\7\t\2\2\u010e\u0110\5\6"+
		"\4\2\u010f\u010d\3\2\2\2\u0110\u0113\3\2\2\2\u0111\u010f\3\2\2\2\u0111"+
		"\u0112\3\2\2\2\u0112\u0115\3\2\2\2\u0113\u0111\3\2\2\2\u0114\u0116\7\t"+
		"\2\2\u0115\u0114\3\2\2\2\u0115\u0116\3\2\2\2\u0116\u011d\3\2\2\2\u0117"+
		"\u011d\5\36\20\2\u0118\u0119\5\6\4\2\u0119\u011a\7\n\2\2\u011a\u011b\7"+
		"\f\2\2\u011b\u011d\3\2\2\2\u011c\u010b\3\2\2\2\u011c\u0117\3\2\2\2\u011c"+
		"\u0118\3\2\2\2\u011d\23\3\2\2\2\u011e\u011f\7\33\2\2\u011f\u0122\7H\2"+
		"\2\u0120\u0121\7\23\2\2\u0121\u0123\7H\2\2\u0122\u0120\3\2\2\2\u0122\u0123"+
		"\3\2\2\2\u0123\25\3\2\2\2\u0124\u0129\5\30\r\2\u0125\u0126\7\t\2\2\u0126"+
		"\u0128\5\30\r\2\u0127\u0125\3\2\2\2\u0128\u012b\3\2\2\2\u0129\u0127\3"+
		"\2\2\2\u0129\u012a\3\2\2\2\u012a\u012d\3\2\2\2\u012b\u0129\3\2\2\2\u012c"+
		"\u012e\7\t\2\2\u012d\u012c\3\2\2\2\u012d\u012e\3\2\2\2\u012e\u0131\3\2"+
		"\2\2\u012f\u0131\7\23\2\2\u0130\u0124\3\2\2\2\u0130\u012f\3\2\2\2\u0131"+
		"\27\3\2\2\2\u0132\u0133\7D\2\2\u0133\u0134\7\23\2\2\u0134\u0135\5\6\4"+
		"\2\u0135\31\3\2\2\2\u0136\u013b\5\6\4\2\u0137\u0138\7\t\2\2\u0138\u013a"+
		"\5\6\4\2\u0139\u0137\3\2\2\2\u013a\u013d\3\2\2\2\u013b\u0139\3\2\2\2\u013b"+
		"\u013c\3\2\2\2\u013c\u013f\3\2\2\2\u013d\u013b\3\2\2\2\u013e\u0140\7\t"+
		"\2\2\u013f\u013e\3\2\2\2\u013f\u0140\3\2\2\2\u0140\u0147\3\2\2\2\u0141"+
		"\u0144\5 \21\2\u0142\u0144\5\36\20\2\u0143\u0141\3\2\2\2\u0143\u0142\3"+
		"\2\2\2\u0144\u0147\3\2\2\2\u0145\u0147\5\34\17\2\u0146\u0136\3\2\2\2\u0146"+
		"\u0143\3\2\2\2\u0146\u0145\3\2\2\2\u0147\33\3\2\2\2\u0148\u0149\t\t\2"+
		"\2\u0149\35\3\2\2\2\u014a\u014b\5\6\4\2\u014b\u014c\7\n\2\2\u014c\u014d"+
		"\5\6\4\2\u014d\37\3\2\2\2\u014e\u014f\5\6\4\2\u014f\u0150\7\n\2\2\u0150"+
		"\u0154\3\2\2\2\u0151\u0152\7\n\2\2\u0152\u0154\5\6\4\2\u0153\u014e\3\2"+
		"\2\2\u0153\u0151\3\2\2\2\u0154!\3\2\2\2\u0155\u015a\5\6\4\2\u0156\u0157"+
		"\7\t\2\2\u0157\u0159\5\6\4\2\u0158\u0156\3\2\2\2\u0159\u015c\3\2\2\2\u015a"+
		"\u0158\3\2\2\2\u015a\u015b\3\2\2\2\u015b#\3\2\2\2\u015c\u015a\3\2\2\2"+
		"\u015d\u0162\5&\24\2\u015e\u015f\7\t\2\2\u015f\u0161\5&\24\2\u0160\u015e"+
		"\3\2\2\2\u0161\u0164\3\2\2\2\u0162\u0160\3\2\2\2\u0162\u0163\3\2\2\2\u0163"+
		"%\3\2\2\2\u0164\u0162\3\2\2\2\u0165\u0168\5\6\4\2\u0166\u0168\5(\25\2"+
		"\u0167\u0165\3\2\2\2\u0167\u0166\3\2\2\2\u0168\'\3\2\2\2\u0169\u016a\7"+
		"\63\2\2\u016a)\3\2\2\2\u016b\u016d\5\6\4\2\u016c\u016b\3\2\2\2\u016d\u016e"+
		"\3\2\2\2\u016e\u016c\3\2\2\2\u016e\u016f\3\2\2\2\u016f+\3\2\2\2\u0170"+
		"\u0172\5\6\4\2\u0171\u0170\3\2\2\2\u0172\u0173\3\2\2\2\u0173\u0171\3\2"+
		"\2\2\u0173\u0174\3\2\2\2\u0174-\3\2\2\2\u0175\u0177\5\6\4\2\u0176\u0175"+
		"\3\2\2\2\u0177\u0178\3\2\2\2\u0178\u0176\3\2\2\2\u0178\u0179\3\2\2\2\u0179"+
		"/\3\2\2\2\u017a\u017c\5\6\4\2\u017b\u017a\3\2\2\2\u017c\u017d\3\2\2\2"+
		"\u017d\u017b\3\2\2\2\u017d\u017e\3\2\2\2\u017e\61\3\2\2\2\u017f\u0181"+
		"\5\6\4\2\u0180\u017f\3\2\2\2\u0181\u0182\3\2\2\2\u0182\u0180\3\2\2\2\u0182"+
		"\u0183\3\2\2\2\u0183\63\3\2\2\2/\67=PV^esw}\u0083\u0089\u009e\u00a7\u00ab"+
		"\u00ca\u00d0\u00d3\u00df\u00e1\u00e8\u00f1\u00ff\u0103\u0108\u010b\u0111"+
		"\u0115\u011c\u0122\u0129\u012d\u0130\u013b\u013f\u0143\u0146\u0153\u015a"+
		"\u0162\u0167\u016e\u0173\u0178\u017d\u0182";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}