<?php
$name = "Dainji";

echo "Hello\\ $name<br>";
echo 'Hello  \' $name<br>'; // show
$output = "<pre>Name\tAge\tCity\nDainji\t20\tNew York\nJane\t30\tLos Angeles</pre>";

echo nl2br($output);

echo nl2br("Hello \n $name<br>");
echo nl2br("Hello \t $name<br>");

echo strlen("Hello world!"); // 12

echo "<br>hello, " . $name . " - age: 20";
