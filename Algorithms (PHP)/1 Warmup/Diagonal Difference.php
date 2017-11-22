<?php
$handle = fopen('php://stdin', 'r');
fscanf($handle, '%d', $size);
$matrix = [];
$sumLeft = 0;
$sumRight = 0;
for ($i = 0; $i < $size; $i++) {
    $matrix[] = explode(' ', fgets($handle));
    array_walk($matrix[$i], 'intval');
}
for ($j = 0; $j < $size; $j++) {
    $sumLeft += $matrix[$j][$j];
    $sumRight += $matrix[$j][($size - 1) - $j];
}
echo abs($sumLeft - $sumRight);
fclose($handle);
?>