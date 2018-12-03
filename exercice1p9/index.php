<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Exercice1</title>
    </head>
    <body>
        <div class="exercice"> 
            <h3>Exercice 1</h3>
            <div>Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)</div>
        </div>
        <div class="result">
            <?= date('d/m/Y'); ?>
        </div>
    </body>
</html>