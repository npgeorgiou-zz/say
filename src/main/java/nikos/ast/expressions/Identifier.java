package nikos.ast.expressions;

import nikos.ast.Node;

public class Identifier extends Node {
    public String id;

    public Identifier(String id) {
        this.id = id;
    }
}
