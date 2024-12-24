<?php
$a = 1;

$b = (boolean) $a;
$c = (int) $a;
$d = (float) $a;
$e = (string) $a;
$f = (array) $a;
$g = (object) $a;

echo "<pre>";
var_dump($a, $b, $c, $d, $e, $f, $g);
// $h = (unset) $a;

?>