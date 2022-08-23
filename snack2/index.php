<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack2</title>
</head>

<body>
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

</body>

</html>