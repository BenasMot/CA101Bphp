<?php
date_default_timezone_set('Europe/Vilnius');
?>
<html lang='en'>
    <head>
        <title>PHP lydės ir <?php print date('l', strtotime('+1 day')); ?></title>
    </head>
    <body>
        <h1>
            Valdas - PHP su manim buvo ir <?php print date('h', strtotime('-1 hour')) . ' valandą!'; ?>
        </h1>
        <p>
            <?php print date('Y', strtotime('+1 year')); ?> ne už kalnų!
        </p>
    </body>
</html>