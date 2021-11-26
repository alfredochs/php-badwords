<?php
$paragrafo = "Oggi per la prima volta vediamo qualcosa che riguarda il backend con PHP.";
$lunghezza = strlen($paragrafo);

$togliere = str_replace($_GET["name"], "***", $paragrafo);
$togliereLen = strlen($togliere);

$prova = [1, "aaa", 3, 4, 5];

echo "<pre>";
var_dump($prova);
echo "</pre>"

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