<?php
echo "<pre>";

// $isFile = is_file("../File/courses.txt");
// echo $isFile ? "File exists" : "File not exists";

// echo "<br>";

// $isDir = is_dir("../handleFile");
// echo $isDir ? "Directory exists" : "Directory not exists";

// echo "<br>";

// $isFile = file_exists("../handleFile"); // check if the directory or file is exist
// var_dump($isFile);

// echo "<br>";

// $getcwd = getcwd(); // get current working directory - same as __DIR__
// echo "Current working directory: " . $getcwd;

// $scanDir = scandir("../"); // scan all of file/directory in path
// print_r($scanDir);

$data = [
    [
        "class" => "12a1",
        "student" => [
            ["name" => "dainji", "age" => 18],
            ["name" => "daiji", "age" => 19],
            ["name" => "daiji", "age" => 20]
        ]
    ],
    [
        "class" => "12a2",
        "student" => [
            ["name" => "dainji", "age" => 18],
            ["name" => "daiji", "age" => 19],
            ["name" => "daiji", "age" => 20]
        ]
    ]
];

$json = json_encode($data);
file_put_contents("data.json", $json);

$content = file_get_contents("data.json");
print_r(json_decode($content, true));
