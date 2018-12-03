<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Exercice2</title>
    </head>
    <body>
        <div class="exercice"> 
            <h3>Exercice 2</h3>
            <div>Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)</div>
        </div>
        <div class="result">
            <?= date('d-m-Y'); ?>
        </div>
    </body>
</html>