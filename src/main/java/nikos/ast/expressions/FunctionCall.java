package nikos.ast.expressions;

import nikos.ast.Node;

import java.util.ArrayList;

public class FunctionCall extends Node {
    public Node object;
    public ArrayList<Node> args = new ArrayList<>();

    public FunctionCall() {

    }
}
