<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f4f4;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url(https://r4.wallpaperflare.com/wallpaper/410/867/750/vector-forest-sunset-forest-sunset-forest-wallpaper-b3abc35d0d699b056fa6b247589b18a8.jpg) no-repeat center;
            background-size: cover;
            font-size: 18px;
            font-weight: 700;

        }

        .container {
            margin-top: 100px;
            width: 500px;
            height: 500px;
            padding: 50px 20px;
            border: 1px solid #ccc;
            /* background: #fff; */
            box-shadow: 1px 1px 10px #ccc;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(0, 0, 0, .5);
            backdrop-filter: blur(20px);
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post" action="upload.php" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <br>
            <div class="input-group mb-3">
                <input name="file" type="file" class="form-control" id="inputGroupFile01">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Uploads</button>
        </form>
    </div>
</body>

</html>