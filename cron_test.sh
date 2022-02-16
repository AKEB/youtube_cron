#!/bin/sh

PHP="php -d memory_limit=128M -d error_log=${PWD}/cron_test.log"

while [ 1 ];
do
    result=`${PHP} cron_test.php $1`
    status=$?
    echo $result
    if [ $status -eq 0 ]
    then
        sleep_str="${result##*$'\n'}"
        if [[ $sleep_str =~ "sleep" ]]
        then
            sleep="${sleep_str##*$' '}"
            sleep $sleep
        fi
    else
        sleep 2
    fi
done
