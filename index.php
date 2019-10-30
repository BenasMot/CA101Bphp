<html lang='en'>
    <head>
        <style>
            .img {
                width: <?php print date('s') / 4; ?>%;
                height: <?php print date('s') / 4; ?>%;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-image: url("https://files.gamebanana.com/img/ico/sprays/4ea33068c0dcc.png");
            }
            .box {
                width: 100vw;
                height: 100vh;
            }
        </style>
    </head>
    <body> 
        <div class="box">
            <div class="img">
            </div>
            <div>
                <?php print date('s') / 4; ?>
            </div>
        </div>    
    </body>
</html>