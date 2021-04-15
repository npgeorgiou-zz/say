package nikos.ast.expressions;

import nikos.ast.Node;

import java.util.ArrayList;

public class DoWhile extends Node {
    public Node test;
    public ArrayList<Node> body = new ArrayList<>();

    public DoWhile() {

    }
}
