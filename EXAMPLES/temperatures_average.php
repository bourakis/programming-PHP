<?php
// Average temperature calculation
// using arrays.

$temp = array();
$temp[0] = 25;
$temp[1] = 26;
$temp[2] = 28;
$temp[3] = 30;
$temp[4] = 33;
$temp[5] = 33;
$temp[6] = 33;

   
$sum = 0;
for($k = 0; $k < count($temp); $k++) 
{
    $sum = $sum + $temp[$k];
}

$average = $sum / count($temp);

echo "Average temperature: " . $average;
?>
