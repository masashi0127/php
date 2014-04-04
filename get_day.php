<?php
$dates = array();

foreach (range(1, 28) as $d) {
    $weeks = array('日','月','火','水','木','金','土');
    $week_num = date('w', mktime (0, 0, 0, 2, $d, 2014));
    $dates[$d]['day'] = $weeks[$week_num];
 }

 print_r($dates);