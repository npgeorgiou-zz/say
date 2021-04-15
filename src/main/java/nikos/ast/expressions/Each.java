package nikos.ast.expressions;

import nikos.ast.Node;
import java.util.ArrayList;

public class Each extends Node {
    public Node iterable;
    public Identifier valueAlias;
    public Identifier keyAlias;
    public ArrayList<Node> body = new ArrayList<>();

    public Each() {

    }
}
