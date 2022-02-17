#!/bin/sh

# This script needs to be put into autoload

nohup ./cron_test.sh 1 &
nohup ./cron_test.sh 2 &
nohup ./cron_test.sh 3 &
nohup ./cron_test.sh 4 &
