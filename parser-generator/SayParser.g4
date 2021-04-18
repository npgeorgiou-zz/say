parser grammar SayParser;

options { tokenVocab=SayLexer; }

top: (import_statement* expression*);

import_statement: IMPORT STRING;

expression:
    expression DOT IDENTIFIER COLON (SBO arg_list SBC)?                            # Method_call
    |expression COLON (SBO arg_list? SBC)?                                          # Function_call
//    |expression '>>' expression                                                     # Pipe
    |expression DOT IDENTIFIER                                                      # Property_access
    |IDENTIFIER                                                                     # Identifier
    |DOLLAR                                                                         # Implied_variable
    |(INTEGER|FLOAT|BOOLEAN|STRING)                                                 # Literal
    |SBO array_init SBC                                                             # Array_literal
    |SBO map_init SBC                                                               # Map_literal
    |param_list? ARROW expression+                                                  # Function_literal
    |expression SBO iterables_indexes SBC                                           # Index_access
    |IF test=expression THEN then_body (ELSE else_body)?    # If_
    // math oeprators separated so they can be higher up in precedence
    |expression (CARET) expression                                                  # Infix
    |expression (STAR|FSLASH|PERCENTAGE) expression                                 # Infix
    |expression (MINUS|PLUS) expression                                             # Infix
    |expression (
        EQUALS|EXCLAMATION_EQUALS|ABO|ABC|ABO_EQUALS|ABC_EQUALS|KINDA
        |AMPERSAND|FSLASH_QUESTION|UNION|INTERSECTION|DIFFERENCE
        |ASSIGN_QUESTION|ASSIGN_PLUS|ASSIGN_MINUS|ASSIGN_STAR|ASSIGN_FSLASH
    ) expression                                                                    # Infix
    |EXCLAMATION expression                                                         # Prefix
    |expression (
        EXCLAMATION|QUESTION|PLUS|MINUS|STAR|FSLASH|AMPERSAND|AND|OR
    )                                                                               # Postfix
    |expression (AND|OR) expression                                                 # BooleanMath
    |expression (ONLY|EXCEPT|MAP|APPLY) expression                                  # IterableOperations
    |CONTINUE                                                                       # Continue
    |RETURN expression?                                                             # Return
    |BREAK                                                                          # Break
    |SAY expression                                                                 # Say
    |SAYNL expression                                                               # SayNL
    |DEBUG expression                                                               # Debug
    |ASK expression                                                                 # Ask
    |MACRO
        (keywords+=IDENTIFIER (macroParams+=macro_param)?)+
        ARROW expression+                                                           # Macro_definition
    |MACRO expression*                                                              # Macro
    |EACH expression each_aliases? each_body                                        # Each
    |WHILE test=expression DO while_body                                            # While_do
    |DO do_body WHILE test=expression                                               # Do_while
    |<assoc=right> expression ASSIGN expression                                     # Assignment
    |PO expression PC                                                               # P_expression
    |RAW_PHP+                                                                       # Raw_php
    |TABLE IDENTIFIER CBO table_header table_row+ CBC                                                                       # Table
;

table_header: PO IDENTIFIER* PC;
table_row: PO expression* PC;

//string: SINGLEQ (TEXT|CBO expression CBC)* SINGLEQ;

macro_param: CBO param=IDENTIFIER CBC;

param_list: params+=function_param (COMMA params+=function_param)* COMMA?;
function_param: IDENTIFIER (ASSIGN defaultValue=expression)?;

array_init:
            expression? (COMMA expression)* COMMA?  # Explicit
            | closed_range                          # Range
            | expression DOTDOT INF                 # Infinite
;

each_aliases: AS keyValueAlias=IDENTIFIER (ARROW valueAlias=IDENTIFIER)?;

map_init:
            map_pair (COMMA map_pair)* COMMA?   # Not_empty_Map
            |ARROW                              # Empty_Map
;
map_pair: STRING ARROW expression;

iterables_indexes:
            expression (COMMA expression)* COMMA? # Explicit_index_access
            | (open_range | closed_range)         # Range_index_access
            | index_helper                        # Helper_index_access
;

index_helper: (FIRST|LAST|NEXT);

closed_range: expression DOTDOT expression;
open_range:  (expression DOTDOT) | (DOTDOT expression);

expression_list:  expression (COMMA expression)*;

arg_list:  arg (COMMA arg)*;
arg: (expression | argPlaceholder);
argPlaceholder: QUESTION;

then_body : (expression)+;
else_body : (expression)+;
each_body : (expression)+;
while_body : (expression)+;
do_body : (expression)+;