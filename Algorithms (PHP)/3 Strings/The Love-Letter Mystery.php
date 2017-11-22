<?php
$_fp = fopen("php://stdin", "r");
$test_cases = (int) fgets($_fp);
for ($i = 0; $i < $test_cases; $i++) {
    fscanf($_fp, "%s", $word);
    if ((preg_match('/[^a-z]/', $word) === 0) && (strlen($word) > 0)) {
        echo sprintf("%d\n", getRoundsToPalindrom($word));
    }
}
fclose($_fp);
function getRoundsToPalindrom($word)
{
    $str_array = str_split($word);
    $str_len = count($str_array);
    $max_pos = round($str_len / 2);
    $counter = 0;
    for ($pos = 0; $pos < $max_pos; $pos++) {
        if ($str_array[$pos] === $str_array[($str_len - 1) - $pos]) {
            continue;
        }
        while ($str_array[$pos] !== $str_array[($str_len - 1) - $pos]) {
            $counter++;
            $pos_letters_ahead = ord($str_array[$pos]);
            $pos_letters_behind = ord($str_array[($str_len - 1) - $pos]);
            if ($pos_letters_ahead > $pos_letters_behind) {
                $str_array[$pos] = chr($pos_letters_ahead - 1);
            } else {
                $str_array[($str_len - 1) - $pos] = chr($pos_letters_behind - 1);
            }
        }
    }
    return $counter;
}
?>