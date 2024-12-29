<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $validName = "admin";
    $validPwd = "admin";
    $username = htmlspecialchars($_POST["username"]);
    $pwd = htmlspecialchars($_POST["password"]);

    if ($username == $validName && $pwd == $validPwd) {

        if (isset($_POST['remember'])) {
            setcookie("username", $username, time() + 300000, "/");
        } else {
            $_SESSION["username"] = $username;
        }

        header("Location: home.php");
        exit();
    } else {
        $_SESSION["error"] = "Error username or password";
        header("Location: index.php");
        exit();
    }
}
