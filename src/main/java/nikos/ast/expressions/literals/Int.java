package nikos.ast.expressions.literals;

import nikos.ast.Node;

public class Int extends Node {
    public java.lang.Integer value;

    public Int(java.lang.Integer value) {
        this.value = value;
    }
}
