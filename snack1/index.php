<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK</title>
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

    SNACK 2
    <h1>FORM STATUS</h1>
    <h3>
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
        Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
    </h3>
    <form method="get">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="mail" placeholder="mail">
        <input type="text" name="age" placeholder="age">
        <input type="submit" value="invio">
    </form>

    <p>
        <?php
        if (!empty($_GET) && strlen($_GET['name'])  > 3 && strpos($_GET['mail'], '@') > 0 && strpos($_GET['mail'], '.') > 2 && is_numeric($_GET['age'])) {
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';
        };
        ?>
    </p>

    <hr>


    SNACK 4
    <h1>PARAGRAFI</h1>
    <h3>
        Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi.
        Ogni punto un nuovo paragrafo.
    </h3>

    <?php
    $paragraph = 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.';

    $new_paragraph = explode('.', $paragraph);

    var_dump($new_paragraph);

    ?>
    <?php
    for ($i = 0; $i < count($new_paragraph); $i++) {
    ?>
        <p>
            <?php
            echo ($new_paragraph[$i]);
            ?>
        </p>
    <?php
    }
    ?>
    <hr>
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
            echo ($class[$i]['nome'] . ' ' . $class[$i]['cognome'] . ' media voto : ' . $class[$i]['voti']);
            ?>
        </p>
    <?php
    }
    ?>

    <hr>

    SNACK 3
    <h1>ARRAY NUMBER</h1>
    <h3>
        Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
    </h3>

    <?php
    $numbers = [];
    $min = 1;
    $max = 100;
    $n_Items = 15;

    while (count($numbers) < $n_Items) {
        $number = rand($min, $max);
        if (!in_array($number, $numbers)) {
            $numbers[] = $number;
        }
        return $numbers;
    }
    var_dump($numbers);
    ?>
</body>

</html>