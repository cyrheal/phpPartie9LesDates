<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Exercice6</title>
    </head>
    <body>
        <div class="exercice"> 
            <h3>Exercice 6</h3>
            <div>Afficher le nombre de jour dans le mois de février de l'année 2016.</div>
        </div>
        <div class="result">
            <?php
            $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016)
            ?>
            <div>Nombre de jours en février 2016 : <?= $number; ?> jours.</div>
        </div>
    </body>
</html>