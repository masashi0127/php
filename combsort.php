<?php
define('N', 10000);

$sort = array();

function CombSort($sort) {
    $i = 0;
    $flag = true;
    $temp = 0;
    $gap = 0;
    
    $gap = N;

    do {
        $gap = $gap * 10 / 13;

        if ($gap == 0) {
            $gap = 1;
        }

        $flag = true;

        for ($i = 0; $i < N - $gap; $i++) {

            if ($sort[$i] > $sort[$i + $gap]) {
                $temp = $sort[$i];
                $sort[$i] = $sort[$i + $gap];
                $sort[$i + $gap] = $temp;
            }
        }

    } while ($gap > 1 or !$flag);
}

$i = 0;

srand(time());

for ($i = 0; $i < N; $i++) {
    $sort[$i] = rand();
}

$time_start = microtime(true);
CombSort($sort);
$time_end = microtime(true);
echo $time_end - $time_start;

return true;