/*
Here's a PHP exercise that reads user input from stdin (standard input) 
and uses the strpos function to search for a specific word within a predefined 
list of words in an array. 

In this version, the user is prompted to enter a word directly in the 
command-line environment, and the PHP script reads the input using fgets(STDIN). 

You'll need: trim(), arrays, foreach(), strpos() and if statements
*/

<?php

echo "Word Search\n";
echo "Enter a word to search for: ";

// Read the user's input from stdin
$searchWord = trim(fgets(STDIN));

$wordlist = ["apple", "banana", "cherry", "date", "grape", "kiwi", "lemon", "mango", "orange", "pear"];

$found = false;
foreach ($wordlist as $index => $word) {
    if (strpos($word, $searchWord) !== false) {
        $found = true;
        echo "The word '$searchWord' was found in the list at position $index.\n";
        break;
    }
}

if (!$found) {
    echo "The word '$searchWord' was not found in the list.\n";
}
