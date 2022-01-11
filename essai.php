<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
/*
 * Exercice : écrire les valeurs des 24 premières puissances de 2
 */

$puissance = 1;
for ($i = 1; $i <= 24; $i++) {
    $puissance = $puissance * 2;
    echo "<span class=\"bleu\">2 puissance $i vaut : </span>";
    echo "<span class=\"rouge\">$puissance</span>";
    echo "<br>";
}
?>
</body>
</html>
