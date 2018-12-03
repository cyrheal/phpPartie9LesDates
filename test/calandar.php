<?php
/**
 * Permet de récupérer les mois sous forme de tableau
 * @return string
 */
function month() {
    setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
    $months = [
        '1' => 'JANVIER',
        '2' => 'FEVRIER',
        '3' => 'MARS',
        '4' => 'AVRIL',
        '5' => 'MAI',
        '6' => 'JUIN',
        '7' => 'JUILLET',
        '8' => 'AOUT',
        '9' => 'SEPTEMBRE',
        '10' => 'OCTOBRE',
        '11' => 'NOVEMBRE',
        '12' => 'DECEMBRE'
    ];
    // Récupération des clés et des valeurs de mon tableau pour l'affichage de mon select
    foreach ($months as $key => $value) {
        // Initialisation de mon selected 
        $selected = '';
        // Le mois courant par défaut
        if ($key == date('n')) {
            $selected = ' selected="selected"';
        }
        // Affichage du select
        echo '<option value="' . $key . '"' . $selected . ' >' . $value . '</option>';
        $selected = '';
    }
}
/**
 * Retourne l'année courante par défaut avec $selected 
 */
function year() {
    // Initialisation de mon selected
    $selected = '';
    // Boucle du tableau date  départ -60 ans fin + 14 ans 
    for ($i = date('Y') - 60; $i <= date('Y') + 14; $i++) {
        // L'année courante par défaut
        if ($i == date('Y')) {
            $selected = ' selected="selected"';
        }
        // Affichage du select
        echo '<option value="' . $i . '"' . $selected . '>' . $i . '</option>';
        $selected = '';
    }
}
// Récuperation des variables passées en GET 
if (!isset($_GET['month']) && !isset($_GET['year'])) {
    $numMonth = date("n");
    $numYear = date("Y");
} else {
    $numMonth = $_GET['month'];
    $numYear = $_GET['year'];
}
// Affichage des fleches de navigation
if ($numMonth < 1) {
    $numMonth = 12;
    $numYear = $numYear - 1;
} elseif ($numMonth > 12) {
    $numMonth = 1;
    $numYear = $numYear + 1;
}
// nombre de jours dans le mois et numero du premier jour du mois
// t qui nous retourne le nombre de jour dans le mois
// w Jour de la semaine au format numérique
// mktime — Retourne le timestamp UNIX d'une date 
$nbDay = date("t", mktime(0, 0, 0, $numMonth, 1, $numYear));
$nbFirstDay = date("w", mktime(0, 0, 0, $numMonth, 1, $numYear));
// tableau des jours
$arrDays = ["", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
// tableau des mois
$month = ["", "Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"];
// nombre de jours du mois d'avant
$nbDayAV = date("t", mktime(0, 0, 0, ($numMonth - 1 < 1) ? 12 : $numMonth - 1, 1, $numYear));
// nombre de jours du mois d'apres
$nbDayAP = date("t", mktime(0, 0, 0, ($numMonth + 1 > 12) ? 1 : $numMonth + 1, 1, $numYear));
// tab_cal[Semaine][Jour de la semaine]
$arrCalendar = [[], []];
// on affiche les jours du mois
// les jours du mois avant/apres
// on les indique par un Skull
// a l'affichage strreplace Skull pour modifier l'apparence 
// Initialisation de ma variable nbFirstDay = 0 par défaut 
$nbFirstDay = ($nbFirstDay == 0) ? 7 : $nbFirstDay;
// Initialisation de ma variable des jours en du mois en cours day = 1 par défaut 
$day = 1;
// Initialisation de ma variable des jours d'avant et d'après du mois en cours dayNP = "" string par défaut 
$dayNP = "";
// On lance nos boucles 
for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 7; $j++) {
        if ($j + 1 == $nbFirstDay && $day == 1) {
            // on stocke le premier jour du mois
            $arrCalendar[$i][$j] = $day;
            $day++;
        } elseif ($day > 1 && $day <= $nbDay) {
            // on incremente a chaque fois
            $arrCalendar[$i][$j] = $dayNP . $day;
            $day++;
        } elseif ($day > $nbDay) {
            // on a mis tout les numeros de ce mois,
            // et on ajoute ceux du mois suivant
            $dayNP = "Skull";
            $arrCalendar[$i][$j] = $dayNP . "1";
            $day = 2;
        } elseif ($day == 1) {
            // on ajoute ceux du mois d'avant
            $arrCalendar[$i][$j] = "Skull" . ($nbDayAV - ($nbFirstDay - ($j + 1)) + 1);
        }
    }
}
