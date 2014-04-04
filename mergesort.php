<?php

define('N', 10000);

function MergeSort($n, $x, $offset) {

    $i = 0;
    $j = 0;
    $k = 0;
    $m = 0;

    if ($n <= 1) {
        return;
    }

    $m = ceil($n / 2);

    MergeSort($m, $x, $offset);
    MergeSort($n - $m, $x, $offset + $m);

    for ($i = 0; $i < $m; $i++) {
        $buffer[$i] = $x[$offset + $i];
    }

    $j = $m;
    $i = $k = 0;

    while ($i < $m and $j < $n) {

        if ($buffer[$i] <= $x[$offset + $j]) {
            $x[$offset + $k++] = $buffer[$i++];
        } else {
            $x[$offset + $k++] = $x[$offset + $j++];
        }
    }

    while ($i < $m) {
        $x[$offset + $k++] = $buffer[$i++];
    }

    //var_dump($x);
}

$i = 0;
$start_time = 0;
$end_time = 0;

srand(time());

for ($i = 0; $i < N; $i++) {
    $sort[$i] = rand();
}

$start_time = microtime(true);
MergeSort(N, $sort, 0);
$end_time = microtime(true);
echo $end_time - $start_time;
