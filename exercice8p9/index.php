<?php
$date = date("2018-11-27"); //  ici ta date
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Exercice8</title>
    </head>
    <body>
        <div class="exercice"> 
            <h3>Exercice 8</h3>
            <div>Afficher la date du jour - 22 jours</div>
        </div>
        <div class="result">
            <?php
            $time = strtotime(date("d-m-Y", strtotime($date)) . " -22 day");
            $result = date("d-m-Y", $time);
            ?>
            <div>22 jours en arrière on été le : <?= $result; ?></div>
        </div>
    </body>
</html>
