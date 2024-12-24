<?php 

// constant variable
define("NAME", "Dainji");
define("AGE", 18);

const a = 18;
echo a;
echo "<br>";
function x() {
    echo "My name is " . NAME . " and i am " . AGE . " years old<br>";
}
x();
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];

// variable
$int = 1;
$string = 'Dainji';
$float = 1.1;
$bool = true;
$array = [1, "1", 1.1, true];

echo "My name is $string <br>";

echo "<pre>";

var_dump($int, $string, $float, $bool, $array);

print_r($array);

/** GLOBAL SCOPE */

$x = "dainji";

function myTest() {
    echo "<p>My name inside is $x</p>";
}
myTest();

echo "<p>My name outside is $x</p>";

/** GLOBAL KEY WORD */

$x = "dainji";
$y = 18;

function test() {
    global $x, $y;
    echo "<p>My name inside is $x, i am $y</p>";
}
test();

function test2() {
    $GLOBALS['x'] = "Dainji";
    $GLOBALS['y'] = 20;
}
test2();

echo "<p>My name outside is $x, i am $y</p>";

/** STATIC VARIABLE */

function staticWord() {
    static $x = 0; // static help to keep the value of the variable
    echo $x;
    $x++;
}
staticWord();
staticWord();
staticWord();
