<?php
$handle = fopen('php://stdin', 'r');
$yes = false;
$x1 = $x2 = $v1 = $v2 = 0;
fscanf($handle, '%d %d %d %d', $x1, $v1, $x2, $v2);
for ($i = 0; $i <= 10000; $i++) {
    if ($x1 == $x2) {
        $yes = true;
        break;
    }
    $x1 += $v1;
    $x2 += $v2;
}
echo $yes ? 'YES' : 'NO';
fclose($handle);
?>