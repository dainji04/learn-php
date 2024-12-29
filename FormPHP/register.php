<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $course = htmlspecialchars($_POST["course"]);
    $quantity = htmlspecialchars($_POST["quantity"]);
    $address = htmlspecialchars($_POST["address"]);

    $priceProducts = [
        "htmlcss" => 100,
        "javascript" => 200,
        "php" => 300
    ];

    $total = $priceProducts[$course] * $quantity;

    echo "
        <h1>Register Information</h1>
        <p>Name: $username</p>
        <p>Email: $email</p>
        <p>Course: $course</p>
        <p>Quantity: $quantity</p>
        <p>Address: $address</p>
        <h2>Total: $total</h2>
        <h1><Strong>Thanks for your order!!</Strong></h1>
    ";
}
