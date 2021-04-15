package nikos.ast.expressions;

import nikos.ast.Node;

public class PropertyAccess extends Node {
    public Node object;
    public Identifier identifier;

    public PropertyAccess() {

    }
}
