<?php
    
//get the handle for input.
$handle = fopen('php://stdin', 'r');

//get the size of the matrix.
fscanf($handle, '%d', $size);

//init the array for the matrix and the diagonal sums.
$matrix = [];
$sumLeft = 0;
$sumRight = 0;

//run through all matrix rows.
for ($i = 0; $i < $size; $i++) {
    //get the row of the matrix and convert the items to integer.
    $matrix[] = explode(' ', fgets($handle));
    array_walk($matrix[$i], 'intval');
}

//run through the matrix to get the diagonal sum.
for ($j = 0; $j < $size; $j++) {
    $sumLeft += $matrix[$j][$j];
    $sumRight += $matrix[$j][($size - 1) - $j];
}

//output the difference between the sums.
echo abs($sumLeft - $sumRight);

//close the handle.
fclose($handle);