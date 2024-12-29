<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>

<body>

    <?php if (isset($_SESSION['error'])): ?>
        <p style="color: red;"><?= $_SESSION['error'] ?></p>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <form action="./login.php" method="post">

        Name: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        Remember me: <input type="checkbox" name="remember"><br><br>
        <button type="submit">Login</button>
    </form>

</body>

</html>