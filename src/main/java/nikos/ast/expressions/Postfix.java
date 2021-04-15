package nikos.ast.expressions;

import nikos.ast.Node;

public class Postfix extends Node {
    public String operator;
    public Node expression;

    public Postfix(String operator, Node right) {
        this.operator = operator;
        this.expression = right;
    }
}
