<?php
$handle = fopen('php://stdin', 'r');
fscanf($handle, '%d', $numTests);
for($i = 0; $i < $numTests; $i++) {
    $sNum = 0;
    $cNum = 0;
    $arrNum = 0;
    fscanf($handle, '%d %d', $sNum, $cNum);
    $times = explode(' ', fgets($handle));
    array_walk($times, 'intval');
    for ($j = 0; $j < count($times); $j++) {
        if ($times[$j] <= 0) {
            $arrNum++;
        }
    }
    if ($arrNum < $cNum) {
        echo "YES\n";
    } else {
        echo "NO\n";
    }
}
fclose($handle);
?>