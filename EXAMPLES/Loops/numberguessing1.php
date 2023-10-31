<?php

// Generate a random number between 1 and 100
$secretNumber = rand(1, 100);
$attempts = 0;
$maxAttempts = 10;

echo "Welcome to the Number Guessing Game!\n";
echo "I've selected a random number between 1 and 100. You have $maxAttempts attempts to guess it.\n";

while ($attempts < $maxAttempts) {
    echo "Enter your guess (between 1 and 100): ";
    $guess = (int)trim(fgets(STDIN));
    $attempts++;

    if ($guess < 1 || $guess > 100) {
        echo "Please enter a valid number between 1 and 100.\n";
        continue;
    }

    if ($guess === $secretNumber) {
        echo "Congratulations! You guessed the correct number, which was $secretNumber.\n";
        echo "It took you $attempts attempts.\n";
        break;
    } elseif ($guess < $secretNumber) {
        echo "Try a higher number.\n";
    } else {
        echo "Try a lower number.\n";
    }
}

if ($attempts === $maxAttempts) {
    echo "Sorry, you've run out of attempts. The correct number was $secretNumber.\n";
}
