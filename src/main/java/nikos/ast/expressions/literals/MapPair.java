package nikos.ast.expressions.literals;

import nikos.ast.Node;

public class MapPair extends Node {
    public Node key;
    public Node value;

    public MapPair(Node key, Node value) {
        this.key = key;
        this.value = value;
    }
}
