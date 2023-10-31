/*
Number guessing game in PHP.
*/
<?php

// Generate a random number between 1 and 100
$secretNumber = rand(1, 100);
$attempts = 0;

echo "Welcome to the Number Guessing Game!\n";
echo "I've selected a random number between 1 and 100. Try to guess it!\n";

while (true) 
{
    echo "Enter your guess: ";
    $guess = (int)trim(fgets(STDIN));
    $attempts++;

    if ($guess === $secretNumber) 
    {
        echo "Congratulations! You guessed the correct number, which was $secretNumber.\n";
        echo "It took you $attempts attempts.\n";
        break;
    } 
    elseif ($guess < $secretNumber) 
    {
        echo "Try a higher number.\n";
    } 
    else 
    {
        echo "Try a lower number.\n";
    }
}
