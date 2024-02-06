<?php

// Remove whitespace from the beginning and end of a string
$string = "   Hello, World!   ";
$trimmedString = trim($string);
echo $trimmedString . "<br>"; // Output: "Hello, World!"

// Remove whitespace from the beginning of a string
$string = "   Hello, World!   ";
$leftTrimmedString = ltrim($string);
echo $leftTrimmedString . "<br>"; // Output: "Hello, World!   "

// Remove whitespace from the end of a string
$string = "   Hello, World!   ";
$rightTrimmedString = rtrim($string);
echo $rightTrimmedString . "<br>"; // Output: "   Hello, World!"

// Remove specific characters from the beginning and end of a string
$string = "###Hello, # World!###";
$trimmedString = trim($string, "#");
echo $trimmedString . "<br>"; // Output: "Hello, World!"
