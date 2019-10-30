<html lang='en'>
    <head>
        <style>
            .img {
                width: <?php print date('s'); ?>%;
                height: <?php print date('s'); ?>%;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-image: url("https://files.gamebanana.com/img/ico/sprays/4ea33068c0dcc.png");
            }
            .box {
                width: 100%;
                height: 100%;
            }
            .img-00 {
                width: 100%;
                height: 100%;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-image: url("https://upload.wikimedia.org/wikipedia/commons/7/79/Operation_Upshot-Knothole_-_Badger_001.jpg");
            }
        </style>
    </head>
    <body> 
        <div class="box">
            <div class="img img-<?php print date('s'); ?>">
            </div>
            <div>
                img-<?php print date('s'); ?>
            </div>
        </div>    
    </body>
</html>