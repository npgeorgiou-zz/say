package nikos.ast.expressions.literals;

import nikos.ast.Node;
import java.math.BigDecimal;

public class Dec extends Node {
    public java.math.BigDecimal value;

    public Dec(BigDecimal value) {
        this.value = value;
    }
}
