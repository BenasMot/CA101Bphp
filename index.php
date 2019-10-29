<html lang="en">
<head>
    <title>Aš valdau HTML ir PHP!</title>
</head>
<body>
    <h1>Valdas - HTML ir PHP asas!</h1>
    <p>Kuriu dinaminį turinį.</p>
        <p> Atidaryta: <?php 
            date_default_timezone_set('Europe/Vilnius');
            print date("Y/m/d h:i:s") ?></p>
</body>
</html>