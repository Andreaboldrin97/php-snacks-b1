<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack3</title>
</head>

<body>
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
</body>

</html>