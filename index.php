<html lang='en'>
    <head>
        <style>
            .dice-1 {
                background-image: url("https://www.clipartwiki.com/clipimg/detail/126-1269474_dice-clipart-number-one-1-side-of-dice.png");
                height: 100%;
                width: 100%;
                background-repeat: no-repeat;
            }
            .dice-2 {
                background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDXs6WwDEAPbIBZupe-_GlrU64mTozgcyXPWVWxXOI5ytwBQNC&s");
                height: 100%;
                width: 100%;
                background-repeat: no-repeat;
            }
            .dice-3 {
                background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Dice-3-b.svg/240px-Dice-3-b.svg.png");
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