<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>POST FORM</h2>
    <form action="./post.php" method="post" enctype="multipart/form-data"><br><br>
        name: <input type="text" name="username"><br><br>
        email: <input type="text" name="email"><br><br>
        avatar: <input type="file" name="avatar"><br><br>
        <input type="submit" value="Register"><br><br>
    </form>

    <h2>GET FORM</h2>
    <form action="./get.php" method="get" enctype="multipart/form-data"><br><br>
        name: <input type="text" name="username"><br><br>
        email: <input type="text" name="email"><br><br>
        avatar: <input type="file" name="avatar"><br><br>
        <input type="submit" value="Register"><br><br>
    </form>
</body>

</html>