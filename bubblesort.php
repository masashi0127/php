<?php
define('N', 10000);

$sort = array();

function BubbleSort($sort) {
    $i = 0;
    $j = 0;
    $flag = false;
    $k = 0;

    do {
        $flag = false;

        for ($i = 0; $i < N - 1 - $k; $i++) {

            if ($sort[$i] > $sort[$i + 1]) {
                $flag = true;
                $j = $sort[$i];
                $sort[$i] = $sort[$i + 1];
                $sort[$i + 1] = $j;
            }
        }

        $k++;

    } while ($flag == true);

}

$i = 0;

srand(time());

for ($i = 0; $i < N; $i++) {
    $sort[$i] = rand();
}

$time_start = microtime(true);
BubbleSort($sort);
$time_end = microtime(true);
echo $time_end - $time_start;

return true;