<?php
$string = "Hello world!";
// strlen: length of string
echo strlen($string) . "\n"; // 12

// substr: cut string
echo substr($string, 6, 1) . "\n"; // w
echo substr($string, 6) . "\n"; // world!

// strpos: find the first position of a string
echo strpos($string, "wo", 0) . "\n"; // result: 6 - 0 is the start position to find

// str_word_count: count the number of words in a string
echo str_word_count($string) . "\n"; // 2

// str_replace: replace a string with another string
echo str_replace("world", "Dainji", $string) . "\n"; // Hello Dolly!

// strtoupper: convert string to uppercase
echo strtoupper($string) . "\n"; // HELLO WORLD!
echo strtolower($string) . "\n"; // hello world!

// strrev: reverse a string
echo strrev($string) . "\n"; // !dlrow olleH
echo trim(" hello        Dainji   !  !       ");

// explode: split a string into an array
$str = "Hello world. It's a beautiful day.";
print_r(explode(" ", $str));
