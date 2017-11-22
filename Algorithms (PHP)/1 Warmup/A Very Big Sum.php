<?php 
$handle = fopen('php://stdin', 'r');
fscanf($handle, '%d', $numItems);
$arr = explode(' ', fgets($handle));
array_walk($arr, 'intval');
$sum = 0;
for ($i = 0; $i < $numItems; $i++) {
    $sum += $arr[$i];
}
echo $sum;
fclose($handle);
?>
