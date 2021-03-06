<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Rabbit Tracker</title>
        <link rel="stylesheet" href="/games/RabbitTracker/style.css" />
        <link
            href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap"
            rel="stylesheet"
        />
    </head>
    <body>
        <a id="x" href="/play-games">X</a>
        <div>
            <div id="button-container">
                <button type="button" id="beginner"><h2>Beginner</h2></button>
                <button type="button" id="advanced"><h2>Advanced</h2></button>
                <button type="button" id="master"><h2>Master</h2></button>
                <button type="button" id="help"><h2>?</h2></button>
            </div>
            <div id="container">
                <div>
                    <div class="container2">
                        <img
                            src="/games/RabbitTracker/images/rabbitWhite.png"
                            alt="rabbit"
                            id="score-rabbit"
                        />
                        <div id="score"></div>
                    </div>

                    <div id="time"></div>
                </div>
                <div id="grid"></div>
            </div>
        </div>
        <p id="helper">
            Gameplay: Very easy: Just don't click on a cell with a rabbit! The
            numbers in the cells give you a hint, how many rabbits are in the
            surrounding cells. You win, when all cells without a rabbit are
            uncoverd!<br />
            You can set a marker: <br />
            Desktop: Right-click with the mouse on a cell.<br />
            Touch devices: Click on the white rabbit in the left corner. Switch
            between mark and selection of cell.
        </p>

        <script src="/games/RabbitTracker/jquery-3.5.1.min.js"></script>
        <script src="/games/RabbitTracker/game.js"></script>
    </body>
</html>
