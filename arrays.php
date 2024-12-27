<?php
$a = ["a" => "apple", "b" => "banana"];
// echo $a[1]; // it will be an error
foreach ($a as $key => &$value) { // tham chiếu
    // do something
    echo "$key: $value<br>";
}
$value = "cherry";
unset($value, $key); // if u dont unset two variables, it will be still available
var_dump($a);
// create array
$b = [];
$b[0] = "apple";
$b[1] = "banana";
$b[2] = "cherry";
echo "<pre>";
$b["model"] = "dell";

var_dump($b);

function myFunction() {
    echo "i am a function";
}
// create array
$c = array("model" => "dell", "year"=>2004, "message" => "myFunction");

$c["message"]();

// add to array: điều kiện là không được trùng key đã có sẵn
$c[] = "apple";
$c["color"] = "red";
array_push($c, "banana", "apple");

$c += ["size" => "big", "x" => "y"];
var_dump($c);

// remove array
$d=array(1, 2, 3);
array_splice($d, 1, 1);
unset($d["color"], $d["size"]);
var_dump($d);

// cut array
$x = array_slice($d, 1, 1);
$s = array_diff($c, ["y", "dell"]); // remove all values in array c without y and dell (p/s: not key)
var_dump($s);

//remove the last item
array_pop($d);
var_dump($d);
