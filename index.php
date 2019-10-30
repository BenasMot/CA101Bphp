<html lang='en'>
    <head>
        <style>
            .dice-1 {
                background-image: url("https://cdn2.iconfinder.com/data/icons/dice-roll/100/dice_1-512.png");
                height: 100%;
                width: 100%;
                background-repeat: no-repeat;
            }
            .dice-2 {
                background-image: url("https://cdn2.iconfinder.com/data/icons/dice-roll/100/dice_2-512.png");
                height: 100%;
                width: 100%;
                background-repeat: no-repeat;
            }
            .dice-3 {
                background-image: url("https://cdn3.iconfinder.com/data/icons/line/36/dice_three-512.png");
                height: 100%;
                width: 100%;
                background-repeat: no-repeat;
            }
            .dice-4 {
                background-image: url("https://cdn2.iconfinder.com/data/icons/dice-roll/100/dice_4-512.png");
                height: 100%;
                width: 100%;
                background-repeat: no-repeat;
            }
            .dice-5 {
                background-image: url("https://cdn2.iconfinder.com/data/icons/dice-roll/100/dice_5-512.png");
                height: 100%;
                width: 100%;
                background-repeat: no-repeat;
            }
            .dice-6 {
                background-image: url("https://cdn2.iconfinder.com/data/icons/dice-roll/100/dice_6-512.png");
                height: 100%;
                width: 100%;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body> 
        <div class="dice-<?php print rand(1, 6); ?>">
        </div>
    </body>
</html>