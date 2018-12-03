<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP Calendrier - Partie 9</title>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>TP Calendrier</h1>
        <form action="index.php" method="POST">
            <!-- Liste déroulante des mois -->
            <select name="months" id="months">
                <?php
                // Initialisation du tableau des mois
                $monthsArray = array(
                    '1' => 'Janvier',
                    '2' => 'Février',
                    '3' => 'Mars',
                    '4' => 'Avril',
                    '5' => 'Mai',
                    '6' => 'Juin',
                    '7' => 'Juillet',
                    '8' => 'Août',
                    '9' => 'Septembre',
                    '10' => 'Octobre',
                    '11' => 'Novembre',
                    '12' => 'Décembre',
                );
                // Variable qui ajoutera l'attribut selected au mois courant
                $selectedMonth = '';
                // Parcours du tableau
                // Pour chaque ligne du tableau $monthsArray on stocke la valeur de cette ligne dans $monthName
                foreach ($monthsArray as $monthValue => $monthName) {
                    // Si le mois choisi est égal à la valeur du mois
                    if ($_POST['months'] == $monthValue) {
                        // Il prend l'attribut selected
                        $selectedMonth = ' selected';
                    } // On affiche la ligne avec les bonnes valeurs 
                    ?>
                    <option value="<?= $monthValue ?>" <?= $selectedMonth ?>><?= $monthName ?></option>
                    <?php
                    // Remise à zéro de $selected
                    $selectedMonth = '';
                }
                ?>
            </select>
            <!-- Liste déroulante des années -->
            <select name="years" id="years">
                <?php
                // Variable qui ajoutera l'attribut selected à l'année courante
                $selectedYear = '';
                // Parcours du tableau
                // Pour $year allant de 1900 à 2030, on ajoute 1 à $year à chaque passage dans la boucle
                for ($year = 1900; $year <= 2030; $year++) {
                    // Si l'année choisie est égale à $year
                    if ($_POST['years'] == $year) {
                        // On ajoute l'attribut selected
                        $selectedYear = ' selected';
                    }
                    // On affiche la ligne 
                    ?>
                    <option value="<?= $year ?>" <?= $selectedYear ?>><?= $year ?></option>
                    <?php
                    // Remise à zéro de $selected
                    $selectedYear = '';
                }
                ?>
            </select>
            <input type="submit" value="Valider">
        </form>
        <?php
        setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
        // On stocke les jours de la semaine dans un tableau
        $days = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
        if (isset($_POST['months']) && isset($_POST['years'])) {
            // mktime() créer un timestamp UNIX correspondant aux 1er jour du mois et de l'année fournis
            $firstDayTimestamp = mktime(0, 0, 0, $_POST['months'], 1, $_POST['years']);
            // On cherche le nombre de jours que le mois contient
            $daysNumber = date('t', $firstDayTimestamp);
            // Quel est la valeur de l'index du premier jour du mois en question ?
            $dayOfWeek = date('w', $firstDayTimestamp) - 1;
            // Pour que le calendrier commence un Lundi
            if ($dayOfWeek < 0) {
                $dayOfWeek = 6;
            }
            // On initialise le compteur de jours, en commençant par 1
            $currentDay = 1;
            ?>
            <!-- Tableau qui fait le calendrier -->
            <table>
                <thead>
                <caption><?= ucfirst(strftime('%B', $firstDayTimestamp)) . ' ' . $_POST['years'] ?></caption>
                <tr>
                    <?php
                    // Pour chaque ligne dans le tableau $days on crée une colonne <th> avec la valeur de la ligne
                    foreach ($days as $day) {
                        ?>
                        <th><?= $day ?></th><?php
            }
            ?>
                </tr>
            </thead>
        </tbody>
        <tr>
            <?php
            // Si le nombres de jours dans la semaine est supérieur à 0
            if ($dayOfWeek > 0) {
                // On ajoute une colonne qui fera la largeur des jours manquants 
                ?>
                <td colspan="<?= $dayOfWeek ?>"></td>
                <?php
            }
            // Tant que le compteur de jours est inférieur ou égal au nombre de jours dans le mois
            while ($currentDay <= $daysNumber) {
                // Si le jour de le semaine atteint 7 (la ligne atteint 7 colonnes)
                if ($dayOfWeek == 7) {
                    // On remet la valeur de $dayOfWeek à 0
                    $dayOfWeek = 0;
                    // On ferme puis on ouvre une ligne (<tr>)
                    ?>
                </tr><tr><?php } // On ajoute une colonne avec le numéro du jour au calendrier 
                ?>
                <td><?= $currentDay ?></td><?php
                // On ajoute 1 au numéro du jour et au jour de la semaine
                $currentDay++;
                $dayOfWeek++;
            }
            // Complète la ligne de la dernière semaine du mois si nécessaire
            // Si le nombre de jour de la semaine est différent de 7
            if ($dayOfWeek != 7) {
                // On calcule le nombre de jours restants et on stocke ce nombre dans une variable
                $remainingDays = 7 - $dayOfWeek;
                // On ajoute une colonnes qui fait la taille des jours manquants 
                ?>
                <td colspan="<?= $remainingDays ?>"></td><?php
            }
        }
        ?>
    </tr>
</tbody>
</table>
<div><a href="index.php">Retour au menu</a></div>
</body>
</html>
