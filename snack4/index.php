<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 4</title>
</head>

<body>
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
        $random_number = rand($min, $max);
        if (!in_array($random_number, $numbers)) {
            $numbers[] = $random_number;
        }
        return $numbers;
    }
    var_dump($numbers);
    ?>
</body>

</html>