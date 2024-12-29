<?php
echo "<pre>";

setcookie("name", "Dainji", time() + 3600, "/");
setcookie("email", "ndai31072004@gmail.com", time() + 3600, "/");

print_r($_COOKIE);

echo "<=====================DELETE COOKIE=====================>" . PHP_EOL;
setcookie("name", "", time() - 3600, "/");
