package nikos.ast.expressions;

import nikos.ast.Node;

public class Infix extends Node {
    public Node left;
    public String operator;
    public Node right;


    public Infix(Node left, String operator, Node right) {
        this.left = left;
        this.operator = operator;
        this.right = right;
    }
}
