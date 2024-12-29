<?php
session_start();

session_destroy();

if (isset($_COOKIE['username'])) {
    setcookie("username", "", time(), "/");
}

header(("Location: index.php"));
exit();
