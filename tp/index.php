<?php require('calendar.php'); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>TP</title>
    </head>
    <body>
        <div class="exercice"> 
            <h3>TP</h3>
            <div>Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
                En fonction des choix, afficher un calendrier comme celui ci :</div>
        </div>
        //début
        <nav class="navbar navbar-dark bg-primary mb-3">
            <a href="/index.php" class="navbar-brand">Mon calendrier</a>  
        </nav>  
        <h1>mars 2018</h1>

        <table class="calendar__table">
            <tr>
                <td>Lundi</td>
                <td>Mardi</td>
                <td>Mercredi</td>
                <td>Jeudi</td>
                <td>Vendredi</td>
                <td>Samedi</td>
                <td>Dimanche</td>
            </tr>
        </table>

        <form method="POST" action="">
            <select name="month">
                <option value="janvier">janvier</option>
                <option value="février">février</option>
                <option value="mars">mars</option>
                <option value="avril">avril</option>
                <option value="mai">mai</option>
                <option value="juin">juin</option>
                <option value="juillet">juillet</option>
                <option value="août">août</option>
                <option value="septembre">septembre</option>
                <option value="octobre">octobre</option>
                <option value="novembre">novembre</option>
                <option value="décembre">décembre</option>
            </select>
            <p><label><input type="submit" name="envoyer" /></label></p>
        </form>







        <form method="POST" action="">
            <label  for="month">Choisie un mois : </label>
            <select name="month">
            </select>
            <label  for="year">Choisie une année : </label>
            <select name="year">
            </select>
            <input type="submit" name="valider" value="valider"/>
        </form>
    </body>
</html>