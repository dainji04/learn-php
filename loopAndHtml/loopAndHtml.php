<?php
    $a = array("Dainji", "Tien Phung");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOP and HTML</title>
</head>
<body>
    <div <?php foreach($a as $student): ?>>

        <li><?=$student ?></li>

    </div <?php endforeach;?>>
</body>
</html>