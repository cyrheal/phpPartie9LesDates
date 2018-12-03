<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Exercice3</title>
    </head>
    <body>
        <div class="exercice"> 
            <h3>Exercice 3</h3>
            <div>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016).Bonus : Le faire en français.</div>
        </div>
        <div class="result">
            <?php
            setlocale (LC_TIME, 'fr_FR.utf8','fra');  
            $result = strftime("%A %d %B %Y");
            ?>
            <div>On est le <?= $result ?></div>
        </div>
    </body>
</html>