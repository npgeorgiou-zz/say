Fire up container
``` 
docker-compose build parser-generator && docker-compose up parser-generator
```

bash inside container
``` 
docker-compose exec parser-generator bash
```

Generate parser assets
```
antlr4 -Dlanguage=PHP -visitor -o build SayParser.g4 SayLexer.g4
```

Parse a simple file
```
php main.php test.say
```