<?php

/*
 * Generated from SayParser.g4 by ANTLR 4.9
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class SayParser extends Parser
	{
		public const IMPORT = 1, SAY = 2, SAYNL = 3, DEBUG = 4, ASK = 5, DOT = 6, 
               COMMA = 7, DOTDOT = 8, COLON = 9, INF = 10, PO = 11, PC = 12, 
               CBO = 13, CBC = 14, SBO = 15, SBC = 16, ARROW = 17, DOLLAR = 18, 
               IF = 19, THEN = 20, ELSE = 21, EACH = 22, WHILE = 23, DO = 24, 
               AS = 25, CONTINUE = 26, RETURN = 27, BREAK = 28, EQUALS = 29, 
               EXCLAMATION_EQUALS = 30, ABO = 31, ABC = 32, ABO_EQUALS = 33, 
               ABC_EQUALS = 34, KINDA = 35, PLUS = 36, MINUS = 37, STAR = 38, 
               FSLASH = 39, PERCENTAGE = 40, CARET = 41, AMPERSAND = 42, 
               UNION = 43, INTERSECTION = 44, DIFFERENCE = 45, AND = 46, 
               OR = 47, EXCLAMATION = 48, QUESTION = 49, FSLASH_QUESTION = 50, 
               ASSIGN_QUESTION = 51, ASSIGN_PLUS = 52, ASSIGN_MINUS = 53, 
               ASSIGN_STAR = 54, ASSIGN_FSLASH = 55, ONLY = 56, EXCEPT = 57, 
               MAP = 58, APPLY = 59, MACRO = 60, ASSIGN = 61, FIRST = 62, 
               NEXT = 63, LAST = 64, TABLE = 65, STRING = 66, INTEGER = 67, 
               FLOAT = 68, BOOLEAN = 69, IDENTIFIER = 70, BLOCK_COMMENT = 71, 
               LINE_COMMENT = 72, WS = 73, PHP_OPEN_TAG = 74, RAW_PHP = 75, 
               PHP_CLOSE_TAG = 76;

		public const RULE_top = 0, RULE_import_statement = 1, RULE_expression = 2, 
               RULE_table_header = 3, RULE_table_row = 4, RULE_macro_param = 5, 
               RULE_param_list = 6, RULE_function_param = 7, RULE_array_init = 8, 
               RULE_each_aliases = 9, RULE_map_init = 10, RULE_map_pair = 11, 
               RULE_iterables_indexes = 12, RULE_index_helper = 13, RULE_closed_range = 14, 
               RULE_open_range = 15, RULE_expression_list = 16, RULE_arg_list = 17, 
               RULE_arg = 18, RULE_argPlaceholder = 19, RULE_then_body = 20, 
               RULE_else_body = 21, RULE_each_body = 22, RULE_while_body = 23, 
               RULE_do_body = 24;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'top', 'import_statement', 'expression', 'table_header', 'table_row', 
			'macro_param', 'param_list', 'function_param', 'array_init', 'each_aliases', 
			'map_init', 'map_pair', 'iterables_indexes', 'index_helper', 'closed_range', 
			'open_range', 'expression_list', 'arg_list', 'arg', 'argPlaceholder', 
			'then_body', 'else_body', 'each_body', 'while_body', 'do_body'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'import'", "'say'", "'sayNL'", "'debug'", "'ask'", "'.'", "','", 
		    "'..'", "':'", "'inf'", "'('", "')'", "'{'", "'}'", "'['", "']'", 
		    "'->'", "'\$'", "'if'", "'then'", "'else'", "'each'", "'while'", "'do'", 
		    "'as'", "'continue'", "'return'", "'break'", "'='", "'!='", "'>'", 
		    "'<'", "'>='", "'<='", "'kinda'", "'+'", "'-'", "'*'", "'/'", "'%'", 
		    "'^'", "'&'", "'union'", "'intersection'", "'difference'", "'and'", 
		    "'or'", "'!'", "'?'", "'/?'", "'<<&'", "'<<+'", "'<<-'", "'<</'", 
		    "'<<*'", "'only'", "'except'", "'map'", "'apply'", "'macro'", "'<<'", 
		    "'first'", "'next'", "'last'", "'table'", null, null, null, null, 
		    null, null, null, null, "'<?php'", null, "'?>'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "IMPORT", "SAY", "SAYNL", "DEBUG", "ASK", "DOT", "COMMA", "DOTDOT", 
		    "COLON", "INF", "PO", "PC", "CBO", "CBC", "SBO", "SBC", "ARROW", "DOLLAR", 
		    "IF", "THEN", "ELSE", "EACH", "WHILE", "DO", "AS", "CONTINUE", "RETURN", 
		    "BREAK", "EQUALS", "EXCLAMATION_EQUALS", "ABO", "ABC", "ABO_EQUALS", 
		    "ABC_EQUALS", "KINDA", "PLUS", "MINUS", "STAR", "FSLASH", "PERCENTAGE", 
		    "CARET", "AMPERSAND", "UNION", "INTERSECTION", "DIFFERENCE", "AND", 
		    "OR", "EXCLAMATION", "QUESTION", "FSLASH_QUESTION", "ASSIGN_QUESTION", 
		    "ASSIGN_PLUS", "ASSIGN_MINUS", "ASSIGN_STAR", "ASSIGN_FSLASH", "ONLY", 
		    "EXCEPT", "MAP", "APPLY", "MACRO", "ASSIGN", "FIRST", "NEXT", "LAST", 
		    "TABLE", "STRING", "INTEGER", "FLOAT", "BOOLEAN", "IDENTIFIER", "BLOCK_COMMENT", 
		    "LINE_COMMENT", "WS", "PHP_OPEN_TAG", "RAW_PHP", "PHP_CLOSE_TAG"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{3}\u{4E}\u{185}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{4}\u{4}" .
		    "\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}\u{7}\u{9}" .
		    "\u{7}\u{4}\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}\u{9}\u{A}" .
		    "\u{4}\u{B}\u{9}\u{B}\u{4}\u{C}\u{9}\u{C}\u{4}\u{D}\u{9}\u{D}\u{4}" .
		    "\u{E}\u{9}\u{E}\u{4}\u{F}\u{9}\u{F}\u{4}\u{10}\u{9}\u{10}\u{4}\u{11}" .
		    "\u{9}\u{11}\u{4}\u{12}\u{9}\u{12}\u{4}\u{13}\u{9}\u{13}\u{4}\u{14}" .
		    "\u{9}\u{14}\u{4}\u{15}\u{9}\u{15}\u{4}\u{16}\u{9}\u{16}\u{4}\u{17}" .
		    "\u{9}\u{17}\u{4}\u{18}\u{9}\u{18}\u{4}\u{19}\u{9}\u{19}\u{4}\u{1A}" .
		    "\u{9}\u{1A}\u{3}\u{2}\u{7}\u{2}\u{36}\u{A}\u{2}\u{C}\u{2}\u{E}\u{2}" .
		    "\u{39}\u{B}\u{2}\u{3}\u{2}\u{7}\u{2}\u{3C}\u{A}\u{2}\u{C}\u{2}\u{E}" .
		    "\u{2}\u{3F}\u{B}\u{2}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{4}\u{3}" .
		    "\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{5}\u{4}\u{51}" .
		    "\u{A}\u{4}\u{3}\u{4}\u{3}\u{4}\u{6}\u{4}\u{55}\u{A}\u{4}\u{D}\u{4}" .
		    "\u{E}\u{4}\u{56}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{4}\u{5}\u{4}\u{5F}\u{A}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{4}\u{3}\u{4}\u{5}\u{4}\u{66}\u{A}\u{4}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}" .
		    "\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{5}\u{4}\u{74}\u{A}\u{4}\u{6}" .
		    "\u{4}\u{76}\u{A}\u{4}\u{D}\u{4}\u{E}\u{4}\u{77}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{6}\u{4}\u{7C}\u{A}\u{4}\u{D}\u{4}\u{E}\u{4}\u{7D}\u{3}\u{4}\u{3}" .
		    "\u{4}\u{7}\u{4}\u{82}\u{A}\u{4}\u{C}\u{4}\u{E}\u{4}\u{85}\u{B}\u{4}" .
		    "\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{5}\u{4}\u{8A}\u{A}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}" .
		    "\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{6}\u{4}\u{9D}\u{A}\u{4}\u{D}\u{4}" .
		    "\u{E}\u{4}\u{9E}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{6}\u{4}\u{A6}\u{A}\u{4}\u{D}\u{4}\u{E}\u{4}\u{A7}\u{3}\u{4}\u{3}" .
		    "\u{4}\u{5}\u{4}\u{AC}\u{A}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}" .
		    "\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}" .
		    "\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{5}" .
		    "\u{4}\u{CB}\u{A}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{5}" .
		    "\u{4}\u{D1}\u{A}\u{4}\u{3}\u{4}\u{5}\u{4}\u{D4}\u{A}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}" .
		    "\u{4}\u{3}\u{4}\u{3}\u{4}\u{7}\u{4}\u{E0}\u{A}\u{4}\u{C}\u{4}\u{E}" .
		    "\u{4}\u{E3}\u{B}\u{4}\u{3}\u{5}\u{3}\u{5}\u{7}\u{5}\u{E7}\u{A}\u{5}" .
		    "\u{C}\u{5}\u{E}\u{5}\u{EA}\u{B}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{6}" .
		    "\u{3}\u{6}\u{7}\u{6}\u{F0}\u{A}\u{6}\u{C}\u{6}\u{E}\u{6}\u{F3}\u{B}" .
		    "\u{6}\u{3}\u{6}\u{3}\u{6}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}" .
		    "\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{7}\u{8}\u{FE}\u{A}\u{8}\u{C}\u{8}" .
		    "\u{E}\u{8}\u{101}\u{B}\u{8}\u{3}\u{8}\u{5}\u{8}\u{104}\u{A}\u{8}\u{3}" .
		    "\u{9}\u{3}\u{9}\u{3}\u{9}\u{5}\u{9}\u{109}\u{A}\u{9}\u{3}\u{A}\u{5}" .
		    "\u{A}\u{10C}\u{A}\u{A}\u{3}\u{A}\u{3}\u{A}\u{7}\u{A}\u{110}\u{A}\u{A}" .
		    "\u{C}\u{A}\u{E}\u{A}\u{113}\u{B}\u{A}\u{3}\u{A}\u{5}\u{A}\u{116}\u{A}" .
		    "\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{5}\u{A}" .
		    "\u{11D}\u{A}\u{A}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{5}\u{B}" .
		    "\u{123}\u{A}\u{B}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{7}\u{C}\u{128}\u{A}" .
		    "\u{C}\u{C}\u{C}\u{E}\u{C}\u{12B}\u{B}\u{C}\u{3}\u{C}\u{5}\u{C}\u{12E}" .
		    "\u{A}\u{C}\u{3}\u{C}\u{5}\u{C}\u{131}\u{A}\u{C}\u{3}\u{D}\u{3}\u{D}" .
		    "\u{3}\u{D}\u{3}\u{D}\u{3}\u{E}\u{3}\u{E}\u{3}\u{E}\u{7}\u{E}\u{13A}" .
		    "\u{A}\u{E}\u{C}\u{E}\u{E}\u{E}\u{13D}\u{B}\u{E}\u{3}\u{E}\u{5}\u{E}" .
		    "\u{140}\u{A}\u{E}\u{3}\u{E}\u{3}\u{E}\u{5}\u{E}\u{144}\u{A}\u{E}\u{3}" .
		    "\u{E}\u{5}\u{E}\u{147}\u{A}\u{E}\u{3}\u{F}\u{3}\u{F}\u{3}\u{10}\u{3}" .
		    "\u{10}\u{3}\u{10}\u{3}\u{10}\u{3}\u{11}\u{3}\u{11}\u{3}\u{11}\u{3}" .
		    "\u{11}\u{3}\u{11}\u{5}\u{11}\u{154}\u{A}\u{11}\u{3}\u{12}\u{3}\u{12}" .
		    "\u{3}\u{12}\u{7}\u{12}\u{159}\u{A}\u{12}\u{C}\u{12}\u{E}\u{12}\u{15C}" .
		    "\u{B}\u{12}\u{3}\u{13}\u{3}\u{13}\u{3}\u{13}\u{7}\u{13}\u{161}\u{A}" .
		    "\u{13}\u{C}\u{13}\u{E}\u{13}\u{164}\u{B}\u{13}\u{3}\u{14}\u{3}\u{14}" .
		    "\u{5}\u{14}\u{168}\u{A}\u{14}\u{3}\u{15}\u{3}\u{15}\u{3}\u{16}\u{6}" .
		    "\u{16}\u{16D}\u{A}\u{16}\u{D}\u{16}\u{E}\u{16}\u{16E}\u{3}\u{17}\u{6}" .
		    "\u{17}\u{172}\u{A}\u{17}\u{D}\u{17}\u{E}\u{17}\u{173}\u{3}\u{18}\u{6}" .
		    "\u{18}\u{177}\u{A}\u{18}\u{D}\u{18}\u{E}\u{18}\u{178}\u{3}\u{19}\u{6}" .
		    "\u{19}\u{17C}\u{A}\u{19}\u{D}\u{19}\u{E}\u{19}\u{17D}\u{3}\u{1A}\u{6}" .
		    "\u{1A}\u{181}\u{A}\u{1A}\u{D}\u{1A}\u{E}\u{1A}\u{182}\u{3}\u{1A}\u{2}" .
		    "\u{3}\u{6}\u{1B}\u{2}\u{4}\u{6}\u{8}\u{A}\u{C}\u{E}\u{10}\u{12}\u{14}" .
		    "\u{16}\u{18}\u{1A}\u{1C}\u{1E}\u{20}\u{22}\u{24}\u{26}\u{28}\u{2A}" .
		    "\u{2C}\u{2E}\u{30}\u{32}\u{2}\u{A}\u{3}\u{2}\u{44}\u{47}\u{3}\u{2}" .
		    "\u{28}\u{2A}\u{3}\u{2}\u{26}\u{27}\u{5}\u{2}\u{1F}\u{25}\u{2C}\u{2F}" .
		    "\u{34}\u{39}\u{3}\u{2}\u{30}\u{31}\u{3}\u{2}\u{3A}\u{3D}\u{5}\u{2}" .
		    "\u{26}\u{29}\u{2C}\u{2C}\u{30}\u{33}\u{3}\u{2}\u{40}\u{42}\u{2}\u{1B9}" .
		    "\u{2}\u{37}\u{3}\u{2}\u{2}\u{2}\u{4}\u{40}\u{3}\u{2}\u{2}\u{2}\u{6}" .
		    "\u{AB}\u{3}\u{2}\u{2}\u{2}\u{8}\u{E4}\u{3}\u{2}\u{2}\u{2}\u{A}\u{ED}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{C}\u{F6}\u{3}\u{2}\u{2}\u{2}\u{E}\u{FA}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{10}\u{105}\u{3}\u{2}\u{2}\u{2}\u{12}\u{11C}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{14}\u{11E}\u{3}\u{2}\u{2}\u{2}\u{16}\u{130}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{18}\u{132}\u{3}\u{2}\u{2}\u{2}\u{1A}\u{146}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{1C}\u{148}\u{3}\u{2}\u{2}\u{2}\u{1E}\u{14A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{20}\u{153}\u{3}\u{2}\u{2}\u{2}\u{22}\u{155}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{24}\u{15D}\u{3}\u{2}\u{2}\u{2}\u{26}\u{167}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{28}\u{169}\u{3}\u{2}\u{2}\u{2}\u{2A}\u{16C}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2C}\u{171}\u{3}\u{2}\u{2}\u{2}\u{2E}\u{176}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{30}\u{17B}\u{3}\u{2}\u{2}\u{2}\u{32}\u{180}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{34}\u{36}\u{5}\u{4}\u{3}\u{2}\u{35}\u{34}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{36}\u{39}\u{3}\u{2}\u{2}\u{2}\u{37}\u{35}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{37}\u{38}\u{3}\u{2}\u{2}\u{2}\u{38}\u{3D}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{39}\u{37}\u{3}\u{2}\u{2}\u{2}\u{3A}\u{3C}\u{5}\u{6}\u{4}\u{2}\u{3B}" .
		    "\u{3A}\u{3}\u{2}\u{2}\u{2}\u{3C}\u{3F}\u{3}\u{2}\u{2}\u{2}\u{3D}\u{3B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{3D}\u{3E}\u{3}\u{2}\u{2}\u{2}\u{3E}\u{3}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{3F}\u{3D}\u{3}\u{2}\u{2}\u{2}\u{40}\u{41}\u{7}\u{3}" .
		    "\u{2}\u{2}\u{41}\u{42}\u{7}\u{44}\u{2}\u{2}\u{42}\u{5}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{43}\u{44}\u{8}\u{4}\u{1}\u{2}\u{44}\u{AC}\u{7}\u{48}\u{2}" .
		    "\u{2}\u{45}\u{AC}\u{7}\u{14}\u{2}\u{2}\u{46}\u{AC}\u{9}\u{2}\u{2}" .
		    "\u{2}\u{47}\u{48}\u{7}\u{11}\u{2}\u{2}\u{48}\u{49}\u{5}\u{12}\u{A}" .
		    "\u{2}\u{49}\u{4A}\u{7}\u{12}\u{2}\u{2}\u{4A}\u{AC}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{4B}\u{4C}\u{7}\u{11}\u{2}\u{2}\u{4C}\u{4D}\u{5}\u{16}\u{C}" .
		    "\u{2}\u{4D}\u{4E}\u{7}\u{12}\u{2}\u{2}\u{4E}\u{AC}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{4F}\u{51}\u{5}\u{E}\u{8}\u{2}\u{50}\u{4F}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{50}\u{51}\u{3}\u{2}\u{2}\u{2}\u{51}\u{52}\u{3}\u{2}\u{2}\u{2}\u{52}" .
		    "\u{54}\u{7}\u{13}\u{2}\u{2}\u{53}\u{55}\u{5}\u{6}\u{4}\u{2}\u{54}" .
		    "\u{53}\u{3}\u{2}\u{2}\u{2}\u{55}\u{56}\u{3}\u{2}\u{2}\u{2}\u{56}\u{54}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{56}\u{57}\u{3}\u{2}\u{2}\u{2}\u{57}\u{AC}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{58}\u{59}\u{7}\u{15}\u{2}\u{2}\u{59}\u{5A}\u{5}" .
		    "\u{6}\u{4}\u{2}\u{5A}\u{5B}\u{7}\u{16}\u{2}\u{2}\u{5B}\u{5E}\u{5}" .
		    "\u{2A}\u{16}\u{2}\u{5C}\u{5D}\u{7}\u{17}\u{2}\u{2}\u{5D}\u{5F}\u{5}" .
		    "\u{2C}\u{17}\u{2}\u{5E}\u{5C}\u{3}\u{2}\u{2}\u{2}\u{5E}\u{5F}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{5F}\u{AC}\u{3}\u{2}\u{2}\u{2}\u{60}\u{61}\u{7}\u{32}" .
		    "\u{2}\u{2}\u{61}\u{AC}\u{5}\u{6}\u{4}\u{16}\u{62}\u{AC}\u{7}\u{1C}" .
		    "\u{2}\u{2}\u{63}\u{65}\u{7}\u{1D}\u{2}\u{2}\u{64}\u{66}\u{5}\u{6}" .
		    "\u{4}\u{2}\u{65}\u{64}\u{3}\u{2}\u{2}\u{2}\u{65}\u{66}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{66}\u{AC}\u{3}\u{2}\u{2}\u{2}\u{67}\u{AC}\u{7}\u{1E}\u{2}" .
		    "\u{2}\u{68}\u{69}\u{7}\u{4}\u{2}\u{2}\u{69}\u{AC}\u{5}\u{6}\u{4}\u{F}" .
		    "\u{6A}\u{6B}\u{7}\u{5}\u{2}\u{2}\u{6B}\u{AC}\u{5}\u{6}\u{4}\u{E}\u{6C}" .
		    "\u{6D}\u{7}\u{6}\u{2}\u{2}\u{6D}\u{AC}\u{5}\u{6}\u{4}\u{D}\u{6E}\u{6F}" .
		    "\u{7}\u{7}\u{2}\u{2}\u{6F}\u{AC}\u{5}\u{6}\u{4}\u{C}\u{70}\u{75}\u{7}" .
		    "\u{3E}\u{2}\u{2}\u{71}\u{73}\u{7}\u{48}\u{2}\u{2}\u{72}\u{74}\u{5}" .
		    "\u{C}\u{7}\u{2}\u{73}\u{72}\u{3}\u{2}\u{2}\u{2}\u{73}\u{74}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{74}\u{76}\u{3}\u{2}\u{2}\u{2}\u{75}\u{71}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{76}\u{77}\u{3}\u{2}\u{2}\u{2}\u{77}\u{75}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{77}\u{78}\u{3}\u{2}\u{2}\u{2}\u{78}\u{79}\u{3}\u{2}\u{2}\u{2}\u{79}" .
		    "\u{7B}\u{7}\u{13}\u{2}\u{2}\u{7A}\u{7C}\u{5}\u{6}\u{4}\u{2}\u{7B}" .
		    "\u{7A}\u{3}\u{2}\u{2}\u{2}\u{7C}\u{7D}\u{3}\u{2}\u{2}\u{2}\u{7D}\u{7B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{7D}\u{7E}\u{3}\u{2}\u{2}\u{2}\u{7E}\u{AC}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{7F}\u{83}\u{7}\u{3E}\u{2}\u{2}\u{80}\u{82}\u{5}" .
		    "\u{6}\u{4}\u{2}\u{81}\u{80}\u{3}\u{2}\u{2}\u{2}\u{82}\u{85}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{83}\u{81}\u{3}\u{2}\u{2}\u{2}\u{83}\u{84}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{84}\u{AC}\u{3}\u{2}\u{2}\u{2}\u{85}\u{83}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{86}\u{87}\u{7}\u{18}\u{2}\u{2}\u{87}\u{89}\u{5}\u{6}\u{4}\u{2}" .
		    "\u{88}\u{8A}\u{5}\u{14}\u{B}\u{2}\u{89}\u{88}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{89}\u{8A}\u{3}\u{2}\u{2}\u{2}\u{8A}\u{8B}\u{3}\u{2}\u{2}\u{2}\u{8B}" .
		    "\u{8C}\u{5}\u{2E}\u{18}\u{2}\u{8C}\u{AC}\u{3}\u{2}\u{2}\u{2}\u{8D}" .
		    "\u{8E}\u{7}\u{19}\u{2}\u{2}\u{8E}\u{8F}\u{5}\u{6}\u{4}\u{2}\u{8F}" .
		    "\u{90}\u{7}\u{1A}\u{2}\u{2}\u{90}\u{91}\u{5}\u{30}\u{19}\u{2}\u{91}" .
		    "\u{AC}\u{3}\u{2}\u{2}\u{2}\u{92}\u{93}\u{7}\u{1A}\u{2}\u{2}\u{93}" .
		    "\u{94}\u{5}\u{32}\u{1A}\u{2}\u{94}\u{95}\u{7}\u{19}\u{2}\u{2}\u{95}" .
		    "\u{96}\u{5}\u{6}\u{4}\u{7}\u{96}\u{AC}\u{3}\u{2}\u{2}\u{2}\u{97}\u{98}" .
		    "\u{7}\u{D}\u{2}\u{2}\u{98}\u{99}\u{5}\u{6}\u{4}\u{2}\u{99}\u{9A}\u{7}" .
		    "\u{E}\u{2}\u{2}\u{9A}\u{AC}\u{3}\u{2}\u{2}\u{2}\u{9B}\u{9D}\u{7}\u{4D}" .
		    "\u{2}\u{2}\u{9C}\u{9B}\u{3}\u{2}\u{2}\u{2}\u{9D}\u{9E}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{9E}\u{9C}\u{3}\u{2}\u{2}\u{2}\u{9E}\u{9F}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{9F}\u{AC}\u{3}\u{2}\u{2}\u{2}\u{A0}\u{A1}\u{7}\u{43}\u{2}\u{2}" .
		    "\u{A1}\u{A2}\u{7}\u{48}\u{2}\u{2}\u{A2}\u{A3}\u{7}\u{F}\u{2}\u{2}" .
		    "\u{A3}\u{A5}\u{5}\u{8}\u{5}\u{2}\u{A4}\u{A6}\u{5}\u{A}\u{6}\u{2}\u{A5}" .
		    "\u{A4}\u{3}\u{2}\u{2}\u{2}\u{A6}\u{A7}\u{3}\u{2}\u{2}\u{2}\u{A7}\u{A5}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{A7}\u{A8}\u{3}\u{2}\u{2}\u{2}\u{A8}\u{A9}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{A9}\u{AA}\u{7}\u{10}\u{2}\u{2}\u{AA}\u{AC}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{AB}\u{43}\u{3}\u{2}\u{2}\u{2}\u{AB}\u{45}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{AB}\u{46}\u{3}\u{2}\u{2}\u{2}\u{AB}\u{47}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{AB}\u{4B}\u{3}\u{2}\u{2}\u{2}\u{AB}\u{50}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{AB}\u{58}\u{3}\u{2}\u{2}\u{2}\u{AB}\u{60}\u{3}\u{2}\u{2}\u{2}\u{AB}" .
		    "\u{62}\u{3}\u{2}\u{2}\u{2}\u{AB}\u{63}\u{3}\u{2}\u{2}\u{2}\u{AB}\u{67}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{AB}\u{68}\u{3}\u{2}\u{2}\u{2}\u{AB}\u{6A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{AB}\u{6C}\u{3}\u{2}\u{2}\u{2}\u{AB}\u{6E}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{AB}\u{70}\u{3}\u{2}\u{2}\u{2}\u{AB}\u{7F}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{AB}\u{86}\u{3}\u{2}\u{2}\u{2}\u{AB}\u{8D}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{AB}\u{92}\u{3}\u{2}\u{2}\u{2}\u{AB}\u{97}\u{3}\u{2}\u{2}\u{2}\u{AB}" .
		    "\u{9C}\u{3}\u{2}\u{2}\u{2}\u{AB}\u{A0}\u{3}\u{2}\u{2}\u{2}\u{AC}\u{E1}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{AD}\u{AE}\u{C}\u{1A}\u{2}\u{2}\u{AE}\u{AF}" .
		    "\u{7}\u{2B}\u{2}\u{2}\u{AF}\u{E0}\u{5}\u{6}\u{4}\u{1B}\u{B0}\u{B1}" .
		    "\u{C}\u{19}\u{2}\u{2}\u{B1}\u{B2}\u{9}\u{3}\u{2}\u{2}\u{B2}\u{E0}" .
		    "\u{5}\u{6}\u{4}\u{1A}\u{B3}\u{B4}\u{C}\u{18}\u{2}\u{2}\u{B4}\u{B5}" .
		    "\u{9}\u{4}\u{2}\u{2}\u{B5}\u{E0}\u{5}\u{6}\u{4}\u{19}\u{B6}\u{B7}" .
		    "\u{C}\u{17}\u{2}\u{2}\u{B7}\u{B8}\u{9}\u{5}\u{2}\u{2}\u{B8}\u{E0}" .
		    "\u{5}\u{6}\u{4}\u{18}\u{B9}\u{BA}\u{C}\u{14}\u{2}\u{2}\u{BA}\u{BB}" .
		    "\u{9}\u{6}\u{2}\u{2}\u{BB}\u{E0}\u{5}\u{6}\u{4}\u{15}\u{BC}\u{BD}" .
		    "\u{C}\u{13}\u{2}\u{2}\u{BD}\u{BE}\u{9}\u{7}\u{2}\u{2}\u{BE}\u{E0}" .
		    "\u{5}\u{6}\u{4}\u{14}\u{BF}\u{C0}\u{C}\u{6}\u{2}\u{2}\u{C0}\u{C1}" .
		    "\u{7}\u{3F}\u{2}\u{2}\u{C1}\u{E0}\u{5}\u{6}\u{4}\u{6}\u{C2}\u{C3}" .
		    "\u{C}\u{25}\u{2}\u{2}\u{C3}\u{C4}\u{7}\u{8}\u{2}\u{2}\u{C4}\u{C5}" .
		    "\u{7}\u{48}\u{2}\u{2}\u{C5}\u{CA}\u{7}\u{B}\u{2}\u{2}\u{C6}\u{C7}" .
		    "\u{7}\u{11}\u{2}\u{2}\u{C7}\u{C8}\u{5}\u{24}\u{13}\u{2}\u{C8}\u{C9}" .
		    "\u{7}\u{12}\u{2}\u{2}\u{C9}\u{CB}\u{3}\u{2}\u{2}\u{2}\u{CA}\u{C6}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{CA}\u{CB}\u{3}\u{2}\u{2}\u{2}\u{CB}\u{E0}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{CC}\u{CD}\u{C}\u{24}\u{2}\u{2}\u{CD}\u{D3}\u{7}" .
		    "\u{B}\u{2}\u{2}\u{CE}\u{D0}\u{7}\u{11}\u{2}\u{2}\u{CF}\u{D1}\u{5}" .
		    "\u{24}\u{13}\u{2}\u{D0}\u{CF}\u{3}\u{2}\u{2}\u{2}\u{D0}\u{D1}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{D1}\u{D2}\u{3}\u{2}\u{2}\u{2}\u{D2}\u{D4}\u{7}\u{12}" .
		    "\u{2}\u{2}\u{D3}\u{CE}\u{3}\u{2}\u{2}\u{2}\u{D3}\u{D4}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{D4}\u{E0}\u{3}\u{2}\u{2}\u{2}\u{D5}\u{D6}\u{C}\u{23}\u{2}" .
		    "\u{2}\u{D6}\u{D7}\u{7}\u{8}\u{2}\u{2}\u{D7}\u{E0}\u{7}\u{48}\u{2}" .
		    "\u{2}\u{D8}\u{D9}\u{C}\u{1C}\u{2}\u{2}\u{D9}\u{DA}\u{7}\u{11}\u{2}" .
		    "\u{2}\u{DA}\u{DB}\u{5}\u{1A}\u{E}\u{2}\u{DB}\u{DC}\u{7}\u{12}\u{2}" .
		    "\u{2}\u{DC}\u{E0}\u{3}\u{2}\u{2}\u{2}\u{DD}\u{DE}\u{C}\u{15}\u{2}" .
		    "\u{2}\u{DE}\u{E0}\u{9}\u{8}\u{2}\u{2}\u{DF}\u{AD}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{DF}\u{B0}\u{3}\u{2}\u{2}\u{2}\u{DF}\u{B3}\u{3}\u{2}\u{2}\u{2}\u{DF}" .
		    "\u{B6}\u{3}\u{2}\u{2}\u{2}\u{DF}\u{B9}\u{3}\u{2}\u{2}\u{2}\u{DF}\u{BC}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{DF}\u{BF}\u{3}\u{2}\u{2}\u{2}\u{DF}\u{C2}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{DF}\u{CC}\u{3}\u{2}\u{2}\u{2}\u{DF}\u{D5}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{DF}\u{D8}\u{3}\u{2}\u{2}\u{2}\u{DF}\u{DD}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{E0}\u{E3}\u{3}\u{2}\u{2}\u{2}\u{E1}\u{DF}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{E1}\u{E2}\u{3}\u{2}\u{2}\u{2}\u{E2}\u{7}\u{3}\u{2}\u{2}\u{2}\u{E3}" .
		    "\u{E1}\u{3}\u{2}\u{2}\u{2}\u{E4}\u{E8}\u{7}\u{D}\u{2}\u{2}\u{E5}\u{E7}" .
		    "\u{7}\u{48}\u{2}\u{2}\u{E6}\u{E5}\u{3}\u{2}\u{2}\u{2}\u{E7}\u{EA}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{E8}\u{E6}\u{3}\u{2}\u{2}\u{2}\u{E8}\u{E9}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{E9}\u{EB}\u{3}\u{2}\u{2}\u{2}\u{EA}\u{E8}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{EB}\u{EC}\u{7}\u{E}\u{2}\u{2}\u{EC}\u{9}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{ED}\u{F1}\u{7}\u{D}\u{2}\u{2}\u{EE}\u{F0}\u{5}\u{6}\u{4}\u{2}" .
		    "\u{EF}\u{EE}\u{3}\u{2}\u{2}\u{2}\u{F0}\u{F3}\u{3}\u{2}\u{2}\u{2}\u{F1}" .
		    "\u{EF}\u{3}\u{2}\u{2}\u{2}\u{F1}\u{F2}\u{3}\u{2}\u{2}\u{2}\u{F2}\u{F4}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{F3}\u{F1}\u{3}\u{2}\u{2}\u{2}\u{F4}\u{F5}\u{7}" .
		    "\u{E}\u{2}\u{2}\u{F5}\u{B}\u{3}\u{2}\u{2}\u{2}\u{F6}\u{F7}\u{7}\u{F}" .
		    "\u{2}\u{2}\u{F7}\u{F8}\u{7}\u{48}\u{2}\u{2}\u{F8}\u{F9}\u{7}\u{10}" .
		    "\u{2}\u{2}\u{F9}\u{D}\u{3}\u{2}\u{2}\u{2}\u{FA}\u{FF}\u{5}\u{10}\u{9}" .
		    "\u{2}\u{FB}\u{FC}\u{7}\u{9}\u{2}\u{2}\u{FC}\u{FE}\u{5}\u{10}\u{9}" .
		    "\u{2}\u{FD}\u{FB}\u{3}\u{2}\u{2}\u{2}\u{FE}\u{101}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{FF}\u{FD}\u{3}\u{2}\u{2}\u{2}\u{FF}\u{100}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{100}\u{103}\u{3}\u{2}\u{2}\u{2}\u{101}\u{FF}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{102}\u{104}\u{7}\u{9}\u{2}\u{2}\u{103}\u{102}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{103}\u{104}\u{3}\u{2}\u{2}\u{2}\u{104}\u{F}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{105}\u{108}\u{7}\u{48}\u{2}\u{2}\u{106}\u{107}\u{7}\u{3F}" .
		    "\u{2}\u{2}\u{107}\u{109}\u{5}\u{6}\u{4}\u{2}\u{108}\u{106}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{108}\u{109}\u{3}\u{2}\u{2}\u{2}\u{109}\u{11}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{10A}\u{10C}\u{5}\u{6}\u{4}\u{2}\u{10B}\u{10A}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{10B}\u{10C}\u{3}\u{2}\u{2}\u{2}\u{10C}\u{111}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{10D}\u{10E}\u{7}\u{9}\u{2}\u{2}\u{10E}\u{110}\u{5}\u{6}" .
		    "\u{4}\u{2}\u{10F}\u{10D}\u{3}\u{2}\u{2}\u{2}\u{110}\u{113}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{111}\u{10F}\u{3}\u{2}\u{2}\u{2}\u{111}\u{112}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{112}\u{115}\u{3}\u{2}\u{2}\u{2}\u{113}\u{111}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{114}\u{116}\u{7}\u{9}\u{2}\u{2}\u{115}\u{114}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{115}\u{116}\u{3}\u{2}\u{2}\u{2}\u{116}\u{11D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{117}\u{11D}\u{5}\u{1E}\u{10}\u{2}\u{118}\u{119}\u{5}" .
		    "\u{6}\u{4}\u{2}\u{119}\u{11A}\u{7}\u{A}\u{2}\u{2}\u{11A}\u{11B}\u{7}" .
		    "\u{C}\u{2}\u{2}\u{11B}\u{11D}\u{3}\u{2}\u{2}\u{2}\u{11C}\u{10B}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{11C}\u{117}\u{3}\u{2}\u{2}\u{2}\u{11C}\u{118}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{11D}\u{13}\u{3}\u{2}\u{2}\u{2}\u{11E}\u{11F}\u{7}" .
		    "\u{1B}\u{2}\u{2}\u{11F}\u{122}\u{7}\u{48}\u{2}\u{2}\u{120}\u{121}" .
		    "\u{7}\u{13}\u{2}\u{2}\u{121}\u{123}\u{7}\u{48}\u{2}\u{2}\u{122}\u{120}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{122}\u{123}\u{3}\u{2}\u{2}\u{2}\u{123}\u{15}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{124}\u{129}\u{5}\u{18}\u{D}\u{2}\u{125}\u{126}" .
		    "\u{7}\u{9}\u{2}\u{2}\u{126}\u{128}\u{5}\u{18}\u{D}\u{2}\u{127}\u{125}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{128}\u{12B}\u{3}\u{2}\u{2}\u{2}\u{129}\u{127}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{129}\u{12A}\u{3}\u{2}\u{2}\u{2}\u{12A}\u{12D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{12B}\u{129}\u{3}\u{2}\u{2}\u{2}\u{12C}\u{12E}" .
		    "\u{7}\u{9}\u{2}\u{2}\u{12D}\u{12C}\u{3}\u{2}\u{2}\u{2}\u{12D}\u{12E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{12E}\u{131}\u{3}\u{2}\u{2}\u{2}\u{12F}\u{131}" .
		    "\u{7}\u{13}\u{2}\u{2}\u{130}\u{124}\u{3}\u{2}\u{2}\u{2}\u{130}\u{12F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{131}\u{17}\u{3}\u{2}\u{2}\u{2}\u{132}\u{133}" .
		    "\u{7}\u{44}\u{2}\u{2}\u{133}\u{134}\u{7}\u{13}\u{2}\u{2}\u{134}\u{135}" .
		    "\u{5}\u{6}\u{4}\u{2}\u{135}\u{19}\u{3}\u{2}\u{2}\u{2}\u{136}\u{13B}" .
		    "\u{5}\u{6}\u{4}\u{2}\u{137}\u{138}\u{7}\u{9}\u{2}\u{2}\u{138}\u{13A}" .
		    "\u{5}\u{6}\u{4}\u{2}\u{139}\u{137}\u{3}\u{2}\u{2}\u{2}\u{13A}\u{13D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{13B}\u{139}\u{3}\u{2}\u{2}\u{2}\u{13B}\u{13C}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{13C}\u{13F}\u{3}\u{2}\u{2}\u{2}\u{13D}\u{13B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{13E}\u{140}\u{7}\u{9}\u{2}\u{2}\u{13F}\u{13E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{13F}\u{140}\u{3}\u{2}\u{2}\u{2}\u{140}\u{147}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{141}\u{144}\u{5}\u{20}\u{11}\u{2}\u{142}\u{144}" .
		    "\u{5}\u{1E}\u{10}\u{2}\u{143}\u{141}\u{3}\u{2}\u{2}\u{2}\u{143}\u{142}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{144}\u{147}\u{3}\u{2}\u{2}\u{2}\u{145}\u{147}" .
		    "\u{5}\u{1C}\u{F}\u{2}\u{146}\u{136}\u{3}\u{2}\u{2}\u{2}\u{146}\u{143}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{146}\u{145}\u{3}\u{2}\u{2}\u{2}\u{147}\u{1B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{148}\u{149}\u{9}\u{9}\u{2}\u{2}\u{149}\u{1D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{14A}\u{14B}\u{5}\u{6}\u{4}\u{2}\u{14B}\u{14C}" .
		    "\u{7}\u{A}\u{2}\u{2}\u{14C}\u{14D}\u{5}\u{6}\u{4}\u{2}\u{14D}\u{1F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{14E}\u{14F}\u{5}\u{6}\u{4}\u{2}\u{14F}\u{150}" .
		    "\u{7}\u{A}\u{2}\u{2}\u{150}\u{154}\u{3}\u{2}\u{2}\u{2}\u{151}\u{152}" .
		    "\u{7}\u{A}\u{2}\u{2}\u{152}\u{154}\u{5}\u{6}\u{4}\u{2}\u{153}\u{14E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{153}\u{151}\u{3}\u{2}\u{2}\u{2}\u{154}\u{21}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{155}\u{15A}\u{5}\u{6}\u{4}\u{2}\u{156}\u{157}" .
		    "\u{7}\u{9}\u{2}\u{2}\u{157}\u{159}\u{5}\u{6}\u{4}\u{2}\u{158}\u{156}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{159}\u{15C}\u{3}\u{2}\u{2}\u{2}\u{15A}\u{158}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{15A}\u{15B}\u{3}\u{2}\u{2}\u{2}\u{15B}\u{23}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{15C}\u{15A}\u{3}\u{2}\u{2}\u{2}\u{15D}\u{162}" .
		    "\u{5}\u{26}\u{14}\u{2}\u{15E}\u{15F}\u{7}\u{9}\u{2}\u{2}\u{15F}\u{161}" .
		    "\u{5}\u{26}\u{14}\u{2}\u{160}\u{15E}\u{3}\u{2}\u{2}\u{2}\u{161}\u{164}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{162}\u{160}\u{3}\u{2}\u{2}\u{2}\u{162}\u{163}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{163}\u{25}\u{3}\u{2}\u{2}\u{2}\u{164}\u{162}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{165}\u{168}\u{5}\u{6}\u{4}\u{2}\u{166}\u{168}" .
		    "\u{5}\u{28}\u{15}\u{2}\u{167}\u{165}\u{3}\u{2}\u{2}\u{2}\u{167}\u{166}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{168}\u{27}\u{3}\u{2}\u{2}\u{2}\u{169}\u{16A}" .
		    "\u{7}\u{33}\u{2}\u{2}\u{16A}\u{29}\u{3}\u{2}\u{2}\u{2}\u{16B}\u{16D}" .
		    "\u{5}\u{6}\u{4}\u{2}\u{16C}\u{16B}\u{3}\u{2}\u{2}\u{2}\u{16D}\u{16E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{16E}\u{16C}\u{3}\u{2}\u{2}\u{2}\u{16E}\u{16F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{16F}\u{2B}\u{3}\u{2}\u{2}\u{2}\u{170}\u{172}" .
		    "\u{5}\u{6}\u{4}\u{2}\u{171}\u{170}\u{3}\u{2}\u{2}\u{2}\u{172}\u{173}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{173}\u{171}\u{3}\u{2}\u{2}\u{2}\u{173}\u{174}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{174}\u{2D}\u{3}\u{2}\u{2}\u{2}\u{175}\u{177}" .
		    "\u{5}\u{6}\u{4}\u{2}\u{176}\u{175}\u{3}\u{2}\u{2}\u{2}\u{177}\u{178}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{178}\u{176}\u{3}\u{2}\u{2}\u{2}\u{178}\u{179}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{179}\u{2F}\u{3}\u{2}\u{2}\u{2}\u{17A}\u{17C}" .
		    "\u{5}\u{6}\u{4}\u{2}\u{17B}\u{17A}\u{3}\u{2}\u{2}\u{2}\u{17C}\u{17D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{17D}\u{17B}\u{3}\u{2}\u{2}\u{2}\u{17D}\u{17E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{17E}\u{31}\u{3}\u{2}\u{2}\u{2}\u{17F}\u{181}" .
		    "\u{5}\u{6}\u{4}\u{2}\u{180}\u{17F}\u{3}\u{2}\u{2}\u{2}\u{181}\u{182}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{182}\u{180}\u{3}\u{2}\u{2}\u{2}\u{182}\u{183}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{183}\u{33}\u{3}\u{2}\u{2}\u{2}\u{2F}\u{37}" .
		    "\u{3D}\u{50}\u{56}\u{5E}\u{65}\u{73}\u{77}\u{7D}\u{83}\u{89}\u{9E}" .
		    "\u{A7}\u{AB}\u{CA}\u{D0}\u{D3}\u{DF}\u{E1}\u{E8}\u{F1}\u{FF}\u{103}" .
		    "\u{108}\u{10B}\u{111}\u{115}\u{11C}\u{122}\u{129}\u{12D}\u{130}\u{13B}" .
		    "\u{13F}\u{143}\u{146}\u{153}\u{15A}\u{162}\u{167}\u{16E}\u{173}\u{178}" .
		    "\u{17D}\u{182}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize() : void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.9', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName() : string
		{
			return "SayParser.g4";
		}

		public function getRuleNames() : array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN() : string
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN() : ATN
		{
			return self::$atn;
		}

		public function getVocabulary() : Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function top() : Context\TopContext
		{
		    $localContext = new Context\TopContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_top);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(53);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::IMPORT) {
		        	$this->setState(50);
		        	$this->import_statement();
		        	$this->setState(55);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(59);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::SAY) | (1 << self::SAYNL) | (1 << self::DEBUG) | (1 << self::ASK) | (1 << self::PO) | (1 << self::SBO) | (1 << self::ARROW) | (1 << self::DOLLAR) | (1 << self::IF) | (1 << self::EACH) | (1 << self::WHILE) | (1 << self::DO) | (1 << self::CONTINUE) | (1 << self::RETURN) | (1 << self::BREAK) | (1 << self::EXCLAMATION) | (1 << self::MACRO))) !== 0) || (((($_la - 65)) & ~0x3f) === 0 && ((1 << ($_la - 65)) & ((1 << (self::TABLE - 65)) | (1 << (self::STRING - 65)) | (1 << (self::INTEGER - 65)) | (1 << (self::FLOAT - 65)) | (1 << (self::BOOLEAN - 65)) | (1 << (self::IDENTIFIER - 65)) | (1 << (self::RAW_PHP - 65)))) !== 0)) {
		        	$this->setState(56);
		        	$this->recursiveExpression(0);
		        	$this->setState(61);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function import_statement() : Context\Import_statementContext
		{
		    $localContext = new Context\Import_statementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_import_statement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(62);
		        $this->match(self::IMPORT);
		        $this->setState(63);
		        $this->match(self::STRING);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression() : Context\ExpressionContext
		{
			return $this->recursiveExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpression(int $precedence) : Context\ExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 4;
			$this->enterRecursionRule($localContext, 4, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(169);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx)) {
					case 1:
					    $localContext = new Context\IdentifierContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;

					    $this->setState(66);
					    $this->match(self::IDENTIFIER);
					break;

					case 2:
					    $localContext = new Context\Implied_variableContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(67);
					    $this->match(self::DOLLAR);
					break;

					case 3:
					    $localContext = new Context\LiteralContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(68);

					    $_la = $this->input->LA(1);

					    if (!((((($_la - 66)) & ~0x3f) === 0 && ((1 << ($_la - 66)) & ((1 << (self::STRING - 66)) | (1 << (self::INTEGER - 66)) | (1 << (self::FLOAT - 66)) | (1 << (self::BOOLEAN - 66)))) !== 0))) {
					    $this->errorHandler->recoverInline($this);
					    } else {
					    	if ($this->input->LA(1) === Token::EOF) {
					    	    $this->matchedEOF = true;
					        }

					    	$this->errorHandler->reportMatch($this);
					    	$this->consume();
					    }
					break;

					case 4:
					    $localContext = new Context\Array_literalContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(69);
					    $this->match(self::SBO);
					    $this->setState(70);
					    $this->array_init();
					    $this->setState(71);
					    $this->match(self::SBC);
					break;

					case 5:
					    $localContext = new Context\Map_literalContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(73);
					    $this->match(self::SBO);
					    $this->setState(74);
					    $this->map_init();
					    $this->setState(75);
					    $this->match(self::SBC);
					break;

					case 6:
					    $localContext = new Context\Function_literalContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(78);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if ($_la === self::IDENTIFIER) {
					    	$this->setState(77);
					    	$this->param_list();
					    }
					    $this->setState(80);
					    $this->match(self::ARROW);
					    $this->setState(82); 
					    $this->errorHandler->sync($this);

					    $alt = 1;

					    do {
					    	switch ($alt) {
					    	case 1:
					    		$this->setState(81);
					    		$this->recursiveExpression(0);
					    		break;
					    	default:
					    		throw new NoViableAltException($this);
					    	}

					    	$this->setState(84); 
					    	$this->errorHandler->sync($this);

					    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 3, $this->ctx);
					    } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
					break;

					case 7:
					    $localContext = new Context\If_Context($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(86);
					    $this->match(self::IF);
					    $this->setState(87);
					    $localContext->test = $this->recursiveExpression(0);
					    $this->setState(88);
					    $this->match(self::THEN);
					    $this->setState(89);
					    $this->then_body();
					    $this->setState(92);
					    $this->errorHandler->sync($this);

					    switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
					        case 1:
					    	    $this->setState(90);
					    	    $this->match(self::ELSE);
					    	    $this->setState(91);
					    	    $this->else_body();
					    	break;
					    }
					break;

					case 8:
					    $localContext = new Context\PrefixContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(94);
					    $this->match(self::EXCLAMATION);
					    $this->setState(95);
					    $this->recursiveExpression(20);
					break;

					case 9:
					    $localContext = new Context\ContinueContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(96);
					    $this->match(self::CONTINUE);
					break;

					case 10:
					    $localContext = new Context\ReturnContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(97);
					    $this->match(self::RETURN);
					    $this->setState(99);
					    $this->errorHandler->sync($this);

					    switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
					        case 1:
					    	    $this->setState(98);
					    	    $this->recursiveExpression(0);
					    	break;
					    }
					break;

					case 11:
					    $localContext = new Context\BreakContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(101);
					    $this->match(self::BREAK);
					break;

					case 12:
					    $localContext = new Context\SayContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(102);
					    $this->match(self::SAY);
					    $this->setState(103);
					    $this->recursiveExpression(13);
					break;

					case 13:
					    $localContext = new Context\SayNLContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(104);
					    $this->match(self::SAYNL);
					    $this->setState(105);
					    $this->recursiveExpression(12);
					break;

					case 14:
					    $localContext = new Context\DebugContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(106);
					    $this->match(self::DEBUG);
					    $this->setState(107);
					    $this->recursiveExpression(11);
					break;

					case 15:
					    $localContext = new Context\AskContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(108);
					    $this->match(self::ASK);
					    $this->setState(109);
					    $this->recursiveExpression(10);
					break;

					case 16:
					    $localContext = new Context\Macro_definitionContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(110);
					    $this->match(self::MACRO);
					    $this->setState(115); 
					    $this->errorHandler->sync($this);

					    $_la = $this->input->LA(1);
					    do {
					    	$this->setState(111);
					    	$localContext->IDENTIFIER = $this->match(self::IDENTIFIER);
					    	$localContext->keywords[] = $localContext->IDENTIFIER;
					    	$this->setState(113);
					    	$this->errorHandler->sync($this);
					    	$_la = $this->input->LA(1);

					    	if ($_la === self::CBO) {
					    		$this->setState(112);
					    		$localContext->macro_param = $this->macro_param();
					    		$localContext->macroParams[] = $localContext->macro_param;
					    	}
					    	$this->setState(117); 
					    	$this->errorHandler->sync($this);
					    	$_la = $this->input->LA(1);
					    } while ($_la === self::IDENTIFIER);
					    $this->setState(119);
					    $this->match(self::ARROW);
					    $this->setState(121); 
					    $this->errorHandler->sync($this);

					    $alt = 1;

					    do {
					    	switch ($alt) {
					    	case 1:
					    		$this->setState(120);
					    		$this->recursiveExpression(0);
					    		break;
					    	default:
					    		throw new NoViableAltException($this);
					    	}

					    	$this->setState(123); 
					    	$this->errorHandler->sync($this);

					    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx);
					    } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
					break;

					case 17:
					    $localContext = new Context\MacroContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(125);
					    $this->match(self::MACRO);
					    $this->setState(129);
					    $this->errorHandler->sync($this);

					    $alt = $this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx);

					    while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					    	if ($alt === 1) {
					    		$this->setState(126);
					    		$this->recursiveExpression(0); 
					    	}

					    	$this->setState(131);
					    	$this->errorHandler->sync($this);

					    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx);
					    }
					break;

					case 18:
					    $localContext = new Context\EachContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(132);
					    $this->match(self::EACH);
					    $this->setState(133);
					    $this->recursiveExpression(0);
					    $this->setState(135);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if ($_la === self::AS) {
					    	$this->setState(134);
					    	$this->each_aliases();
					    }
					    $this->setState(137);
					    $this->each_body();
					break;

					case 19:
					    $localContext = new Context\While_doContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(139);
					    $this->match(self::WHILE);
					    $this->setState(140);
					    $localContext->test = $this->recursiveExpression(0);
					    $this->setState(141);
					    $this->match(self::DO);
					    $this->setState(142);
					    $this->while_body();
					break;

					case 20:
					    $localContext = new Context\Do_whileContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(144);
					    $this->match(self::DO);
					    $this->setState(145);
					    $this->do_body();
					    $this->setState(146);
					    $this->match(self::WHILE);
					    $this->setState(147);
					    $localContext->test = $this->recursiveExpression(5);
					break;

					case 21:
					    $localContext = new Context\P_expressionContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(149);
					    $this->match(self::PO);
					    $this->setState(150);
					    $this->recursiveExpression(0);
					    $this->setState(151);
					    $this->match(self::PC);
					break;

					case 22:
					    $localContext = new Context\Raw_phpContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(154); 
					    $this->errorHandler->sync($this);

					    $alt = 1;

					    do {
					    	switch ($alt) {
					    	case 1:
					    		$this->setState(153);
					    		$this->match(self::RAW_PHP);
					    		break;
					    	default:
					    		throw new NoViableAltException($this);
					    	}

					    	$this->setState(156); 
					    	$this->errorHandler->sync($this);

					    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx);
					    } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
					break;

					case 23:
					    $localContext = new Context\TableContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(158);
					    $this->match(self::TABLE);
					    $this->setState(159);
					    $this->match(self::IDENTIFIER);
					    $this->setState(160);
					    $this->match(self::CBO);
					    $this->setState(161);
					    $this->table_header();
					    $this->setState(163); 
					    $this->errorHandler->sync($this);

					    $_la = $this->input->LA(1);
					    do {
					    	$this->setState(162);
					    	$this->table_row();
					    	$this->setState(165); 
					    	$this->errorHandler->sync($this);
					    	$_la = $this->input->LA(1);
					    } while ($_la === self::PO);
					    $this->setState(167);
					    $this->match(self::CBC);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(223);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 18, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(221);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx)) {
							case 1:
							    $localContext = new Context\InfixContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(171);

							    if (!($this->precpred($this->ctx, 24))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 24)");
							    }

							    $this->setState(172);
							    $this->match(self::CARET);
							    $this->setState(173);
							    $this->recursiveExpression(25);
							break;

							case 2:
							    $localContext = new Context\InfixContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(174);

							    if (!($this->precpred($this->ctx, 23))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 23)");
							    }
							    $this->setState(175);

							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::STAR) | (1 << self::FSLASH) | (1 << self::PERCENTAGE))) !== 0))) {
							    $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(176);
							    $this->recursiveExpression(24);
							break;

							case 3:
							    $localContext = new Context\InfixContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(177);

							    if (!($this->precpred($this->ctx, 22))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 22)");
							    }
							    $this->setState(178);

							    $_la = $this->input->LA(1);

							    if (!($_la === self::PLUS || $_la === self::MINUS)) {
							    $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(179);
							    $this->recursiveExpression(23);
							break;

							case 4:
							    $localContext = new Context\InfixContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(180);

							    if (!($this->precpred($this->ctx, 21))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 21)");
							    }
							    $this->setState(181);

							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::EQUALS) | (1 << self::EXCLAMATION_EQUALS) | (1 << self::ABO) | (1 << self::ABC) | (1 << self::ABO_EQUALS) | (1 << self::ABC_EQUALS) | (1 << self::KINDA) | (1 << self::AMPERSAND) | (1 << self::UNION) | (1 << self::INTERSECTION) | (1 << self::DIFFERENCE) | (1 << self::FSLASH_QUESTION) | (1 << self::ASSIGN_QUESTION) | (1 << self::ASSIGN_PLUS) | (1 << self::ASSIGN_MINUS) | (1 << self::ASSIGN_STAR) | (1 << self::ASSIGN_FSLASH))) !== 0))) {
							    $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(182);
							    $this->recursiveExpression(22);
							break;

							case 5:
							    $localContext = new Context\BooleanMathContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(183);

							    if (!($this->precpred($this->ctx, 18))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 18)");
							    }
							    $this->setState(184);

							    $_la = $this->input->LA(1);

							    if (!($_la === self::AND || $_la === self::OR)) {
							    $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(185);
							    $this->recursiveExpression(19);
							break;

							case 6:
							    $localContext = new Context\IterableOperationsContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(186);

							    if (!($this->precpred($this->ctx, 17))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 17)");
							    }
							    $this->setState(187);

							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::ONLY) | (1 << self::EXCEPT) | (1 << self::MAP) | (1 << self::APPLY))) !== 0))) {
							    $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(188);
							    $this->recursiveExpression(18);
							break;

							case 7:
							    $localContext = new Context\AssignmentContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(189);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(190);
							    $this->match(self::ASSIGN);
							    $this->setState(191);
							    $this->recursiveExpression(4);
							break;

							case 8:
							    $localContext = new Context\Method_callContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(192);

							    if (!($this->precpred($this->ctx, 35))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 35)");
							    }
							    $this->setState(193);
							    $this->match(self::DOT);
							    $this->setState(194);
							    $this->match(self::IDENTIFIER);
							    $this->setState(195);
							    $this->match(self::COLON);
							    $this->setState(200);
							    $this->errorHandler->sync($this);

							    switch ($this->getInterpreter()->adaptivePredict($this->input, 14, $this->ctx)) {
							        case 1:
							    	    $this->setState(196);
							    	    $this->match(self::SBO);
							    	    $this->setState(197);
							    	    $this->arg_list();
							    	    $this->setState(198);
							    	    $this->match(self::SBC);
							    	break;
							    }
							break;

							case 9:
							    $localContext = new Context\Function_callContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(202);

							    if (!($this->precpred($this->ctx, 34))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 34)");
							    }
							    $this->setState(203);
							    $this->match(self::COLON);
							    $this->setState(209);
							    $this->errorHandler->sync($this);

							    switch ($this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx)) {
							        case 1:
							    	    $this->setState(204);
							    	    $this->match(self::SBO);
							    	    $this->setState(206);
							    	    $this->errorHandler->sync($this);
							    	    $_la = $this->input->LA(1);

							    	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::SAY) | (1 << self::SAYNL) | (1 << self::DEBUG) | (1 << self::ASK) | (1 << self::PO) | (1 << self::SBO) | (1 << self::ARROW) | (1 << self::DOLLAR) | (1 << self::IF) | (1 << self::EACH) | (1 << self::WHILE) | (1 << self::DO) | (1 << self::CONTINUE) | (1 << self::RETURN) | (1 << self::BREAK) | (1 << self::EXCLAMATION) | (1 << self::QUESTION) | (1 << self::MACRO))) !== 0) || (((($_la - 65)) & ~0x3f) === 0 && ((1 << ($_la - 65)) & ((1 << (self::TABLE - 65)) | (1 << (self::STRING - 65)) | (1 << (self::INTEGER - 65)) | (1 << (self::FLOAT - 65)) | (1 << (self::BOOLEAN - 65)) | (1 << (self::IDENTIFIER - 65)) | (1 << (self::RAW_PHP - 65)))) !== 0)) {
							    	    	$this->setState(205);
							    	    	$this->arg_list();
							    	    }
							    	    $this->setState(208);
							    	    $this->match(self::SBC);
							    	break;
							    }
							break;

							case 10:
							    $localContext = new Context\Property_accessContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(211);

							    if (!($this->precpred($this->ctx, 33))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 33)");
							    }
							    $this->setState(212);
							    $this->match(self::DOT);
							    $this->setState(213);
							    $this->match(self::IDENTIFIER);
							break;

							case 11:
							    $localContext = new Context\Index_accessContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(214);

							    if (!($this->precpred($this->ctx, 26))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 26)");
							    }
							    $this->setState(215);
							    $this->match(self::SBO);
							    $this->setState(216);
							    $this->iterables_indexes();
							    $this->setState(217);
							    $this->match(self::SBC);
							break;

							case 12:
							    $localContext = new Context\PostfixContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(219);

							    if (!($this->precpred($this->ctx, 19))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 19)");
							    }
							    $this->setState(220);

							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::PLUS) | (1 << self::MINUS) | (1 << self::STAR) | (1 << self::FSLASH) | (1 << self::AMPERSAND) | (1 << self::AND) | (1 << self::OR) | (1 << self::EXCLAMATION) | (1 << self::QUESTION))) !== 0))) {
							    $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							break;
						} 
					}

					$this->setState(225);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 18, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function table_header() : Context\Table_headerContext
		{
		    $localContext = new Context\Table_headerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_table_header);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(226);
		        $this->match(self::PO);
		        $this->setState(230);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::IDENTIFIER) {
		        	$this->setState(227);
		        	$this->match(self::IDENTIFIER);
		        	$this->setState(232);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(233);
		        $this->match(self::PC);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function table_row() : Context\Table_rowContext
		{
		    $localContext = new Context\Table_rowContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_table_row);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(235);
		        $this->match(self::PO);
		        $this->setState(239);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::SAY) | (1 << self::SAYNL) | (1 << self::DEBUG) | (1 << self::ASK) | (1 << self::PO) | (1 << self::SBO) | (1 << self::ARROW) | (1 << self::DOLLAR) | (1 << self::IF) | (1 << self::EACH) | (1 << self::WHILE) | (1 << self::DO) | (1 << self::CONTINUE) | (1 << self::RETURN) | (1 << self::BREAK) | (1 << self::EXCLAMATION) | (1 << self::MACRO))) !== 0) || (((($_la - 65)) & ~0x3f) === 0 && ((1 << ($_la - 65)) & ((1 << (self::TABLE - 65)) | (1 << (self::STRING - 65)) | (1 << (self::INTEGER - 65)) | (1 << (self::FLOAT - 65)) | (1 << (self::BOOLEAN - 65)) | (1 << (self::IDENTIFIER - 65)) | (1 << (self::RAW_PHP - 65)))) !== 0)) {
		        	$this->setState(236);
		        	$this->recursiveExpression(0);
		        	$this->setState(241);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(242);
		        $this->match(self::PC);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function macro_param() : Context\Macro_paramContext
		{
		    $localContext = new Context\Macro_paramContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_macro_param);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(244);
		        $this->match(self::CBO);
		        $this->setState(245);
		        $localContext->param = $this->match(self::IDENTIFIER);
		        $this->setState(246);
		        $this->match(self::CBC);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function param_list() : Context\Param_listContext
		{
		    $localContext = new Context\Param_listContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_param_list);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(248);
		        $localContext->function_param = $this->function_param();
		        $localContext->params[] = $localContext->function_param;
		        $this->setState(253);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 21, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(249);
		        		$this->match(self::COMMA);
		        		$this->setState(250);
		        		$localContext->function_param = $this->function_param();
		        		$localContext->params[] = $localContext->function_param; 
		        	}

		        	$this->setState(255);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 21, $this->ctx);
		        }
		        $this->setState(257);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::COMMA) {
		        	$this->setState(256);
		        	$this->match(self::COMMA);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function function_param() : Context\Function_paramContext
		{
		    $localContext = new Context\Function_paramContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_function_param);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(259);
		        $this->match(self::IDENTIFIER);
		        $this->setState(262);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ASSIGN) {
		        	$this->setState(260);
		        	$this->match(self::ASSIGN);
		        	$this->setState(261);
		        	$localContext->defaultValue = $this->recursiveExpression(0);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function array_init() : Context\Array_initContext
		{
		    $localContext = new Context\Array_initContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_array_init);

		    try {
		        $this->setState(282);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ExplicitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(265);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::SAY) | (1 << self::SAYNL) | (1 << self::DEBUG) | (1 << self::ASK) | (1 << self::PO) | (1 << self::SBO) | (1 << self::ARROW) | (1 << self::DOLLAR) | (1 << self::IF) | (1 << self::EACH) | (1 << self::WHILE) | (1 << self::DO) | (1 << self::CONTINUE) | (1 << self::RETURN) | (1 << self::BREAK) | (1 << self::EXCLAMATION) | (1 << self::MACRO))) !== 0) || (((($_la - 65)) & ~0x3f) === 0 && ((1 << ($_la - 65)) & ((1 << (self::TABLE - 65)) | (1 << (self::STRING - 65)) | (1 << (self::INTEGER - 65)) | (1 << (self::FLOAT - 65)) | (1 << (self::BOOLEAN - 65)) | (1 << (self::IDENTIFIER - 65)) | (1 << (self::RAW_PHP - 65)))) !== 0)) {
		        	    	$this->setState(264);
		        	    	$this->recursiveExpression(0);
		        	    }
		        	    $this->setState(271);
		        	    $this->errorHandler->sync($this);

		        	    $alt = $this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx);

		        	    while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	    	if ($alt === 1) {
		        	    		$this->setState(267);
		        	    		$this->match(self::COMMA);
		        	    		$this->setState(268);
		        	    		$this->recursiveExpression(0); 
		        	    	}

		        	    	$this->setState(273);
		        	    	$this->errorHandler->sync($this);

		        	    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx);
		        	    }
		        	    $this->setState(275);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::COMMA) {
		        	    	$this->setState(274);
		        	    	$this->match(self::COMMA);
		        	    }
		        	break;

		        	case 2:
		        	    $localContext = new Context\RangeContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(277);
		        	    $this->closed_range();
		        	break;

		        	case 3:
		        	    $localContext = new Context\InfiniteContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(278);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(279);
		        	    $this->match(self::DOTDOT);
		        	    $this->setState(280);
		        	    $this->match(self::INF);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function each_aliases() : Context\Each_aliasesContext
		{
		    $localContext = new Context\Each_aliasesContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_each_aliases);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(284);
		        $this->match(self::AS);
		        $this->setState(285);
		        $localContext->keyValueAlias = $this->match(self::IDENTIFIER);
		        $this->setState(288);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx)) {
		            case 1:
		        	    $this->setState(286);
		        	    $this->match(self::ARROW);
		        	    $this->setState(287);
		        	    $localContext->valueAlias = $this->match(self::IDENTIFIER);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function map_init() : Context\Map_initContext
		{
		    $localContext = new Context\Map_initContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_map_init);

		    try {
		        $this->setState(302);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::STRING:
		            	$localContext = new Context\Not_empty_MapContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(290);
		            	$this->map_pair();
		            	$this->setState(295);
		            	$this->errorHandler->sync($this);

		            	$alt = $this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx);

		            	while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		            		if ($alt === 1) {
		            			$this->setState(291);
		            			$this->match(self::COMMA);
		            			$this->setState(292);
		            			$this->map_pair(); 
		            		}

		            		$this->setState(297);
		            		$this->errorHandler->sync($this);

		            		$alt = $this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx);
		            	}
		            	$this->setState(299);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::COMMA) {
		            		$this->setState(298);
		            		$this->match(self::COMMA);
		            	}
		            	break;

		            case self::ARROW:
		            	$localContext = new Context\Empty_MapContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(301);
		            	$this->match(self::ARROW);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function map_pair() : Context\Map_pairContext
		{
		    $localContext = new Context\Map_pairContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_map_pair);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(304);
		        $this->match(self::STRING);
		        $this->setState(305);
		        $this->match(self::ARROW);
		        $this->setState(306);
		        $this->recursiveExpression(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function iterables_indexes() : Context\Iterables_indexesContext
		{
		    $localContext = new Context\Iterables_indexesContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_iterables_indexes);

		    try {
		        $this->setState(324);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 35, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\Explicit_index_accessContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(308);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(313);
		        	    $this->errorHandler->sync($this);

		        	    $alt = $this->getInterpreter()->adaptivePredict($this->input, 32, $this->ctx);

		        	    while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	    	if ($alt === 1) {
		        	    		$this->setState(309);
		        	    		$this->match(self::COMMA);
		        	    		$this->setState(310);
		        	    		$this->recursiveExpression(0); 
		        	    	}

		        	    	$this->setState(315);
		        	    	$this->errorHandler->sync($this);

		        	    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 32, $this->ctx);
		        	    }
		        	    $this->setState(317);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::COMMA) {
		        	    	$this->setState(316);
		        	    	$this->match(self::COMMA);
		        	    }
		        	break;

		        	case 2:
		        	    $localContext = new Context\Range_index_accessContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(321);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 34, $this->ctx)) {
		        	    	case 1:
		        	    	    $this->setState(319);
		        	    	    $this->open_range();
		        	    	break;

		        	    	case 2:
		        	    	    $this->setState(320);
		        	    	    $this->closed_range();
		        	    	break;
		        	    }
		        	break;

		        	case 3:
		        	    $localContext = new Context\Helper_index_accessContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(323);
		        	    $this->index_helper();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function index_helper() : Context\Index_helperContext
		{
		    $localContext = new Context\Index_helperContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_index_helper);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(326);

		        $_la = $this->input->LA(1);

		        if (!((((($_la - 62)) & ~0x3f) === 0 && ((1 << ($_la - 62)) & ((1 << (self::FIRST - 62)) | (1 << (self::NEXT - 62)) | (1 << (self::LAST - 62)))) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function closed_range() : Context\Closed_rangeContext
		{
		    $localContext = new Context\Closed_rangeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_closed_range);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(328);
		        $this->recursiveExpression(0);
		        $this->setState(329);
		        $this->match(self::DOTDOT);
		        $this->setState(330);
		        $this->recursiveExpression(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function open_range() : Context\Open_rangeContext
		{
		    $localContext = new Context\Open_rangeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_open_range);

		    try {
		        $this->setState(337);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::SAY:
		            case self::SAYNL:
		            case self::DEBUG:
		            case self::ASK:
		            case self::PO:
		            case self::SBO:
		            case self::ARROW:
		            case self::DOLLAR:
		            case self::IF:
		            case self::EACH:
		            case self::WHILE:
		            case self::DO:
		            case self::CONTINUE:
		            case self::RETURN:
		            case self::BREAK:
		            case self::EXCLAMATION:
		            case self::MACRO:
		            case self::TABLE:
		            case self::STRING:
		            case self::INTEGER:
		            case self::FLOAT:
		            case self::BOOLEAN:
		            case self::IDENTIFIER:
		            case self::RAW_PHP:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(332);
		            	$this->recursiveExpression(0);
		            	$this->setState(333);
		            	$this->match(self::DOTDOT);
		            	break;

		            case self::DOTDOT:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(335);
		            	$this->match(self::DOTDOT);
		            	$this->setState(336);
		            	$this->recursiveExpression(0);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression_list() : Context\Expression_listContext
		{
		    $localContext = new Context\Expression_listContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_expression_list);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(339);
		        $this->recursiveExpression(0);
		        $this->setState(344);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(340);
		        	$this->match(self::COMMA);
		        	$this->setState(341);
		        	$this->recursiveExpression(0);
		        	$this->setState(346);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arg_list() : Context\Arg_listContext
		{
		    $localContext = new Context\Arg_listContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_arg_list);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(347);
		        $this->arg();
		        $this->setState(352);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(348);
		        	$this->match(self::COMMA);
		        	$this->setState(349);
		        	$this->arg();
		        	$this->setState(354);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arg() : Context\ArgContext
		{
		    $localContext = new Context\ArgContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_arg);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(357);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::SAY:
		            case self::SAYNL:
		            case self::DEBUG:
		            case self::ASK:
		            case self::PO:
		            case self::SBO:
		            case self::ARROW:
		            case self::DOLLAR:
		            case self::IF:
		            case self::EACH:
		            case self::WHILE:
		            case self::DO:
		            case self::CONTINUE:
		            case self::RETURN:
		            case self::BREAK:
		            case self::EXCLAMATION:
		            case self::MACRO:
		            case self::TABLE:
		            case self::STRING:
		            case self::INTEGER:
		            case self::FLOAT:
		            case self::BOOLEAN:
		            case self::IDENTIFIER:
		            case self::RAW_PHP:
		            	$this->setState(355);
		            	$this->recursiveExpression(0);
		            	break;

		            case self::QUESTION:
		            	$this->setState(356);
		            	$this->argPlaceholder();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function argPlaceholder() : Context\ArgPlaceholderContext
		{
		    $localContext = new Context\ArgPlaceholderContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_argPlaceholder);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(359);
		        $this->match(self::QUESTION);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function then_body() : Context\Then_bodyContext
		{
		    $localContext = new Context\Then_bodyContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_then_body);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(362); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(361);
		        		$this->recursiveExpression(0);
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(364); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 40, $this->ctx);
		        } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function else_body() : Context\Else_bodyContext
		{
		    $localContext = new Context\Else_bodyContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_else_body);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(367); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(366);
		        		$this->recursiveExpression(0);
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(369); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 41, $this->ctx);
		        } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function each_body() : Context\Each_bodyContext
		{
		    $localContext = new Context\Each_bodyContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_each_body);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(372); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(371);
		        		$this->recursiveExpression(0);
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(374); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 42, $this->ctx);
		        } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function while_body() : Context\While_bodyContext
		{
		    $localContext = new Context\While_bodyContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_while_body);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(377); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(376);
		        		$this->recursiveExpression(0);
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(379); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 43, $this->ctx);
		        } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function do_body() : Context\Do_bodyContext
		{
		    $localContext = new Context\Do_bodyContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_do_body);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(382); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(381);
		        		$this->recursiveExpression(0);
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(384); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 44, $this->ctx);
		        } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex) : bool
		{
			switch ($ruleIndex) {
					case 2:
						return $this->sempredExpression($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpression(?Context\ExpressionContext $localContext, int $predicateIndex) : bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 24);

			    case 1:
			        return $this->precpred($this->ctx, 23);

			    case 2:
			        return $this->precpred($this->ctx, 22);

			    case 3:
			        return $this->precpred($this->ctx, 21);

			    case 4:
			        return $this->precpred($this->ctx, 18);

			    case 5:
			        return $this->precpred($this->ctx, 17);

			    case 6:
			        return $this->precpred($this->ctx, 4);

			    case 7:
			        return $this->precpred($this->ctx, 35);

			    case 8:
			        return $this->precpred($this->ctx, 34);

			    case 9:
			        return $this->precpred($this->ctx, 33);

			    case 10:
			        return $this->precpred($this->ctx, 26);

			    case 11:
			        return $this->precpred($this->ctx, 19);
			}

			return true;
		}
	}
}

namespace Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use SayParser;
	use SayParserVisitor;
	use SayParserListener;

	class TopContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_top;
	    }

	    /**
	     * @return array<Import_statementContext>|Import_statementContext|null
	     */
	    public function import_statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Import_statementContext::class);
	    	}

	        return $this->getTypedRuleContext(Import_statementContext::class, $index);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterTop($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitTop($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitTop($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Import_statementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_import_statement;
	    }

	    public function IMPORT() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::IMPORT, 0);
	    }

	    public function STRING() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::STRING, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterImport_statement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitImport_statement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitImport_statement($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_expression;
	    }
	 
		public function copyFrom(ParserRuleContext $context) : void
		{
			parent::copyFrom($context);

		}
	}

	class EachContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function EACH() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::EACH, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function each_body() : ?Each_bodyContext
	    {
	    	return $this->getTypedRuleContext(Each_bodyContext::class, 0);
	    }

	    public function each_aliases() : ?Each_aliasesContext
	    {
	    	return $this->getTypedRuleContext(Each_aliasesContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterEach($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitEach($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitEach($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class If_Context extends ExpressionContext
	{
		/**
		 * @var ExpressionContext|null $test
		 */
		public $test;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function IF() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::IF, 0);
	    }

	    public function THEN() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::THEN, 0);
	    }

	    public function then_body() : ?Then_bodyContext
	    {
	    	return $this->getTypedRuleContext(Then_bodyContext::class, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function ELSE() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ELSE, 0);
	    }

	    public function else_body() : ?Else_bodyContext
	    {
	    	return $this->getTypedRuleContext(Else_bodyContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterIf_($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitIf_($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitIf_($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MacroContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function MACRO() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::MACRO, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterMacro($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitMacro($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitMacro($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class BreakContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function BREAK() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::BREAK, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterBreak($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitBreak($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitBreak($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class InfixContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function CARET() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::CARET, 0);
	    }

	    public function STAR() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::STAR, 0);
	    }

	    public function FSLASH() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::FSLASH, 0);
	    }

	    public function PERCENTAGE() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::PERCENTAGE, 0);
	    }

	    public function MINUS() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::MINUS, 0);
	    }

	    public function PLUS() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::PLUS, 0);
	    }

	    public function EQUALS() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::EQUALS, 0);
	    }

	    public function EXCLAMATION_EQUALS() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::EXCLAMATION_EQUALS, 0);
	    }

	    public function ABO() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ABO, 0);
	    }

	    public function ABC() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ABC, 0);
	    }

	    public function ABO_EQUALS() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ABO_EQUALS, 0);
	    }

	    public function ABC_EQUALS() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ABC_EQUALS, 0);
	    }

	    public function KINDA() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::KINDA, 0);
	    }

	    public function AMPERSAND() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::AMPERSAND, 0);
	    }

	    public function FSLASH_QUESTION() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::FSLASH_QUESTION, 0);
	    }

	    public function UNION() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::UNION, 0);
	    }

	    public function INTERSECTION() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::INTERSECTION, 0);
	    }

	    public function DIFFERENCE() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::DIFFERENCE, 0);
	    }

	    public function ASSIGN_QUESTION() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ASSIGN_QUESTION, 0);
	    }

	    public function ASSIGN_PLUS() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ASSIGN_PLUS, 0);
	    }

	    public function ASSIGN_MINUS() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ASSIGN_MINUS, 0);
	    }

	    public function ASSIGN_STAR() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ASSIGN_STAR, 0);
	    }

	    public function ASSIGN_FSLASH() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ASSIGN_FSLASH, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterInfix($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitInfix($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitInfix($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Macro_definitionContext extends ExpressionContext
	{
		/**
		 * @var array<Token>|null $keywords
		 */
		public $keywords;

		/**
		 * @var Token|null $IDENTIFIER
		 */
		public $IDENTIFIER;

		/**
		 * @var Macro_paramContext|null $macro_param
		 */
		public $macro_param;

		/**
		 * @var array<Macro_paramContext>|null $macroParams
		 */
		public $macroParams;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function MACRO() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::MACRO, 0);
	    }

	    public function ARROW() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ARROW, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function IDENTIFIER(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SayParser::IDENTIFIER);
	    	}

	        return $this->getToken(SayParser::IDENTIFIER, $index);
	    }

	    /**
	     * @return array<Macro_paramContext>|Macro_paramContext|null
	     */
	    public function macro_param(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Macro_paramContext::class);
	    	}

	        return $this->getTypedRuleContext(Macro_paramContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterMacro_definition($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitMacro_definition($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitMacro_definition($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class SayContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function SAY() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::SAY, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterSay($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitSay($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitSay($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class PrefixContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function EXCLAMATION() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::EXCLAMATION, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterPrefix($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitPrefix($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitPrefix($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ContinueContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function CONTINUE() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::CONTINUE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterContinue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitContinue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitContinue($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AssignmentContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function ASSIGN() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ASSIGN, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterAssignment($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitAssignment($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitAssignment($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Index_accessContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function SBO() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::SBO, 0);
	    }

	    public function iterables_indexes() : ?Iterables_indexesContext
	    {
	    	return $this->getTypedRuleContext(Iterables_indexesContext::class, 0);
	    }

	    public function SBC() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::SBC, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterIndex_access($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitIndex_access($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitIndex_access($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Map_literalContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function SBO() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::SBO, 0);
	    }

	    public function map_init() : ?Map_initContext
	    {
	    	return $this->getTypedRuleContext(Map_initContext::class, 0);
	    }

	    public function SBC() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::SBC, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterMap_literal($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitMap_literal($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitMap_literal($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IdentifierContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterIdentifier($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitIdentifier($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitIdentifier($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Implied_variableContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function DOLLAR() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::DOLLAR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterImplied_variable($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitImplied_variable($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitImplied_variable($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class LiteralContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function INTEGER() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::INTEGER, 0);
	    }

	    public function FLOAT() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::FLOAT, 0);
	    }

	    public function BOOLEAN() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::BOOLEAN, 0);
	    }

	    public function STRING() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::STRING, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitLiteral($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AskContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ASK() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ASK, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterAsk($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitAsk($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitAsk($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IterableOperationsContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function ONLY() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ONLY, 0);
	    }

	    public function EXCEPT() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::EXCEPT, 0);
	    }

	    public function MAP() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::MAP, 0);
	    }

	    public function APPLY() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::APPLY, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterIterableOperations($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitIterableOperations($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitIterableOperations($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class DebugContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function DEBUG() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::DEBUG, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterDebug($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitDebug($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitDebug($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Do_whileContext extends ExpressionContext
	{
		/**
		 * @var ExpressionContext|null $test
		 */
		public $test;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function DO() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::DO, 0);
	    }

	    public function do_body() : ?Do_bodyContext
	    {
	    	return $this->getTypedRuleContext(Do_bodyContext::class, 0);
	    }

	    public function WHILE() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::WHILE, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterDo_while($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitDo_while($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitDo_while($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReturnContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function RETURN() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::RETURN, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterReturn($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitReturn($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitReturn($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class TableContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function TABLE() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::TABLE, 0);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::IDENTIFIER, 0);
	    }

	    public function CBO() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::CBO, 0);
	    }

	    public function table_header() : ?Table_headerContext
	    {
	    	return $this->getTypedRuleContext(Table_headerContext::class, 0);
	    }

	    public function CBC() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::CBC, 0);
	    }

	    /**
	     * @return array<Table_rowContext>|Table_rowContext|null
	     */
	    public function table_row(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Table_rowContext::class);
	    	}

	        return $this->getTypedRuleContext(Table_rowContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterTable($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitTable($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitTable($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class While_doContext extends ExpressionContext
	{
		/**
		 * @var ExpressionContext|null $test
		 */
		public $test;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function WHILE() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::WHILE, 0);
	    }

	    public function DO() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::DO, 0);
	    }

	    public function while_body() : ?While_bodyContext
	    {
	    	return $this->getTypedRuleContext(While_bodyContext::class, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterWhile_do($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitWhile_do($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitWhile_do($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class PostfixContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function EXCLAMATION() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::EXCLAMATION, 0);
	    }

	    public function QUESTION() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::QUESTION, 0);
	    }

	    public function PLUS() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::PLUS, 0);
	    }

	    public function MINUS() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::MINUS, 0);
	    }

	    public function STAR() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::STAR, 0);
	    }

	    public function FSLASH() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::FSLASH, 0);
	    }

	    public function AMPERSAND() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::AMPERSAND, 0);
	    }

	    public function AND() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::AND, 0);
	    }

	    public function OR() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::OR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterPostfix($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitPostfix($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitPostfix($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Function_literalContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ARROW() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ARROW, 0);
	    }

	    public function param_list() : ?Param_listContext
	    {
	    	return $this->getTypedRuleContext(Param_listContext::class, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterFunction_literal($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitFunction_literal($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitFunction_literal($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class SayNLContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function SAYNL() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::SAYNL, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterSayNL($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitSayNL($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitSayNL($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class BooleanMathContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function AND() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::AND, 0);
	    }

	    public function OR() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::OR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterBooleanMath($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitBooleanMath($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitBooleanMath($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class P_expressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PO() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::PO, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function PC() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::PC, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterP_expression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitP_expression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitP_expression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Function_callContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function COLON() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::COLON, 0);
	    }

	    public function SBO() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::SBO, 0);
	    }

	    public function SBC() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::SBC, 0);
	    }

	    public function arg_list() : ?Arg_listContext
	    {
	    	return $this->getTypedRuleContext(Arg_listContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterFunction_call($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitFunction_call($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitFunction_call($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Property_accessContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function DOT() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::DOT, 0);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterProperty_access($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitProperty_access($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitProperty_access($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Array_literalContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function SBO() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::SBO, 0);
	    }

	    public function array_init() : ?Array_initContext
	    {
	    	return $this->getTypedRuleContext(Array_initContext::class, 0);
	    }

	    public function SBC() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::SBC, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterArray_literal($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitArray_literal($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitArray_literal($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Method_callContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function DOT() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::DOT, 0);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::IDENTIFIER, 0);
	    }

	    public function COLON() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::COLON, 0);
	    }

	    public function SBO() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::SBO, 0);
	    }

	    public function arg_list() : ?Arg_listContext
	    {
	    	return $this->getTypedRuleContext(Arg_listContext::class, 0);
	    }

	    public function SBC() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::SBC, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterMethod_call($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitMethod_call($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitMethod_call($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Raw_phpContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function RAW_PHP(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SayParser::RAW_PHP);
	    	}

	        return $this->getToken(SayParser::RAW_PHP, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterRaw_php($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitRaw_php($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitRaw_php($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Table_headerContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_table_header;
	    }

	    public function PO() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::PO, 0);
	    }

	    public function PC() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::PC, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function IDENTIFIER(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SayParser::IDENTIFIER);
	    	}

	        return $this->getToken(SayParser::IDENTIFIER, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterTable_header($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitTable_header($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitTable_header($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Table_rowContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_table_row;
	    }

	    public function PO() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::PO, 0);
	    }

	    public function PC() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::PC, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterTable_row($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitTable_row($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitTable_row($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Macro_paramContext extends ParserRuleContext
	{
		/**
		 * @var Token|null $param
		 */
		public $param;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_macro_param;
	    }

	    public function CBO() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::CBO, 0);
	    }

	    public function CBC() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::CBC, 0);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterMacro_param($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitMacro_param($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitMacro_param($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Param_listContext extends ParserRuleContext
	{
		/**
		 * @var Function_paramContext|null $function_param
		 */
		public $function_param;

		/**
		 * @var array<Function_paramContext>|null $params
		 */
		public $params;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_param_list;
	    }

	    /**
	     * @return array<Function_paramContext>|Function_paramContext|null
	     */
	    public function function_param(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Function_paramContext::class);
	    	}

	        return $this->getTypedRuleContext(Function_paramContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SayParser::COMMA);
	    	}

	        return $this->getToken(SayParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterParam_list($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitParam_list($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitParam_list($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Function_paramContext extends ParserRuleContext
	{
		/**
		 * @var ExpressionContext|null $defaultValue
		 */
		public $defaultValue;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_function_param;
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::IDENTIFIER, 0);
	    }

	    public function ASSIGN() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ASSIGN, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterFunction_param($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitFunction_param($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitFunction_param($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Array_initContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_array_init;
	    }
	 
		public function copyFrom(ParserRuleContext $context) : void
		{
			parent::copyFrom($context);

		}
	}

	class InfiniteContext extends Array_initContext
	{
		public function __construct(Array_initContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function DOTDOT() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::DOTDOT, 0);
	    }

	    public function INF() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::INF, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterInfinite($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitInfinite($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitInfinite($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExplicitContext extends Array_initContext
	{
		public function __construct(Array_initContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SayParser::COMMA);
	    	}

	        return $this->getToken(SayParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterExplicit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitExplicit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitExplicit($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class RangeContext extends Array_initContext
	{
		public function __construct(Array_initContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function closed_range() : ?Closed_rangeContext
	    {
	    	return $this->getTypedRuleContext(Closed_rangeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterRange($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitRange($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitRange($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Each_aliasesContext extends ParserRuleContext
	{
		/**
		 * @var Token|null $keyValueAlias
		 */
		public $keyValueAlias;

		/**
		 * @var Token|null $valueAlias
		 */
		public $valueAlias;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_each_aliases;
	    }

	    public function AS() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::AS, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function IDENTIFIER(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SayParser::IDENTIFIER);
	    	}

	        return $this->getToken(SayParser::IDENTIFIER, $index);
	    }

	    public function ARROW() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ARROW, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterEach_aliases($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitEach_aliases($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitEach_aliases($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Map_initContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_map_init;
	    }
	 
		public function copyFrom(ParserRuleContext $context) : void
		{
			parent::copyFrom($context);

		}
	}

	class Not_empty_MapContext extends Map_initContext
	{
		public function __construct(Map_initContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<Map_pairContext>|Map_pairContext|null
	     */
	    public function map_pair(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Map_pairContext::class);
	    	}

	        return $this->getTypedRuleContext(Map_pairContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SayParser::COMMA);
	    	}

	        return $this->getToken(SayParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterNot_empty_Map($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitNot_empty_Map($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitNot_empty_Map($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Empty_MapContext extends Map_initContext
	{
		public function __construct(Map_initContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ARROW() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ARROW, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterEmpty_Map($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitEmpty_Map($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitEmpty_Map($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Map_pairContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_map_pair;
	    }

	    public function STRING() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::STRING, 0);
	    }

	    public function ARROW() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::ARROW, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterMap_pair($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitMap_pair($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitMap_pair($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Iterables_indexesContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_iterables_indexes;
	    }
	 
		public function copyFrom(ParserRuleContext $context) : void
		{
			parent::copyFrom($context);

		}
	}

	class Range_index_accessContext extends Iterables_indexesContext
	{
		public function __construct(Iterables_indexesContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function open_range() : ?Open_rangeContext
	    {
	    	return $this->getTypedRuleContext(Open_rangeContext::class, 0);
	    }

	    public function closed_range() : ?Closed_rangeContext
	    {
	    	return $this->getTypedRuleContext(Closed_rangeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterRange_index_access($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitRange_index_access($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitRange_index_access($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Explicit_index_accessContext extends Iterables_indexesContext
	{
		public function __construct(Iterables_indexesContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SayParser::COMMA);
	    	}

	        return $this->getToken(SayParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterExplicit_index_access($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitExplicit_index_access($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitExplicit_index_access($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Helper_index_accessContext extends Iterables_indexesContext
	{
		public function __construct(Iterables_indexesContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function index_helper() : ?Index_helperContext
	    {
	    	return $this->getTypedRuleContext(Index_helperContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterHelper_index_access($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitHelper_index_access($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitHelper_index_access($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Index_helperContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_index_helper;
	    }

	    public function FIRST() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::FIRST, 0);
	    }

	    public function LAST() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::LAST, 0);
	    }

	    public function NEXT() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::NEXT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterIndex_helper($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitIndex_helper($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitIndex_helper($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Closed_rangeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_closed_range;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function DOTDOT() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::DOTDOT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterClosed_range($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitClosed_range($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitClosed_range($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Open_rangeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_open_range;
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function DOTDOT() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::DOTDOT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterOpen_range($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitOpen_range($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitOpen_range($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Expression_listContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_expression_list;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SayParser::COMMA);
	    	}

	        return $this->getToken(SayParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterExpression_list($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitExpression_list($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitExpression_list($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Arg_listContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_arg_list;
	    }

	    /**
	     * @return array<ArgContext>|ArgContext|null
	     */
	    public function arg(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ArgContext::class);
	    	}

	        return $this->getTypedRuleContext(ArgContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SayParser::COMMA);
	    	}

	        return $this->getToken(SayParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterArg_list($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitArg_list($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitArg_list($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArgContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_arg;
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function argPlaceholder() : ?ArgPlaceholderContext
	    {
	    	return $this->getTypedRuleContext(ArgPlaceholderContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterArg($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitArg($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitArg($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArgPlaceholderContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_argPlaceholder;
	    }

	    public function QUESTION() : ?TerminalNode
	    {
	        return $this->getToken(SayParser::QUESTION, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterArgPlaceholder($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitArgPlaceholder($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitArgPlaceholder($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Then_bodyContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_then_body;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterThen_body($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitThen_body($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitThen_body($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Else_bodyContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_else_body;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterElse_body($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitElse_body($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitElse_body($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Each_bodyContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_each_body;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterEach_body($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitEach_body($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitEach_body($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class While_bodyContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_while_body;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterWhile_body($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitWhile_body($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitWhile_body($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Do_bodyContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return SayParser::RULE_do_body;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->enterDo_body($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof SayParserListener) {
			    $listener->exitDo_body($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof SayParserVisitor) {
			    return $visitor->visitDo_body($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}