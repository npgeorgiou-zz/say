package nikos.ast.expressions;

import nikos.ast.Node;

import java.util.ArrayList;

public class Function extends Node {
    public ArrayList<Node> params = new ArrayList<>();
    public ArrayList<Node> body = new ArrayList<>();

    public Function() {

    }
}
