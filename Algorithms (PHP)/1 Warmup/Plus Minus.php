<?php
    
//get the handle for input.
$handle = fopen('php://stdin', 'r');

//get the size of the array.
fscanf($handle, '%d', $size);

//get the array of numbers and convert to integers.
$arr = explode(' ', fgets($handle));
array_walk($arr, 'intval');

//init the counter.
$positive = 0;
$negative = 0;
$zeros = 0;
//run through the array and count the numbers of positive, negative and zero numbers.
for ($i = 0; $i < $size; $i++) {
    //check which number is available.
    if ($arr[$i] > 0) {
        $positive++;
    } elseif ($arr[$i] < 0) {
        $negative++;
    } else {
        $zeros++;
    }
}

//output the different groups.
echo (float) round($positive / $size, 6)."\n";
echo (float) round($negative / $size, 6)."\n";
echo (float) round($zeros / $size, 6)."\n";

//close the handle.
fclose($handle);