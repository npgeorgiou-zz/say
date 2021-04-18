lexer grammar SayLexer;

IMPORT : 'import' ;

SAY : 'say' ;
SAYNL : 'sayNL' ;
DEBUG : 'debug' ;
ASK : 'ask' ;

DOT: '.';
COMMA: ',';
DOTDOT: '..';
COLON: ':';
INF: 'inf';

PO: '(';
PC: ')';
CBO: '{';
CBC: '}';
SBO: '[';
SBC: ']';
ARROW: '->';
DOLLAR: '$';

IF: 'if';
THEN: 'then';
ELSE: 'else';
EACH: 'each';
WHILE: 'while';
DO: 'do';
AS: 'as';
CONTINUE: 'continue';
RETURN: 'return';
BREAK: 'break';



EQUALS: '=';
EXCLAMATION_EQUALS: '!=';
ABO: '>';
ABC: '<';
ABO_EQUALS: '>=';
ABC_EQUALS: '<=';
KINDA: 'kinda';
PLUS: '+';
MINUS: '-';
STAR: '*';
FSLASH: '/';
PERCENTAGE: '%';
CARET: '^';
AMPERSAND: '&';
UNION: 'union';
INTERSECTION: 'intersection';
DIFFERENCE: 'difference';
AND: 'and';
OR: 'or';
EXCLAMATION: '!';
QUESTION: '?';
FSLASH_QUESTION: '/?';
ASSIGN_QUESTION: '<<&';
ASSIGN_PLUS: '<<+';
ASSIGN_MINUS: '<<-';
ASSIGN_STAR: '<</';
ASSIGN_FSLASH: '<<*';


ONLY: 'only';
EXCEPT: 'except';
MAP: 'map';
APPLY: 'apply';

MACRO: 'macro';

ASSIGN : '<<' ;
FIRST : 'first' ;
NEXT : 'next' ;
LAST : 'last' ;
TABLE : 'table' ;

STRING : '\'' .*? '\'' ;
INTEGER :  [0] | [-]? [1-9][0-9]* [%]?;
FLOAT : INTEGER '.' [0-9]+ [%]?;
BOOLEAN : 'true'|'false' ;

IDENTIFIER : [$@%]? [a-zA-Z0-9_]+ [$@?%]?;

BLOCK_COMMENT : '##' .*?  '##' -> skip;
LINE_COMMENT : '#' ~[\r\n]* -> skip;
WS : [ \t\r\n]+ -> skip;

PHP_OPEN_TAG: '<?php'  -> pushMode(IN_PHP), skip;

mode IN_PHP;
RAW_PHP : (~'?' | '?'~[>] )+;
PHP_CLOSE_TAG : '?>' -> popMode, skip;

//SINGLEQ             : '\''  -> pushMode(IN_STRING);
//CLOSE_INTERPOLATION : CBC   -> popMode, type(CBC);


//mode IN_STRING;
//WS2 : [ \t\r\n]+ ;
//TEXT: ~[',{]* ;
//OPEN_INTERPOLATION : CBO  -> pushMode(DEFAULT_MODE), type(CBO);
//CLOSE_STRING : SINGLEQ -> popMode, type(SINGLEQ);
