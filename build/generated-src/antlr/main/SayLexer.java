// Generated from SayLexer.g4 by ANTLR 4.9.1

    package main.java.nikos.generated;

import org.antlr.v4.runtime.Lexer;
import org.antlr.v4.runtime.CharStream;
import org.antlr.v4.runtime.Token;
import org.antlr.v4.runtime.TokenStream;
import org.antlr.v4.runtime.*;
import org.antlr.v4.runtime.atn.*;
import org.antlr.v4.runtime.dfa.DFA;
import org.antlr.v4.runtime.misc.*;

@SuppressWarnings({"all", "warnings", "unchecked", "unused", "cast"})
public class SayLexer extends Lexer {
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
		IN_PHP=1;
	public static String[] channelNames = {
		"DEFAULT_TOKEN_CHANNEL", "HIDDEN"
	};

	public static String[] modeNames = {
		"DEFAULT_MODE", "IN_PHP"
	};

	private static String[] makeRuleNames() {
		return new String[] {
			"IMPORT", "SAY", "SAYNL", "DEBUG", "ASK", "DOT", "COMMA", "DOTDOT", "COLON", 
			"INF", "PO", "PC", "CBO", "CBC", "SBO", "SBC", "ARROW", "DOLLAR", "IF", 
			"THEN", "ELSE", "EACH", "WHILE", "DO", "AS", "CONTINUE", "RETURN", "BREAK", 
			"EQUALS", "EXCLAMATION_EQUALS", "ABO", "ABC", "ABO_EQUALS", "ABC_EQUALS", 
			"KINDA", "PLUS", "MINUS", "STAR", "FSLASH", "PERCENTAGE", "CARET", "AMPERSAND", 
			"UNION", "INTERSECTION", "DIFFERENCE", "AND", "OR", "EXCLAMATION", "QUESTION", 
			"FSLASH_QUESTION", "ASSIGN_QUESTION", "ASSIGN_PLUS", "ASSIGN_MINUS", 
			"ASSIGN_STAR", "ASSIGN_FSLASH", "ONLY", "EXCEPT", "MAP", "APPLY", "MACRO", 
			"ASSIGN", "FIRST", "NEXT", "LAST", "TABLE", "STRING", "INTEGER", "FLOAT", 
			"BOOLEAN", "IDENTIFIER", "BLOCK_COMMENT", "LINE_COMMENT", "WS", "PHP_OPEN_TAG", 
			"RAW_PHP", "PHP_CLOSE_TAG"
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


	public SayLexer(CharStream input) {
		super(input);
		_interp = new LexerATNSimulator(this,_ATN,_decisionToDFA,_sharedContextCache);
	}

	@Override
	public String getGrammarFileName() { return "SayLexer.g4"; }

	@Override
	public String[] getRuleNames() { return ruleNames; }

	@Override
	public String getSerializedATN() { return _serializedATN; }

	@Override
	public String[] getChannelNames() { return channelNames; }

	@Override
	public String[] getModeNames() { return modeNames; }

	@Override
	public ATN getATN() { return _ATN; }

	public static final String _serializedATN =
		"\3\u608b\ua72a\u8133\ub9ed\u417c\u3be7\u7786\u5964\2N\u020e\b\1\b\1\4"+
		"\2\t\2\4\3\t\3\4\4\t\4\4\5\t\5\4\6\t\6\4\7\t\7\4\b\t\b\4\t\t\t\4\n\t\n"+
		"\4\13\t\13\4\f\t\f\4\r\t\r\4\16\t\16\4\17\t\17\4\20\t\20\4\21\t\21\4\22"+
		"\t\22\4\23\t\23\4\24\t\24\4\25\t\25\4\26\t\26\4\27\t\27\4\30\t\30\4\31"+
		"\t\31\4\32\t\32\4\33\t\33\4\34\t\34\4\35\t\35\4\36\t\36\4\37\t\37\4 \t"+
		" \4!\t!\4\"\t\"\4#\t#\4$\t$\4%\t%\4&\t&\4\'\t\'\4(\t(\4)\t)\4*\t*\4+\t"+
		"+\4,\t,\4-\t-\4.\t.\4/\t/\4\60\t\60\4\61\t\61\4\62\t\62\4\63\t\63\4\64"+
		"\t\64\4\65\t\65\4\66\t\66\4\67\t\67\48\t8\49\t9\4:\t:\4;\t;\4<\t<\4=\t"+
		"=\4>\t>\4?\t?\4@\t@\4A\tA\4B\tB\4C\tC\4D\tD\4E\tE\4F\tF\4G\tG\4H\tH\4"+
		"I\tI\4J\tJ\4K\tK\4L\tL\4M\tM\3\2\3\2\3\2\3\2\3\2\3\2\3\2\3\3\3\3\3\3\3"+
		"\3\3\4\3\4\3\4\3\4\3\4\3\4\3\5\3\5\3\5\3\5\3\5\3\5\3\6\3\6\3\6\3\6\3\7"+
		"\3\7\3\b\3\b\3\t\3\t\3\t\3\n\3\n\3\13\3\13\3\13\3\13\3\f\3\f\3\r\3\r\3"+
		"\16\3\16\3\17\3\17\3\20\3\20\3\21\3\21\3\22\3\22\3\22\3\23\3\23\3\24\3"+
		"\24\3\24\3\25\3\25\3\25\3\25\3\25\3\26\3\26\3\26\3\26\3\26\3\27\3\27\3"+
		"\27\3\27\3\27\3\30\3\30\3\30\3\30\3\30\3\30\3\31\3\31\3\31\3\32\3\32\3"+
		"\32\3\33\3\33\3\33\3\33\3\33\3\33\3\33\3\33\3\33\3\34\3\34\3\34\3\34\3"+
		"\34\3\34\3\34\3\35\3\35\3\35\3\35\3\35\3\35\3\36\3\36\3\37\3\37\3\37\3"+
		" \3 \3!\3!\3\"\3\"\3\"\3#\3#\3#\3$\3$\3$\3$\3$\3$\3%\3%\3&\3&\3\'\3\'"+
		"\3(\3(\3)\3)\3*\3*\3+\3+\3,\3,\3,\3,\3,\3,\3-\3-\3-\3-\3-\3-\3-\3-\3-"+
		"\3-\3-\3-\3-\3.\3.\3.\3.\3.\3.\3.\3.\3.\3.\3.\3/\3/\3/\3/\3\60\3\60\3"+
		"\60\3\61\3\61\3\62\3\62\3\63\3\63\3\63\3\64\3\64\3\64\3\64\3\65\3\65\3"+
		"\65\3\65\3\66\3\66\3\66\3\66\3\67\3\67\3\67\3\67\38\38\38\38\39\39\39"+
		"\39\39\3:\3:\3:\3:\3:\3:\3:\3;\3;\3;\3;\3<\3<\3<\3<\3<\3<\3=\3=\3=\3="+
		"\3=\3=\3>\3>\3>\3?\3?\3?\3?\3?\3?\3@\3@\3@\3@\3@\3A\3A\3A\3A\3A\3B\3B"+
		"\3B\3B\3B\3B\3C\3C\7C\u01a4\nC\fC\16C\u01a7\13C\3C\3C\3D\3D\5D\u01ad\n"+
		"D\3D\3D\7D\u01b1\nD\fD\16D\u01b4\13D\3D\5D\u01b7\nD\5D\u01b9\nD\3E\3E"+
		"\3E\6E\u01be\nE\rE\16E\u01bf\3E\5E\u01c3\nE\3F\3F\3F\3F\3F\3F\3F\3F\3"+
		"F\5F\u01ce\nF\3G\5G\u01d1\nG\3G\6G\u01d4\nG\rG\16G\u01d5\3G\5G\u01d9\n"+
		"G\3H\3H\3H\3H\7H\u01df\nH\fH\16H\u01e2\13H\3H\3H\3H\3H\3H\3I\3I\7I\u01eb"+
		"\nI\fI\16I\u01ee\13I\3I\3I\3J\6J\u01f3\nJ\rJ\16J\u01f4\3J\3J\3K\3K\3K"+
		"\3K\3K\3K\3K\3K\3K\3L\3L\3L\6L\u0205\nL\rL\16L\u0206\3M\3M\3M\3M\3M\3"+
		"M\4\u01a5\u01e0\2N\4\3\6\4\b\5\n\6\f\7\16\b\20\t\22\n\24\13\26\f\30\r"+
		"\32\16\34\17\36\20 \21\"\22$\23&\24(\25*\26,\27.\30\60\31\62\32\64\33"+
		"\66\348\35:\36<\37> @!B\"D#F$H%J&L\'N(P)R*T+V,X-Z.\\/^\60`\61b\62d\63"+
		"f\64h\65j\66l\67n8p9r:t;v<x=z>|?~@\u0080A\u0082B\u0084C\u0086D\u0088E"+
		"\u008aF\u008cG\u008eH\u0090I\u0092J\u0094K\u0096L\u0098M\u009aN\4\2\3"+
		"\16\3\2\62\62\3\2//\3\2\63;\3\2\62;\3\2\'\'\4\2&\'BB\6\2\62;C\\aac|\4"+
		"\2&\'AB\4\2\f\f\17\17\5\2\13\f\17\17\"\"\3\2AA\3\2@@\2\u021c\2\4\3\2\2"+
		"\2\2\6\3\2\2\2\2\b\3\2\2\2\2\n\3\2\2\2\2\f\3\2\2\2\2\16\3\2\2\2\2\20\3"+
		"\2\2\2\2\22\3\2\2\2\2\24\3\2\2\2\2\26\3\2\2\2\2\30\3\2\2\2\2\32\3\2\2"+
		"\2\2\34\3\2\2\2\2\36\3\2\2\2\2 \3\2\2\2\2\"\3\2\2\2\2$\3\2\2\2\2&\3\2"+
		"\2\2\2(\3\2\2\2\2*\3\2\2\2\2,\3\2\2\2\2.\3\2\2\2\2\60\3\2\2\2\2\62\3\2"+
		"\2\2\2\64\3\2\2\2\2\66\3\2\2\2\28\3\2\2\2\2:\3\2\2\2\2<\3\2\2\2\2>\3\2"+
		"\2\2\2@\3\2\2\2\2B\3\2\2\2\2D\3\2\2\2\2F\3\2\2\2\2H\3\2\2\2\2J\3\2\2\2"+
		"\2L\3\2\2\2\2N\3\2\2\2\2P\3\2\2\2\2R\3\2\2\2\2T\3\2\2\2\2V\3\2\2\2\2X"+
		"\3\2\2\2\2Z\3\2\2\2\2\\\3\2\2\2\2^\3\2\2\2\2`\3\2\2\2\2b\3\2\2\2\2d\3"+
		"\2\2\2\2f\3\2\2\2\2h\3\2\2\2\2j\3\2\2\2\2l\3\2\2\2\2n\3\2\2\2\2p\3\2\2"+
		"\2\2r\3\2\2\2\2t\3\2\2\2\2v\3\2\2\2\2x\3\2\2\2\2z\3\2\2\2\2|\3\2\2\2\2"+
		"~\3\2\2\2\2\u0080\3\2\2\2\2\u0082\3\2\2\2\2\u0084\3\2\2\2\2\u0086\3\2"+
		"\2\2\2\u0088\3\2\2\2\2\u008a\3\2\2\2\2\u008c\3\2\2\2\2\u008e\3\2\2\2\2"+
		"\u0090\3\2\2\2\2\u0092\3\2\2\2\2\u0094\3\2\2\2\2\u0096\3\2\2\2\3\u0098"+
		"\3\2\2\2\3\u009a\3\2\2\2\4\u009c\3\2\2\2\6\u00a3\3\2\2\2\b\u00a7\3\2\2"+
		"\2\n\u00ad\3\2\2\2\f\u00b3\3\2\2\2\16\u00b7\3\2\2\2\20\u00b9\3\2\2\2\22"+
		"\u00bb\3\2\2\2\24\u00be\3\2\2\2\26\u00c0\3\2\2\2\30\u00c4\3\2\2\2\32\u00c6"+
		"\3\2\2\2\34\u00c8\3\2\2\2\36\u00ca\3\2\2\2 \u00cc\3\2\2\2\"\u00ce\3\2"+
		"\2\2$\u00d0\3\2\2\2&\u00d3\3\2\2\2(\u00d5\3\2\2\2*\u00d8\3\2\2\2,\u00dd"+
		"\3\2\2\2.\u00e2\3\2\2\2\60\u00e7\3\2\2\2\62\u00ed\3\2\2\2\64\u00f0\3\2"+
		"\2\2\66\u00f3\3\2\2\28\u00fc\3\2\2\2:\u0103\3\2\2\2<\u0109\3\2\2\2>\u010b"+
		"\3\2\2\2@\u010e\3\2\2\2B\u0110\3\2\2\2D\u0112\3\2\2\2F\u0115\3\2\2\2H"+
		"\u0118\3\2\2\2J\u011e\3\2\2\2L\u0120\3\2\2\2N\u0122\3\2\2\2P\u0124\3\2"+
		"\2\2R\u0126\3\2\2\2T\u0128\3\2\2\2V\u012a\3\2\2\2X\u012c\3\2\2\2Z\u0132"+
		"\3\2\2\2\\\u013f\3\2\2\2^\u014a\3\2\2\2`\u014e\3\2\2\2b\u0151\3\2\2\2"+
		"d\u0153\3\2\2\2f\u0155\3\2\2\2h\u0158\3\2\2\2j\u015c\3\2\2\2l\u0160\3"+
		"\2\2\2n\u0164\3\2\2\2p\u0168\3\2\2\2r\u016c\3\2\2\2t\u0171\3\2\2\2v\u0178"+
		"\3\2\2\2x\u017c\3\2\2\2z\u0182\3\2\2\2|\u0188\3\2\2\2~\u018b\3\2\2\2\u0080"+
		"\u0191\3\2\2\2\u0082\u0196\3\2\2\2\u0084\u019b\3\2\2\2\u0086\u01a1\3\2"+
		"\2\2\u0088\u01b8\3\2\2\2\u008a\u01ba\3\2\2\2\u008c\u01cd\3\2\2\2\u008e"+
		"\u01d0\3\2\2\2\u0090\u01da\3\2\2\2\u0092\u01e8\3\2\2\2\u0094\u01f2\3\2"+
		"\2\2\u0096\u01f8\3\2\2\2\u0098\u0204\3\2\2\2\u009a\u0208\3\2\2\2\u009c"+
		"\u009d\7k\2\2\u009d\u009e\7o\2\2\u009e\u009f\7r\2\2\u009f\u00a0\7q\2\2"+
		"\u00a0\u00a1\7t\2\2\u00a1\u00a2\7v\2\2\u00a2\5\3\2\2\2\u00a3\u00a4\7u"+
		"\2\2\u00a4\u00a5\7c\2\2\u00a5\u00a6\7{\2\2\u00a6\7\3\2\2\2\u00a7\u00a8"+
		"\7u\2\2\u00a8\u00a9\7c\2\2\u00a9\u00aa\7{\2\2\u00aa\u00ab\7P\2\2\u00ab"+
		"\u00ac\7N\2\2\u00ac\t\3\2\2\2\u00ad\u00ae\7f\2\2\u00ae\u00af\7g\2\2\u00af"+
		"\u00b0\7d\2\2\u00b0\u00b1\7w\2\2\u00b1\u00b2\7i\2\2\u00b2\13\3\2\2\2\u00b3"+
		"\u00b4\7c\2\2\u00b4\u00b5\7u\2\2\u00b5\u00b6\7m\2\2\u00b6\r\3\2\2\2\u00b7"+
		"\u00b8\7\60\2\2\u00b8\17\3\2\2\2\u00b9\u00ba\7.\2\2\u00ba\21\3\2\2\2\u00bb"+
		"\u00bc\7\60\2\2\u00bc\u00bd\7\60\2\2\u00bd\23\3\2\2\2\u00be\u00bf\7<\2"+
		"\2\u00bf\25\3\2\2\2\u00c0\u00c1\7k\2\2\u00c1\u00c2\7p\2\2\u00c2\u00c3"+
		"\7h\2\2\u00c3\27\3\2\2\2\u00c4\u00c5\7*\2\2\u00c5\31\3\2\2\2\u00c6\u00c7"+
		"\7+\2\2\u00c7\33\3\2\2\2\u00c8\u00c9\7}\2\2\u00c9\35\3\2\2\2\u00ca\u00cb"+
		"\7\177\2\2\u00cb\37\3\2\2\2\u00cc\u00cd\7]\2\2\u00cd!\3\2\2\2\u00ce\u00cf"+
		"\7_\2\2\u00cf#\3\2\2\2\u00d0\u00d1\7/\2\2\u00d1\u00d2\7@\2\2\u00d2%\3"+
		"\2\2\2\u00d3\u00d4\7&\2\2\u00d4\'\3\2\2\2\u00d5\u00d6\7k\2\2\u00d6\u00d7"+
		"\7h\2\2\u00d7)\3\2\2\2\u00d8\u00d9\7v\2\2\u00d9\u00da\7j\2\2\u00da\u00db"+
		"\7g\2\2\u00db\u00dc\7p\2\2\u00dc+\3\2\2\2\u00dd\u00de\7g\2\2\u00de\u00df"+
		"\7n\2\2\u00df\u00e0\7u\2\2\u00e0\u00e1\7g\2\2\u00e1-\3\2\2\2\u00e2\u00e3"+
		"\7g\2\2\u00e3\u00e4\7c\2\2\u00e4\u00e5\7e\2\2\u00e5\u00e6\7j\2\2\u00e6"+
		"/\3\2\2\2\u00e7\u00e8\7y\2\2\u00e8\u00e9\7j\2\2\u00e9\u00ea\7k\2\2\u00ea"+
		"\u00eb\7n\2\2\u00eb\u00ec\7g\2\2\u00ec\61\3\2\2\2\u00ed\u00ee\7f\2\2\u00ee"+
		"\u00ef\7q\2\2\u00ef\63\3\2\2\2\u00f0\u00f1\7c\2\2\u00f1\u00f2\7u\2\2\u00f2"+
		"\65\3\2\2\2\u00f3\u00f4\7e\2\2\u00f4\u00f5\7q\2\2\u00f5\u00f6\7p\2\2\u00f6"+
		"\u00f7\7v\2\2\u00f7\u00f8\7k\2\2\u00f8\u00f9\7p\2\2\u00f9\u00fa\7w\2\2"+
		"\u00fa\u00fb\7g\2\2\u00fb\67\3\2\2\2\u00fc\u00fd\7t\2\2\u00fd\u00fe\7"+
		"g\2\2\u00fe\u00ff\7v\2\2\u00ff\u0100\7w\2\2\u0100\u0101\7t\2\2\u0101\u0102"+
		"\7p\2\2\u01029\3\2\2\2\u0103\u0104\7d\2\2\u0104\u0105\7t\2\2\u0105\u0106"+
		"\7g\2\2\u0106\u0107\7c\2\2\u0107\u0108\7m\2\2\u0108;\3\2\2\2\u0109\u010a"+
		"\7?\2\2\u010a=\3\2\2\2\u010b\u010c\7#\2\2\u010c\u010d\7?\2\2\u010d?\3"+
		"\2\2\2\u010e\u010f\7@\2\2\u010fA\3\2\2\2\u0110\u0111\7>\2\2\u0111C\3\2"+
		"\2\2\u0112\u0113\7@\2\2\u0113\u0114\7?\2\2\u0114E\3\2\2\2\u0115\u0116"+
		"\7>\2\2\u0116\u0117\7?\2\2\u0117G\3\2\2\2\u0118\u0119\7m\2\2\u0119\u011a"+
		"\7k\2\2\u011a\u011b\7p\2\2\u011b\u011c\7f\2\2\u011c\u011d\7c\2\2\u011d"+
		"I\3\2\2\2\u011e\u011f\7-\2\2\u011fK\3\2\2\2\u0120\u0121\7/\2\2\u0121M"+
		"\3\2\2\2\u0122\u0123\7,\2\2\u0123O\3\2\2\2\u0124\u0125\7\61\2\2\u0125"+
		"Q\3\2\2\2\u0126\u0127\7\'\2\2\u0127S\3\2\2\2\u0128\u0129\7`\2\2\u0129"+
		"U\3\2\2\2\u012a\u012b\7(\2\2\u012bW\3\2\2\2\u012c\u012d\7w\2\2\u012d\u012e"+
		"\7p\2\2\u012e\u012f\7k\2\2\u012f\u0130\7q\2\2\u0130\u0131\7p\2\2\u0131"+
		"Y\3\2\2\2\u0132\u0133\7k\2\2\u0133\u0134\7p\2\2\u0134\u0135\7v\2\2\u0135"+
		"\u0136\7g\2\2\u0136\u0137\7t\2\2\u0137\u0138\7u\2\2\u0138\u0139\7g\2\2"+
		"\u0139\u013a\7e\2\2\u013a\u013b\7v\2\2\u013b\u013c\7k\2\2\u013c\u013d"+
		"\7q\2\2\u013d\u013e\7p\2\2\u013e[\3\2\2\2\u013f\u0140\7f\2\2\u0140\u0141"+
		"\7k\2\2\u0141\u0142\7h\2\2\u0142\u0143\7h\2\2\u0143\u0144\7g\2\2\u0144"+
		"\u0145\7t\2\2\u0145\u0146\7g\2\2\u0146\u0147\7p\2\2\u0147\u0148\7e\2\2"+
		"\u0148\u0149\7g\2\2\u0149]\3\2\2\2\u014a\u014b\7c\2\2\u014b\u014c\7p\2"+
		"\2\u014c\u014d\7f\2\2\u014d_\3\2\2\2\u014e\u014f\7q\2\2\u014f\u0150\7"+
		"t\2\2\u0150a\3\2\2\2\u0151\u0152\7#\2\2\u0152c\3\2\2\2\u0153\u0154\7A"+
		"\2\2\u0154e\3\2\2\2\u0155\u0156\7\61\2\2\u0156\u0157\7A\2\2\u0157g\3\2"+
		"\2\2\u0158\u0159\7>\2\2\u0159\u015a\7>\2\2\u015a\u015b\7(\2\2\u015bi\3"+
		"\2\2\2\u015c\u015d\7>\2\2\u015d\u015e\7>\2\2\u015e\u015f\7-\2\2\u015f"+
		"k\3\2\2\2\u0160\u0161\7>\2\2\u0161\u0162\7>\2\2\u0162\u0163\7/\2\2\u0163"+
		"m\3\2\2\2\u0164\u0165\7>\2\2\u0165\u0166\7>\2\2\u0166\u0167\7\61\2\2\u0167"+
		"o\3\2\2\2\u0168\u0169\7>\2\2\u0169\u016a\7>\2\2\u016a\u016b\7,\2\2\u016b"+
		"q\3\2\2\2\u016c\u016d\7q\2\2\u016d\u016e\7p\2\2\u016e\u016f\7n\2\2\u016f"+
		"\u0170\7{\2\2\u0170s\3\2\2\2\u0171\u0172\7g\2\2\u0172\u0173\7z\2\2\u0173"+
		"\u0174\7e\2\2\u0174\u0175\7g\2\2\u0175\u0176\7r\2\2\u0176\u0177\7v\2\2"+
		"\u0177u\3\2\2\2\u0178\u0179\7o\2\2\u0179\u017a\7c\2\2\u017a\u017b\7r\2"+
		"\2\u017bw\3\2\2\2\u017c\u017d\7c\2\2\u017d\u017e\7r\2\2\u017e\u017f\7"+
		"r\2\2\u017f\u0180\7n\2\2\u0180\u0181\7{\2\2\u0181y\3\2\2\2\u0182\u0183"+
		"\7o\2\2\u0183\u0184\7c\2\2\u0184\u0185\7e\2\2\u0185\u0186\7t\2\2\u0186"+
		"\u0187\7q\2\2\u0187{\3\2\2\2\u0188\u0189\7>\2\2\u0189\u018a\7>\2\2\u018a"+
		"}\3\2\2\2\u018b\u018c\7h\2\2\u018c\u018d\7k\2\2\u018d\u018e\7t\2\2\u018e"+
		"\u018f\7u\2\2\u018f\u0190\7v\2\2\u0190\177\3\2\2\2\u0191\u0192\7p\2\2"+
		"\u0192\u0193\7g\2\2\u0193\u0194\7z\2\2\u0194\u0195\7v\2\2\u0195\u0081"+
		"\3\2\2\2\u0196\u0197\7n\2\2\u0197\u0198\7c\2\2\u0198\u0199\7u\2\2\u0199"+
		"\u019a\7v\2\2\u019a\u0083\3\2\2\2\u019b\u019c\7v\2\2\u019c\u019d\7c\2"+
		"\2\u019d\u019e\7d\2\2\u019e\u019f\7n\2\2\u019f\u01a0\7g\2\2\u01a0\u0085"+
		"\3\2\2\2\u01a1\u01a5\7)\2\2\u01a2\u01a4\13\2\2\2\u01a3\u01a2\3\2\2\2\u01a4"+
		"\u01a7\3\2\2\2\u01a5\u01a6\3\2\2\2\u01a5\u01a3\3\2\2\2\u01a6\u01a8\3\2"+
		"\2\2\u01a7\u01a5\3\2\2\2\u01a8\u01a9\7)\2\2\u01a9\u0087\3\2\2\2\u01aa"+
		"\u01b9\t\2\2\2\u01ab\u01ad\t\3\2\2\u01ac\u01ab\3\2\2\2\u01ac\u01ad\3\2"+
		"\2\2\u01ad\u01ae\3\2\2\2\u01ae\u01b2\t\4\2\2\u01af\u01b1\t\5\2\2\u01b0"+
		"\u01af\3\2\2\2\u01b1\u01b4\3\2\2\2\u01b2\u01b0\3\2\2\2\u01b2\u01b3\3\2"+
		"\2\2\u01b3\u01b6\3\2\2\2\u01b4\u01b2\3\2\2\2\u01b5\u01b7\t\6\2\2\u01b6"+
		"\u01b5\3\2\2\2\u01b6\u01b7\3\2\2\2\u01b7\u01b9\3\2\2\2\u01b8\u01aa\3\2"+
		"\2\2\u01b8\u01ac\3\2\2\2\u01b9\u0089\3\2\2\2\u01ba\u01bb\5\u0088D\2\u01bb"+
		"\u01bd\7\60\2\2\u01bc\u01be\t\5\2\2\u01bd\u01bc\3\2\2\2\u01be\u01bf\3"+
		"\2\2\2\u01bf\u01bd\3\2\2\2\u01bf\u01c0\3\2\2\2\u01c0\u01c2\3\2\2\2\u01c1"+
		"\u01c3\t\6\2\2\u01c2\u01c1\3\2\2\2\u01c2\u01c3\3\2\2\2\u01c3\u008b\3\2"+
		"\2\2\u01c4\u01c5\7v\2\2\u01c5\u01c6\7t\2\2\u01c6\u01c7\7w\2\2\u01c7\u01ce"+
		"\7g\2\2\u01c8\u01c9\7h\2\2\u01c9\u01ca\7c\2\2\u01ca\u01cb\7n\2\2\u01cb"+
		"\u01cc\7u\2\2\u01cc\u01ce\7g\2\2\u01cd\u01c4\3\2\2\2\u01cd\u01c8\3\2\2"+
		"\2\u01ce\u008d\3\2\2\2\u01cf\u01d1\t\7\2\2\u01d0\u01cf\3\2\2\2\u01d0\u01d1"+
		"\3\2\2\2\u01d1\u01d3\3\2\2\2\u01d2\u01d4\t\b\2\2\u01d3\u01d2\3\2\2\2\u01d4"+
		"\u01d5\3\2\2\2\u01d5\u01d3\3\2\2\2\u01d5\u01d6\3\2\2\2\u01d6\u01d8\3\2"+
		"\2\2\u01d7\u01d9\t\t\2\2\u01d8\u01d7\3\2\2\2\u01d8\u01d9\3\2\2\2\u01d9"+
		"\u008f\3\2\2\2\u01da\u01db\7%\2\2\u01db\u01dc\7%\2\2\u01dc\u01e0\3\2\2"+
		"\2\u01dd\u01df\13\2\2\2\u01de\u01dd\3\2\2\2\u01df\u01e2\3\2\2\2\u01e0"+
		"\u01e1\3\2\2\2\u01e0\u01de\3\2\2\2\u01e1\u01e3\3\2\2\2\u01e2\u01e0\3\2"+
		"\2\2\u01e3\u01e4\7%\2\2\u01e4\u01e5\7%\2\2\u01e5\u01e6\3\2\2\2\u01e6\u01e7"+
		"\bH\2\2\u01e7\u0091\3\2\2\2\u01e8\u01ec\7%\2\2\u01e9\u01eb\n\n\2\2\u01ea"+
		"\u01e9\3\2\2\2\u01eb\u01ee\3\2\2\2\u01ec\u01ea\3\2\2\2\u01ec\u01ed\3\2"+
		"\2\2\u01ed\u01ef\3\2\2\2\u01ee\u01ec\3\2\2\2\u01ef\u01f0\bI\2\2\u01f0"+
		"\u0093\3\2\2\2\u01f1\u01f3\t\13\2\2\u01f2\u01f1\3\2\2\2\u01f3\u01f4\3"+
		"\2\2\2\u01f4\u01f2\3\2\2\2\u01f4\u01f5\3\2\2\2\u01f5\u01f6\3\2\2\2\u01f6"+
		"\u01f7\bJ\2\2\u01f7\u0095\3\2\2\2\u01f8\u01f9\7>\2\2\u01f9\u01fa\7A\2"+
		"\2\u01fa\u01fb\7r\2\2\u01fb\u01fc\7j\2\2\u01fc\u01fd\7r\2\2\u01fd\u01fe"+
		"\3\2\2\2\u01fe\u01ff\bK\3\2\u01ff\u0200\bK\2\2\u0200\u0097\3\2\2\2\u0201"+
		"\u0205\n\f\2\2\u0202\u0203\7A\2\2\u0203\u0205\n\r\2\2\u0204\u0201\3\2"+
		"\2\2\u0204\u0202\3\2\2\2\u0205\u0206\3\2\2\2\u0206\u0204\3\2\2\2\u0206"+
		"\u0207\3\2\2\2\u0207\u0099\3\2\2\2\u0208\u0209\7A\2\2\u0209\u020a\7@\2"+
		"\2\u020a\u020b\3\2\2\2\u020b\u020c\bM\4\2\u020c\u020d\bM\2\2\u020d\u009b"+
		"\3\2\2\2\24\2\3\u01a5\u01ac\u01b2\u01b6\u01b8\u01bf\u01c2\u01cd\u01d0"+
		"\u01d5\u01d8\u01e0\u01ec\u01f4\u0204\u0206\5\b\2\2\7\3\2\6\2\2";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}