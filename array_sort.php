<?php 
$a = array();

for($i = 0; $i < 5; $i++) {
    // array_push($a, rand(1, 1000));
    $tmp = rand(1, 5);
    while(isset($a[$tmp])) {
        $tmp = rand(1, 5);
    }
    echo $tmp . "<br>";
    $a[$tmp] = rand(1, 1000);
}

echo "<pre>";
print_r($a);
/**
 * sort() - sort arrays in ascending order
* rsort() - sort arrays in descending order
* asort() - sort associative arrays in ascending order, according to the value
* ksort() - sort associative arrays in ascending order, according to the key
* arsort() - sort associative arrays in descending order, according to the value
* krsort() - sort associative arrays in descending order, according to the key
 */

// sort increase
sort($a);
print_r($a);

// sort decrease
rsort($a);
print_r($a);

// sort increase with key
asort($a);

print_r($a);