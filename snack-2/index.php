<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
$text = "Validazione necessaria, inserisci nome - mail - età";
$succesMsg = "Accesso riuscito";
$failMsg = "Accesso negato";

if ($name && $mail && $age) {
    strlen($name)>3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age) ? $text = $succesMsg : $text = $failMsg;
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <main>
        <h1><?php echo $text; ?></h1>
    </main>
</body>

</html>