<table width="90%" border="5" class="mx-auto table-dark mb-5 mt-5">
    <tr>
        <td colspan="7" align="center">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="m-0 table table-striped table-dark">
                <tr><!--haut du tableau-->
                    <td align="left"><a href="index.php?month=<?= $numMonth - 1; ?>&amp;year=<?= $numYear; ?>&amp;valider=valider"><img width="30" border="0" src="assets/img/prec.png" /></a></td>
                    <td width="50%" align="center" class="dayCalendar2"><?= $month[$numMonth]; ?></td>
                    <td></td>
                    <td width="50%" align="center" class="dayCalendar2"><?= $numYear; ?></td>
                    <td align="right"><a href="index.php?month=<?= $numMonth + 1; ?>&amp;year=<?= $numYear; ?>&amp;valider=valider"><img width="30" border="0" src="assets/img/suiv.png" /></a></td>
                </tr>
            </table>
    <tr><!--affichage des jours-->
        <?php for ($i = 1; $i <= 7; $i++): ?>
            <td align="center" class="dayCalendar"><?= $arrDays[$i] ?></td>
        <?php endfor; ?>
    </tr>
    <?php for ($i = 0; $i < 6; $i++) : ?>
        <tr>
            <?php for ($j = 0; $j < 7; $j++) : ?>
                <td align="center" class='numberCalendar<?= (($numMonth == date("n") && $arrCalendar[$i][$j] == date("j")) ? ' dayJ bg-dark' : null) ?>'>
                    <?= ((strpos($arrCalendar[$i][$j], 'Skull') !== false ) ? '<span class="dayOtherNP">' . str_replace('Skull', '', $arrCalendar[$i][$j]) . '</span>' : $arrCalendar[$i][$j]) ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
