<?php
$time = time();
$time1 = mktime(15, 0, 0, 2, 8, 2016);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Exercice4</title>
    </head>
    <body>
        <div class="exercice"> 
            <h3>Exercice 4</h3>
            <div>Afficher le timestamp du jour.Afficher le timestamp du mardi 2 août 2016 à 15h00.</div>
        </div>
        <div class="result">
            <div> Timestamp du jour <?= $time; ?></div>
            <div>Timestamp du mardi 2 août 2016 à 15h00 <?= $time1; ?></div>
        </div>
    </body>
</html>