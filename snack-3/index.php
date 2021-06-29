<!-- ## Snack 3
Creare un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
function numberArray($nMin = 0, $nMax = 50, $aLength = 30){
    $array = [];
    while (count($array) < $aLength) {
        $number = rand($nMin, $nMax);
        if (!in_array($number, $array)) {
            $array[] = $number;
        }
    }
    return $array;
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>

<body>
    <main>
        <h1>Numeri casuali</h1>
        <ul>
        <?php 
        $casualNumber = numberArray(1, 25, 15);
        for ($i=0; $i<count($casualNumber); $i++) { 
            echo "<li>" . $casualNumber[$i] . "</li>";
        }
        ?>
        </ul>
    </main>
</body>

</html>