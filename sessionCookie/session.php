<?php
session_start();
echo "<pre>";

$_SESSION["Name"] = "Dainji";
$_SESSION["Email"] = "ndai31072004@gmail.com";
$_SESSION["Cart"] = [
    ["id" => 1, "name" => "Product 1", "price" => 1000],
    ["id" => 2, "name" => "Product 2", "price" => 2000],
    ["id" => 3, "name" => "Product 3", "price" => 3000],
    ["id" => 4, "name" => "Product 4", "price" => 4000],
    ["id" => 5, "name" => "Product 5", "price" => 5000],
];

print_r($_SESSION);

echo $_SESSION["Name"] . PHP_EOL;
echo $_SESSION["Cart"][0]["name"] . PHP_EOL;

echo "<=====================UNSET=====================>" . PHP_EOL;

unset($_SESSION["Name"]);

print_r($_SESSION);

echo "<=====================DESTROY=====================>" . PHP_EOL;
session_destroy();
session_start();

print_r($_SESSION);
