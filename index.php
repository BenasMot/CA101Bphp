<?php
date_default_timezone_set('Europe/Vilnius');
?>
<html lang='en'>
    <head>
        <title>PHP lydės ir <?php print date('Y/m/d', strtotime('-' . rand() . 'hours')); ?></title>
    </head>
    <body>
        <h1>
            Valdas - Galbūt turėsiu <?php print rand(1, 5); ?> vaikų(us)!
        </h1>
        <p>
            D. Trumpas nebus prezidentu: <?php print date('Y', strtotime('+' . rand(2, 10) . 'years')) . ', ' . date('m') . ', ' . date('d'); ?>
        </p>
    </body>
</html>