<?php
    echo "<pre>";
    $a = [1, 2, 3, 4, 5];
    echo (pi());
    echo "<br>";
    echo min($a);
    echo "<br>";
    echo max($a);
    echo "<br>";
    // absolute value
    echo abs(-5);
    echo "<br>";

    // the square root
    echo sqrt(25);
    echo "<br>";

    // nearest integer: 0.5 -> 1, 0.2 -> 0, 0.7 -> 1
    echo round(3.4);
    echo "<br>";

    // random number
    echo rand(1, 10);
    echo "<br>";
    echo rand();
    echo "<br>";
?>