<?php
$_fp = fopen("php://stdin", "r");
$search_value = fgets($_fp);
$num_values = fgets($_fp);
$values = explode(' ', fgets($_fp));
for ($i = 0; $i < count($values); $i++) {
    if (intval($values[$i]) === intval($search_value)) {
        echo sprintf("%d", $i);
        break;
    }
}
fclose($_fp);
?>