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

// $x = ["vue" => 1000, "react" => 2000, "angular" => 3000];

// // fwrite($file, json_encode($x));

// $content = fread($file, filesize("courses.txt"));
// echo $content;

// fclose($file);

// unlink("courses.txt");

// echo __FILE__ . PHP_EOL;

// echo __DIR__ . PHP_EOL;

// echo dirname(__FILE__) . PHP_EOL;

// echo dirname(__DIR__) . PHP_EOL;

// echo basename(__FILE__) . PHP_EOL;

// echo dirname(__DIR__) . PHP_EOL;

// echo realpath("file.php") . PHP_EOL;

// print_r(pathinfo(__FILE__));

/** REQUIRE, REQUIRE ONCE AND INCLUDE, INCLUDE ONCE */

require_once("./requireFile.php"); // relative path
// require_once(__DIR__ . "/requireFile.php"); - ABSOLUTE PATH

print_r($config); // array
