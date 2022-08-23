<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack5</title>
</head>

<body>
    SNACK 7
    <h1>ALUNNI</h1>
    <h3>
        Creare un array contenente qualche alunno di un'ipotetica classe.
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
        Stampare Nome, Cognome e la media dei voti di ogni alunno.
    </h3>
    <?php
    $class = [
        [
            'nome' => 'franco',
            'cognome' => 'corridore',
            'voti' => [
                'mate' => 9,
                'ita' => 6,
                'ing' => 10
            ]
        ],
        [
            'nome' => 'leila',
            'cognome' => 'betti',
            'voti' => [
                'mate' => 6,
                'ita' => 7,
                'ing' => 9
            ]
        ],
        [
            'nome' => 'alessio',
            'cognome' => 'boldrin',
            'voti' => [
                'mate' => 8,
                'ita' => 6,
                'ing' => 4
            ]
        ],
        [
            'nome' => 'fadriano',
            'cognome' => 'girasole',
            'voti' => [
                'mate' => 9,
                'ita' => 9,
                'ing' => 10
            ]
        ],
        [
            'nome' => 'marco',
            'cognome' => 'pangra',
            'voti' => [
                'mate' => 9,
                'ita' => 3,
                'ing' => 7
            ]
        ],
    ];

    ?>

    <?php
    for ($i = 0; $i < count($class); $i++) {
    ?>
        <p>
            <?php
            $sum_Voti = round(array_sum($class[$i]['voti']) / count($class[$i]['voti']));
            echo ($class[$i]['nome'] . ' ' . $class[$i]['cognome'] . ' media voto : ' . $sum_Voti);
            ?>
        </p>
    <?php
    }
    ?>

    <hr>

</body>

</html>