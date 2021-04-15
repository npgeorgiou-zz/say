package nikos.ast.expressions.literals;

import nikos.ast.Node;

import java.util.ArrayList;

public class Array extends Node {
    public Boolean range;
    public Boolean infinite;
    public Node start;
    public Node end;

    public ArrayList<Node> values;

    public Array() {
    }
}
