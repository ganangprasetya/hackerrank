<?php 
    
//get the handle for input.
$handle = fopen('php://stdin', 'r');

//get the number of items.
fscanf($handle, '%d', $numItems);

//get the numbers as array and convert the numbers to integer.
$arr = explode(' ', fgets($handle));
array_walk($arr, 'intval');

//init the sum of the numbers.
$sum = 0;

//run through all numbers to sum.
for ($i = 0; $i < $numItems; $i++) {
    $sum += $arr[$i];
}

//output the sum of the numbers.
echo $sum;

//close the handle.
fclose($handle);