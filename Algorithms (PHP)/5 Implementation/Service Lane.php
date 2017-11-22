<?php
$handle = fopen ('php://stdin', 'r');
$segments = 0;
$numTests = 0;
fscanf($handle, '%d %d', $segments, $numTests);
$service_lane = explode(' ', fgets($handle));
for ($i = 0; $i < $numTests; $i++) {
    $vehicle = 0;
    $areaStart = 0;
    $areaEnd = 0;
    fscanf($handle, '%d %d', $areaStart, $areaEnd);
    if (($areaStart < count($service_lane)) && ($areaEnd < count($service_lane))) {
        for ($j = $areaStart; $j <= $areaEnd; $j++) {
            if (($service_lane[$j] < $vehicle) || ($vehicle === 0)) {
                $vehicle = $service_lane[$j];
            }
        }
    }
    echo sprintf("%d\n", $vehicle);
}
fclose($handle);
?>