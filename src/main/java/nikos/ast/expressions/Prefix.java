package nikos.ast.expressions;

import nikos.ast.Node;

public class Prefix extends Node {
    public String operator;
    public Node expression;

    public Prefix(String operator, Node right) {
        this.operator = operator;
        this.expression = right;
    }
}
