package nikos.ast.expressions;

import nikos.ast.Node;
import java.util.ArrayList;

public class If extends Node {
    public Node test;
    public ArrayList<Node> thenStatements = new ArrayList<>();
    public ArrayList<Node> elseStatements = new ArrayList<>();

    public If() {

    }
}
