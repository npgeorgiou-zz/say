package nikos.ast.expressions.literals;

import nikos.ast.Node;

public class Bool extends Node {
    public java.lang.Boolean value;

    public Bool(java.lang.Boolean value) {
        this.value = value;
    }
}
