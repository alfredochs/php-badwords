<?php
$paragrafo = "Oggi per la prima volta vediamo qualcosa che riguarda il backend con PHP.";
$lunghezza = strlen($paragrafo);

$togliere = str_replace($_GET["name"], "***", $paragrafo);
$togliereLen = strlen($togliere);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intro PHP</title>
</head>

<body>
    <h2>Paragrafo senza censura</h2>
    <p> <?php echo $paragrafo ?></p> <br>
    <span>Lunghezza del paragrafo: <?php echo $lunghezza ?></span>

    <h2>Paragrafo censurato con _GET</h2>
    <p> <?php echo $togliere ?></p> <br>
    <span>Lunghezza del paragrafo con censura da GET: <?php echo $togliereLen ?></span>



</body>

</html>

<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->