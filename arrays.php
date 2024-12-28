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

function myFunction()
{
    echo "i am a function";
}
// create array
$c = array("model" => "dell", "year" => 2004, "message" => "myFunction");

$c["message"]();

// add to array: điều kiện là không được trùng key đã có sẵn
$c[] = "apple";
$c["color"] = "red";
array_push($c, "banana", "apple");

$c += ["size" => "big", "x" => "y"];
var_dump($c);

// remove array
$d = array(1, 2, 3);
array_splice($d, 1, 1);
unset($d["color"], $d["size"]);
var_dump($d);

// cut array
$x = array_slice($d, 1, 1);
$s = array_diff($c, ["y", "dell"]); // remove all values in array c without y and dell (p/s: not key)
var_dump($s);

//remove the last item
array_pop($d);
//remove the first item
array_shift($d);
// add to the last
array_push($d, "apple", "banana");
// add to the first
array_unshift($d, "cherry");
var_dump($d);

$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

for ($i = 0; $i < count($cars); $i++) {
    for ($j = 0; $j < count($cars[$i]); $j++) {
        echo $cars[$i][$j] . " ";
    }
    echo "<br>";
}

// implode: convert array to string
echo "this is implode array:" . implode(" + ", $d) . "<br>";

// merge array: 
$list1 = array("a" => "apple", "b" => "banana");
$list2 = array("c" => "cherry", "d" => "dell");
$list3 = array_merge($list1, $list2);

print_r($list3);

// in_array: check if a value exists in an array
echo in_array("apple", $list3) . "<br>"; // RETURN POSITION OF VALUE IF IT EXISTS

// array_key: return all keys of an array
print_r(array_keys($list3));

// array_search: search someone key in an array
echo array_search("apple", $list3) . "<br>"; // return key of value if it exists

// array_unique: remove all duplicate values in an array
// array_column: return all values of a key in an array
print_r(array_column(($cars), 0)); // return all values of key 0 in array cars
