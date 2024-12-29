<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>

<body>

    <h1>Register Courses</h1>
    <form action="register.php" method="post">
        <h2>Your Information</h2>
        Name: <input type="text" name="username" required><br><br>
        Email: <input type="text" name="email" required><br><br>
        <h2>Choose Course:</h2>
        Course:
        <select name="course" id="">
            <option value="htmlcss">html - css</option>
            <option value="javascript">javascript</option>
            <option value="php">php</option>
        </select>
        <br><br>
        Quantity: <input type="number" name="quantity" min="1" max="10">
        <h2>Address: </h2>
        Địa chỉ: <input type="text" name="address" required><br><br>
        <input type="submit" name="submit" value="Register">

    </form>

</body>

</html>