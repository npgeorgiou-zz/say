package nikos.ast.expressions.literals;

import nikos.ast.Node;

public class Str extends Node {
    public java.lang.String value;

    public Str(java.lang.String value) {
        this.value = value;
    }
}
