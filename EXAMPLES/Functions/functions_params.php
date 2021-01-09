<html>
<head>
    <title>Writing PHP Function with Parameters</title>
</head>

<body>

<?php
    
function add_function($num1, $num2) 
{
    $sum = $num1 + $num2;
    echo "Sum of the two numbers is: $sum";
}
    
function get_sum($num1, $num2)
{
    return $num1 + $num2;
}

    
    
add_function(10, 20);

echo '<br>';

$result = get_sum(3, 6);
    
echo 'Sum of the two numbers is:' . $result;

    
   
?>

</body>
</html>
