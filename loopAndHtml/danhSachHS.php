<?php
$classes = [
    [
        "class" => "12A1",
        "students" => [
            ['name' => 'Dainji', 'age' => 21, 'score' => 9],
            ['name' => 'Tien Phung', 'age' => 18, 'score' => 10]
        ]
    ],
    [
        "class" => "12A2",
        "students" => [
            ['name' => 'Dai', 'age' => 21, 'score' => 10],
            ['name' => 'Tien', 'age' => 18, 'score' => 10],
            ['name' => 'Teo', 'age' => 18, 'score' => 1],
            ['name' => 'Tun', 'age' => 18, 'score' => 5]
        ]
    ]
];
$status = '';
function checkScore($score)
{
    if ($score < 5) {
        return 'bad';
    } elseif ($score < 8) {
        return 'average';
    } else {
        return 'good';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .class {
            border: 1px solid black;
            margin: 10px;
            padding: 10px;
        }

        .student {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .score.bad {
            color: red;
        }

        .score.average {
            color: yellow;
        }

        .score.good {
            color: green;
        }
    </style>
</head>

<body>

    <div class="class-list">
        <?php foreach ($classes as $class): ?>
            <div class="class">
                <h1>
                    <!-- HACK BY XSS: use htmlspecialchars -->
                    <?= htmlspecialchars($class['class']) ?>
                </h1>
                <div>
                    <?php foreach ($class['students'] as $student): ?>
                        <?php
                        $status = checkScore($student['score']);
                        ?>
                        <div class="student">
                            <h2><?= $student['name'] ?> - </h2>
                            <h2><?= $student['age'] ?> - </h2>
                            <h2><?= $student['score'] ?> - </h2>

                            <h2 class="score <?= $status ?>">
                                <?php if ($status == 'bad'): ?>
                                    Bad
                                <?php elseif ($status == 'average'): ?>
                                    Average
                                <?php else: ?>
                                    Good
                                <?php endif; ?>
                            </h2>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>