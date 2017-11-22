<?php
$handle = fopen('php://stdin', 'r');
fscanf($handle, '%d', $numSteps);
for ($i = 1; $i <= $numSteps; $i++) {
    echo str_repeat(' ', $numSteps - $i).str_repeat('#', $i)."\n";
}
fclose($handle);
?>