<?php
echo "<h2>PHP String Functions</h2>";

$str = "  Hello PHP World  ";
echo "Original String: '$str'<br><br>";

/* Basic */
echo "Length: " . strlen($str) . "<br>";
echo "Word Count: " . str_word_count($str) . "<br>";
echo "Reverse: " . strrev($str) . "<br><br>";

/* Case */
echo strtoupper($str) . "<br>";
echo strtolower($str) . "<br>";
echo ucfirst("php") . "<br>";
echo ucwords("php string functions") . "<br><br>";

/* Search & Replace */
echo "Position of PHP: " . strpos($str, "PHP") . "<br>";
echo str_replace("PHP", "Programming", $str) . "<br><br>";

/* Substring & Trim */
echo substr($str, 2, 5) . "<br>";
echo trim($str) . "<br>";
echo ltrim($str) . "<br>";
echo rtrim($str) . "<br><br>";

/* Compare */
echo strcmp("hello", "Hello") . "<br>";
echo strcasecmp("hello", "Hello") . "<br><br>";

/* Security */
echo htmlspecialchars("<h1>Hello</h1>") . "<br>";
echo addslashes("I'm learning PHP") . "<br>";
?>
