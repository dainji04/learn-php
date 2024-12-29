<?php
session_start();
if (isset($_SESSION['username']) || isset($_COOKIE['username'])) {
    $username = $_SESSION['username'] ?? $_COOKIE['username'];
} else {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Hello <?= $username ?>, welcome to my website.</h1>
    <a href="logout.php">logout</a>
</body>

</html>