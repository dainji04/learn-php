<?php
$products = [
    [
        "name" => "Iphone 12",
        "price" => 12000000,
        "onsale" => true
    ],
    [
        "name" => "Iphone 11",
        "price" => 9000000,
        "onsale" => false
    ],
    [
        "name" => "Iphone 10",
        "price" => 8000000,
        "onsale" => false
    ],
    [
        "name" => "Iphone 9",
        "price" => 7000000,
        "onsale" => true
    ],
    [
        "name" => "Iphone 8",
        "price" => 6000000,
        "onsale" => false
    ]
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .product {
            border: 1px solid black;
            margin: 10px;
            padding: 10px;
        }

        .onsales {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <div>
        <?php foreach ($products as $product): ?>
            <div class="product <?= $product['onsale'] ? 'onsales' : ''; ?>">
                <li><?= $product['name'] ?></li>
                <li><?= number_format($product['price']) ?>VND</li>
                <div>
                    <?php if ($product['onsale']): ?>
                        <li>On sale</li>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>