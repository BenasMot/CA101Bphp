<?php
date_default_timezone_set('Europe/Vilnius');
?>

<html lang='en'>
    <head>
        <title><?php print 'Aš, ' . date('l') . ' ir PHP'; ?></title>
    </head>
    <body>
        <h1>Valdas - HTML <?php print 'ir PHP'; ?> asas <br> jau nuo <?php print date('Y') . ' metų'; ?></h1>
        <p>
            Viskas prasidėjo <?php print date('F') . ' mėnesio, ' . date('j') . ' dieną!'; ?>
        </p>
    </body>
</html>