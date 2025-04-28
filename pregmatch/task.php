<?php
// Array of words
$words = ["spain", "gain", "rain"];
$substring = "ain"; // The substring we're looking for
$count = 0; // Counter to keep track of the occurrences

// Loop through each word
foreach ($words as $word) {
    // Check if the substring "ain" exists in the word
    if (strpos($word, $substring) !== false) {
        $count++;
    }
}

?>