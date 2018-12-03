<?php require('calandar.php'); ?>
<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='utf-8'>
        <link rel='stylesheet' href='bootstrap/css/bootstrap.css'>
        <link rel='stylesheet' href='css/style.css'>
        <title>Page index</title>
    </head>
    <body>
        <div class='container'>
            <h1>Ennoncer de l'exercice</h1>
            <div class='desc'>
                <h5>Partie 9 -- Exercice 8</h5>
                <p class="text-center">
                    Faire un formulaire avec deux listes déroulantes.<br>
                    La première sert à choisir le mois, et le deuxième permet d'avoir l'année.<br>
                    En fonction des choix, afficher un calendrier comme celui ci :
                    <img src="assets/img/calendrier.png" width="300"/>
                </p>
            </div>

            <form class="form-group text-center" name="form" method="GET" action="" enctype="multipart/form-data">
                <fieldset>
                    <legend>Modifier la date</legend>
                    <label class="form-control"  for="month">Choisir un mois : </label>
                    <select name="month">
                        <?= month(); ?>
                    </select>
                    <label class="form-control" for="year">Choisir une année : </label>
                    <select name="year" id="year">
                        <?= year(); ?>
                    </select><br>
                    <input class="btn btn-success m-3" type="submit" name="valider" role="button" value="valider"/>
                    <legend class="legend2">Fin Formulaire</legend>
                </fieldset>
            </form>
            <?php (isset($_GET['valider'])) ? require('viewCalendar.php') : '' ?>             
        </div>
        <script src="js/jquery-3.2.1.js"></script>
    </body>
</html>