<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($string)
{
    $vowelCount = preg_match_all('/[aeiou]/i', $string);
    return $vowelCount;
}


foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = strrev($string);

    // Print the results
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
