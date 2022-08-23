<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK1</title>
</head>

<body>
    SNACK 1
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
    <h3>
        Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
    </h3>

    <ul>
        <?php
        for ($i = 0; $i < count($nbaGame); $i++) {
        ?>
            <li>
                <?php
                echo $nbaGame[$i]['home'] . '-' . $nbaGame[$i]['visitors'] . ' result: ' . $nbaGame[$i]['result'];
                ?>
            </li>
        <?php
        }
        ?>
    </ul>
    <hr>






</body>

</html>