package nikos.ast;

public class Import extends Node {
    public String path;

    public Import(String path) {
        this.path = path;
    }
}