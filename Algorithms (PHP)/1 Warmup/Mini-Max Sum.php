<?php
$_fp = fopen("php://stdin", "r");

$l = fgets($_fp);
$l = explode(' ',$l);
array_walk($l, 'intval');
sort($l); $min = 0; $max = 0;
for ($i = 0; $i < 4; $i++) $min += $l[$i];
for ($i = count($l)-1; $i > count($l)-5; $i--) $max += $l[$i];
echo $min." ".$max."\n";
?>
