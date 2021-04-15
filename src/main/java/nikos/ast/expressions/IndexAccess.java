package nikos.ast.expressions;

import nikos.ast.Node;

import java.util.ArrayList;

public class IndexAccess extends Node {
    public Node object;

    public ArrayList<Node> indexes = new ArrayList<>();

    public Boolean range;
    public Node start;
    public Node end;

    public IndexAccess() { }
}
