package nikos.ast.expressions;

import nikos.ast.Node;

import java.util.ArrayList;

public class MethodCall extends Node {
    public Node object;
    public Identifier identifier;
    public ArrayList<Node> args = new ArrayList<>();

    public MethodCall() {

    }
}
