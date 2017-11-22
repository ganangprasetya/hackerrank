<?php
$handle = fopen ('php://stdin', 'r');
fscanf($handle, '%d', $numTests);
for ($i = 0; $i < $numTests; $i++) {
    $tree_size = 1;
    $cycles = fgets($handle);
    for ($j = 1; $j <= $cycles; $j++) {
        $mod = ($j % 2);
        $tree_size = ($mod === 0) ? $tree_size + 1 : $tree_size * 2;
    }
    echo sprintf("%d\n", $tree_size);
}
fclose($handle);
?>