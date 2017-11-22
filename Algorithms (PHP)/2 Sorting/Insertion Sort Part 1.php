<?php
$_fp = fopen("php://stdin", "r");
$count = fgets($_fp);
$array = explode(' ', fgets($_fp));
$insert_value = $array[$count - 1];
for ($i = ($count - 1); $i >= 0; $i--) {
    if ($i == 0) {
        $array[$i] = $insert_value;
        echo implode(' ', $array)."\n";
        break;
    }
    if ($array[$i - 1] > $insert_value) {
        $array[$i] = $array[$i - 1];
        echo implode(' ', $array)."\n";
    } else {
        $array[$i] = $insert_value;
        echo implode(' ', $array)."\n";
        break;
    }
}
fclose($_fp);
?>