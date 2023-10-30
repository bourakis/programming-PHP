<?php
/* 
In this example, the foreach loop is used to iterate through the 
$fruits array, and for each iteration, the current element of the 
array (a fruit name) is assigned to the variable $fruit. The loop 
then echoes a message expressing love for each fruit in the array. 
*/

// Define an array of fruits
$fruits = ["apple", "banana", "cherry", "date", "grape", "kiwi", "lemon", "mango", "orange", "pear"];

// Use a foreach loop to iterate through the array
foreach ($fruits as $fruit) 
{
    echo "I love $fruit!\n";
}
