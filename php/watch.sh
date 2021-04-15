#!/bin/bash

# For some weird reason the modify inotify event is fired twice
runNextTime=false

#inotifywait -m -e modify input/ast.json| while read file; do
#    if [ $runNextTime = false ]
#    then
#      runNextTime=true
#      continue
#    else
#      runNextTime=false
#    fi
#
#    echo ''
#    echo 'Transpiling...'
#    php transpile.php
#    echo 'Executing...'
#    php output/transpiled.php
#    echo 'Done.'
#done

inotifywait -m -r -e modify --format '%w%f' input/ | while read file; do
    if [ $runNextTime = false ]
    then
      runNextTime=true
      continue
    else
      runNextTime=false
    fi

    echo ''
    echo "Transpiling $file..."

    outputFile=${file#"input/"}
    outputFile=${outputFile%".json"}

    php transpile.php $file output/$outputFile.php
    echo 'Executing changed file...'
    php output/$outputFile.php

    echo ''
    echo 'Executing tests...'
    php test.php

    echo 'Done.'
done

