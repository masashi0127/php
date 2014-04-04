<?php
define('N', 10000);

function BinaryInsertSort($sort) {
    $i = $sorted = $temp = $insert = 0;
    $left = $mid = $right = 0;

    for ($sorted = 1; $sorted < N; $sorted++) {
        $insert = $sort[$sorted];

        $left = 0;
        $right = $sorted;

        while ($left < $right) {
            $mid = ($right + $left) / 2;

            if ($sort[$mid] < $insert) {
                $left = $mid + 1;

            } else {
                $right = $mid;

            }
        }

        $i = $left;

        while ($i < $sorted) {
            $temp = $sort[$i];
            $sort[$i] = $insert;
            $insert = $temp;
            $i++;
        }
    }
    var_dump($sort);
}

$i = 0;

srand(time());

for ($i = 0; $i < N; $i++) {
    $sort[$i] = rand();
}

$time_start = microtime(true);
BinaryInsertSort($sort);
$time_end = microtime(true);
echo $time_end - $time_start;

return true;