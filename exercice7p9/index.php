<?php
$date = date("2018-11-27"); //  ici ta date
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Exercice7</title>
    </head>
    <body>
        <div class="exercice"> 
            <h3>Exercice 7</h3>
            <div>Afficher la date du jour + 20 jours.</div>
        </div>
        <div class="result">
            <?php
            $time1 = strtotime(date("d-m-Y", strtotime($date)) . " +20 day");
            $result = date("d-m-Y", $time1);
            ?>
            <div>Dans 20 jours on sera le : <?= $result; ?></div>
        </div>
    </body>
</html>
