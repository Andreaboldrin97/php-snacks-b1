<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nba game</title>
</head>

<body>
    <?php
    // array contentente le squadre  
    $nbaGame = [
        [
            'home' => 'lakers',
            'visitors' => 'cleveand',
            'result' => '98 - 101'
        ],
        [
            'home' => 'wariors',
            'visitors' => 'brooklyn',
            'result' => '67 - 105'
        ],
        [
            'home' => 'miami',
            'visitors' => 'spurs',
            'result' => '99 - 76'
        ],
        [
            'home' => 'chicago',
            'visitors' => 'detroit',
            'result' => '66 - 86'
        ]

    ];
    ?>

    <h1>GAME 14</h1>

    <ul>
        <?php
        for ($i = 0; $i < count($nbaGame); $i++) {
        ?>
            <li>
                <?php
                echo $nbaGame[$i]['home'] . '-' . $nbaGame[$i]['visitors'] . '-' . $nbaGame[$i]['result'];
                ?>
            </li>
        <?php
        }
        ?>
    </ul>
</body>

</html>