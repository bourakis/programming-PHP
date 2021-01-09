<?php
$cars = array("Volvo", "BMW", "Toyota");

sort($cars);

$array_length = count($cars);

for($x=0; $x < $array_length; $x++)
{
    echo $cars[$x];
    echo "<br>";
}
?>
