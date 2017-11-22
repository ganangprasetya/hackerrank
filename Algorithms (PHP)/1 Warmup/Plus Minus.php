<?php
$handle = fopen('php://stdin', 'r');
fscanf($handle, '%d', $size);
$arr = explode(' ', fgets($handle));
array_walk($arr, 'intval');
$positive = 0;
$negative = 0;
$zeros = 0;
for ($i = 0; $i < $size; $i++) {
    if ($arr[$i] > 0) {
        $positive++;
    } elseif ($arr[$i] < 0) {
        $negative++;
    } else {
        $zeros++;
    }
}
echo (float) round($positive / $size, 6)."\n";
echo (float) round($negative / $size, 6)."\n";
echo (float) round($zeros / $size, 6)."\n";
fclose($handle);
?>