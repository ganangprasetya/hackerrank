<?php
$handle = fopen('php://stdin', 'r');
$input_act = fscanf($handle, "%d %d %d");
$input_exp = fscanf($handle, "%d %d %d");
$hackos = 0;
if ($input_act[2] > $input_exp[2]) {
    $hackos = 10000;
} elseif ($input_act[2] == $input_exp[2]) {
    if ($input_act[1] > $input_exp[1]) {
        $hackos = 500 * ($input_act[1] - $input_exp[1]);
    } elseif ($input_act[1] == $input_exp[1]) {
        if ($input_act[0] > $input_exp[0]) {
            $hackos = 15 * ($input_act[0] - $input_exp[0]);
        }
    }
}
echo $hackos;
fclose($handle);
?>