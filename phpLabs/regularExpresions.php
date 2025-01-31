<?php
// Regular Expressions in PHP

// A regular expression is a sequence of characters that forms a search pattern.
// When you search for data in a text, you can use this search pattern to describe what you are searching for.

// Example of a simple regular expression
$pattern = "/php/i"; // The pattern to search for (case-insensitive)
$text = "PHP is the web scripting language of choice.";

// preg_match() function searches string for pattern, returning true if pattern exists, and false otherwise
if (preg_match($pattern, $text)) {
    echo "Match found!";
} else {
    echo "Match not found.";
}

// Example of using regular expressions to replace text
$pattern = "/web/i";
$replacement = "server-side";
$text = "PHP is the web scripting language of choice.";
$new_text = preg_replace($pattern, $replacement, $text);

echo "\nOriginal text: $text";
echo "\nModified text: $new_text";

// Example of using regular expressions to split a string
$pattern = "/[\s,]+/";
$text = "PHP, JavaScript, HTML, CSS";
$parts = preg_split($pattern, $text);

echo "\nSplit text:";
print_r($parts);

// Example of using regular expressions to find all matches
$pattern = "/\b\w{3}\b/";
$text = "The quick brown fox jumps over the lazy dog.";
preg_match_all($pattern, $text, $matches);

echo "\nWords with exactly 3 letters:";
print_r($matches[0]);
?>