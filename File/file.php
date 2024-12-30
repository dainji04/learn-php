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

// $file = fopen("courses.txt", "w+"); // create file if not exist and write
// $file = fopen("courses.txt", "r+"); // read and write, if file not exist then error
$file = fopen("courses.txt", "a+"); // read and write, if file not exist then create. the pointer is at the end of the file
// $file = fopen("courses.txt", "x+"); // create file if not exist and read and write, return false and failed if file already exist

// $txt = [
//     "PHP" => 1000,
//     "Java" => 2000,
//     "Python" => 3000,
//     "C++" => 4000,
//     "C#" => 5000
// ];

$x = ["vue" => 1000, "react" => 2000, "angular" => 3000];

// fwrite($file, json_encode($x));

echo fread($file, filesize("courses.txt"));

fclose($file);
