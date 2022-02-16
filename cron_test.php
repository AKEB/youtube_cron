<?php

$script_num = isset($_SERVER['argv'][1]) ? intval($_SERVER['argv'][1]) : 0;
echo "my_script_num=" . $script_num . PHP_EOL;

$queue_count = rand(0, 1000);
$need_script_count = intval($queue_count / 500) + 1;
echo "queue count=" . $queue_count . " need=" . $need_script_count . PHP_EOL;

if ($script_num > $need_script_count) {
	echo "sleep 5";
	exit(0);
}


$start_script_time = time();

echo "Start script time " . date("H:i:s") . PHP_EOL;

function some_useful_work() {
	sleep(rand(0, 10));
}

some_useful_work();

echo "End script time " . date("H:i:s") . PHP_EOL;

$end_script_time = time();

$sleep = max(10 - ($end_script_time - $start_script_time), 0);

echo "sleep $sleep";
