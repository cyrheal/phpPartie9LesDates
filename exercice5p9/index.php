<?php
$datetime1 = new DateTime('2018-11-27');
$datetime2 = new DateTime('2016-05-16');
$interval = $datetime2->diff($datetime1);
$result = $interval->format('%R%a jours');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Exercice5</title>
    </head>
    <body>
        <div class="exercice"> 
            <h3>Exercice 5</h3>
            <div>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</div>
        </div>
        <div class="result">
            <div> Nombre de jours qui sépare la date du jour avec le 16 mai 2016 : <?= $result; ?></div>
        </div>
    </body>
</html>