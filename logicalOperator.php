<?php

$a = 10;
$b = '10';

echo '$a <=> $b: ' . ($a <=> $b) . '<br>';
echo '$a == $b:' .($a == $b) . '<br>';
echo '$a === $b:' .($a === $b) . '<br>';
echo '$a != $b:' .($a != $b) . '<br>';
echo '$a !== $b:' .($a !== $b) . '<br>';

echo 'single quote is show $a == $b but double quote show ressult of us: '."$a == $b" . '<br>';