<?php
require __DIR__ . '/vendor/autoload.php';
require_once './lib/all.php';

transpileAndExecuteIn('tests');
transpileAndExecuteIn('katas');

function transpileAndExecuteIn($dir) {
    echo "executing $dir" . PHP_EOL;

    $kataAstFiles = array_diff(scandir("input/$dir"), ['..', '.']);
    foreach ($kataAstFiles as $it) {
        echo shell_exec("php transpile.php input/$dir/$it");
    }

    $kataFiles = array_diff(scandir("output/$dir"), ['..', '.']);
    foreach ($kataFiles as $it) {
        echo $it . ': ' . shell_exec("php output/$dir/$it") . PHP_EOL;
    }

    echo PHP_EOL;
}