package nikos.ast.expressions;

import nikos.ast.Node;

import java.util.ArrayList;

public class Macro extends Node {
    public ArrayList<Node> keywordsParamsOrder = new ArrayList<>();
    public ArrayList<Node> keywords = new ArrayList<>();
    public ArrayList<Node> params = new ArrayList<>();
    public ArrayList<Node> body = new ArrayList<>();

    public Macro() {

    }
}
