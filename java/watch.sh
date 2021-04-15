#!/bin/bash

# For some weird reason the modify inotify event is fired twice
runNextTime=false

#inotifywait -m -e modify input/playground.say | while read file; do
#    if [ $runNextTime = false ]
#    then
#      runNextTime=true
#      continue
#    else
#      runNextTime=false
#    fi
#
#    echo ''
#    echo 'Parsing...'
#    java -jar jar/parser.jar input/playground.say output/ast.json
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
    echo "Parsing $file..."

    outputFile=${file#"input/"}

    java -jar jar/parser.jar $file output/$outputFile.json

    echo 'Done.'
done
