<?php
    
$handle = fopen('php://stdin', 'r');

fscanf($handle, '%s', $time);
$timeArr = explode(':', str_replace(['AM', 'PM'], '', $time));
$timeArr[0] += 12;
if (strpos($time, 'AM') > 0) {
    $timeArr[0] = $timeArr[0] % 12;
} else {
    $timeArr[0] = $timeArr[0] % 24;
    $timeArr[0] = $timeArr[0] == 0 ? 12 : $timeArr[0];
}
echo str_pad($timeArr[0], 2, '0', STR_PAD_LEFT).':'.$timeArr[1].':'.$timeArr[2];
fclose($handle);
?>