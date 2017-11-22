<?php
$handle = fopen('php://stdin', 'r');
fscanf($handle, '%d', $numTests);
for ($i = 0; $i < $numTests; $i++) {
    fscanf($handle, '%d', $numItems);
    $arr = explode(' ', fgets($handle));
    array_walk($arr, 'intval');
    $sumArr = array_sum($arr);
    $sumLeft = 0;
    $isYES = false;
    for ($j = 1; $j < $numItems; $j++) {
        $sumLeft += $arr[$j - 1];
        if ($sumLeft == ($sumArr - $sumLeft - $arr[$j])) {
            $isYES = true;
            break;
        }
    }
    echo ($isYES || $numItems == 1) ? "YES\n" : "NO\n";
}
fclose($handle);
?>