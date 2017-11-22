<?php 
$handle = fopen ("php://stdin", "r");
function birthdayCakeCandles($n, $ar) {
    
    $max = $ar[0];
    $counts = [];
    foreach($ar as $a) {
      if(isset($counts[$a])) {
          $counts[$a]++;
      }else {
        $counts[$a] = 1;
      }
      
      if($a > $max) {
        $max = $a; 
      } 
    }
    return $counts[$max];
}
fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = birthdayCakeCandles($n, $ar);
echo $result . "\n";
?>