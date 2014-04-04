<?php
ini_set('xdebug.max_nesting_level', 200);
define('N', 10000);

$sort = array();

function QuickSort($bottom, $top, $data) {
    $lower = 0;
    $div = 0;
    $upper = 0;
    $div = 0;
    $temp = 0;

    if ($bottom >= $top) {
        return;
    }

    $div = $data[$bottom];

    for ($lower = $bottom, $upper = $top; $lower < $upper;) {

        while ($lower <= $upper and $data[$lower] <= $div) {
            $lower++;
        }

        while ($lower <= $upper and $data[$upper] > $div) {
            $upper--;
        }

        if ($lower < $upper) {
            $temp = $data[$lower];
            $data[$lower] = $data[$upper];
            $data[$upper] = $temp;
        }
    }

    $temp = $data[$bottom];
    $data[$bottom] = $data[$upper];
    $data[$upper] = $temp;

    QuickSort($bottom, $upper - 1, $data);
    QuickSort($upper + 1, $top, $data);
}

$i = 0;
$start_time = 0;
$end_time = 0;

srand(time());

for ($i = 0; $i < N; $i++) {
    $sort[$i] = rand();
}

$start_time = microtime(true);
QuickSort(0, N - 1, $sort);
$end_time = microtime(true);
echo $end_time - $start_time;

return true;
