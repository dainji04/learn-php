<?php
function response($data, $status = 200)
{
    http_response_code($status);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

// response(['message' => 'Hello, World!']);

function response2($message, $status = 200)
{
    echo $message . " - " . $status . "<br>";
}

response2('Success!');
response2('Error!', 400);
