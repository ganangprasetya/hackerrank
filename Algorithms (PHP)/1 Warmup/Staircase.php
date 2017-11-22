<?php
    
//get the handle for input.
$handle = fopen('php://stdin', 'r');

//get the number of steps.
fscanf($handle, '%d', $numSteps);

//create the stairs and output.
for ($i = 1; $i <= $numSteps; $i++) {
    echo str_repeat(' ', $numSteps - $i).str_repeat('#', $i)."\n";
}

//close the handle.
fclose($handle);