package nikos;

import com.fasterxml.jackson.databind.ObjectMapper;
import nikos.ast.Node;
import main.java.nikos.generated.SayLexer;
import main.java.nikos.generated.SayParser;
import org.antlr.v4.runtime.*;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;

public class MainClass {
    public static void main(String[] args) throws IOException {
        String input = null;
        String output = null;

        if (args.length == 0) {
            input = "./say/playground.say";
            output = "./sayAST/playground.say.json";
        } else {
            input = args[0];
            output = args[1];
        }

        CharStream inputStream = CharStreams.fromFileName(input);

        SayLexer sayLexer = new SayLexer(inputStream);
        CommonTokenStream tokens = new CommonTokenStream(sayLexer);

        SayParser sayParser = new SayParser(tokens);

        SayParser.TopContext tree = sayParser.top();

        BuildSayASTVisitor visitor = new BuildSayASTVisitor();
        Node ast = visitor.visitTop(tree);
        toFile(output, toString(ast));
    }

    private static String toString(Node ast) throws IOException {
        ObjectMapper mapper = new ObjectMapper();
        return mapper.writerWithDefaultPrettyPrinter().writeValueAsString(ast);
    }

    private static void toFile(String path, String ast) throws IOException {
        File file = new File(path);      //foo/bar.baz.json
        File dir = file.getParentFile(); //foo/bar
        dir.mkdirs();

        FileWriter myWriter = new FileWriter(file);
        myWriter.write(ast);
        myWriter.close();
    }
}