<?php
// $file = fopen("courses.txt", "w");
// $txt = [
//     "PHP" => 1000,
//     "Java" => 2000,
//     "Python" => 3000,
//     "C++" => 4000,
//     "C#" => 5000
// ];

// // foreach ($txt as $key => $value) {
// //     fwrite($file, $key . " " . $value . "\n");
// // }

// fwrite($file, json_encode($txt));

// fclose($file);

$file = fopen("courses.txt", "r");

echo fread($file, filesize("courses.txt"));

fclose($file);
