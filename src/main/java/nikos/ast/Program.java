package nikos.ast;

import java.util.ArrayList;

public class Program extends Node {
    public String name = "default";
    public ArrayList<Node> statements = new ArrayList<>();
}
