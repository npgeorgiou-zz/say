<?php
require __DIR__ . '/vendor/autoload.php';
require_once './lib/all.php';

$sourceFile = $argv[1] ?? 'playground';

transpileAndExecute($sourceFile);

function transpileAndExecute($pathAndFilename) {
    echo "executing $pathAndFilename.say.json" . PHP_EOL;
    echo shell_exec("php transpile.php input/$pathAndFilename.say.json");
    echo shell_exec("php output/$pathAndFilename.say.php") . PHP_EOL;
    echo PHP_EOL;
}
