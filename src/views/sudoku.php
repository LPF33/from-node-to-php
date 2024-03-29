<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" initial-scale="1" />
        <title>Sudoku</title>
        <link type="text/css" rel="stylesheet" href="/games/Sudoku/Sudoku.css" />
        <link
            href="https://fonts.googleapis.com/css2?family=Sen&display=swap"
            rel="stylesheet"
        />
        <link
            rel="icon"
            type="image/png"
            href="/games/Sudoku/images/makeNotes.PNG"
            sizes="96x96"
        />
    </head>
    <body>
        <a id="x" href="/play-games">X</a>
        <div id="startWindow">
            <p>Sudoku</p>
            <button id="easy" class="windowbutton">Easy</button>
            <button id="medium" class="windowbutton">Medium</button>
            <button id="hard" class="windowbutton">Hard</button>
            <button class="windowbutton manual">?</button>
        </div>
        <div id="pauseWindow">
            <p>Sudoku</p>
            <button id="endpause" class="windowbutton">Continue</button>
            <button id="newgame" class="windowbutton">New Game</button>
            <button class="windowbutton manual">?</button>
        </div>
        <div id="manual">
            <div>
                <button id="manualExit" class="windowbutton">PLAY</button>
                <div class="manualDescription">
                    <div class="manualflex">
                        <img src="/games/Sudoku/images/hintbutton.PNG" class="manualImg" />
                        <div>HINT-button! A number will appear in blue!</div>
                    </div>
                    <div class="manualflex">
                        <img src="/games/Sudoku/images/checkbutton.PNG" class="manualImg" />
                        <div>
                            Check-button! Check if your choosen numbers are
                            correct. If not, the background of the numbers will
                            appear in red otherwise the numerbs will turn green.
                            If you are finished with the game, click on „Check“
                            to see if you succeeded!
                        </div>
                    </div>
                    <div class="manualflex">
                        <img src="/games/Sudoku/images/allNumbers.PNG" class="manualImg" />
                        <div>
                            In the default setting you are given all numbers
                            (1-9) to choose from, make the selection for a cell.
                            If you click on this button, you switch on the help
                            mode:
                        </div>
                    </div>
                    <div class="manualflex">
                        <img
                            src="/games/Sudoku/images/possibleNumbers.PNG"
                            class="manualImg"
                        />
                        <div>
                            "help-mode": You get a preselection of possible
                            numbers you can only use in this row, column and
                            square. Click on this button and you come back to
                            the default setting. You can switch between this two
                            modes as often you want.
                        </div>
                    </div>
                    <div class="manualflex">
                        <img src="/games/Sudoku/images/pausebutton.PNG" class="manualImg" />
                        <div>
                            It shows your used time and on the right is the
                            pause button to take a break!
                        </div>
                    </div>
                    <div class="manualflex">
                        <img
                            src="/games/Sudoku/images/highlightNumber.PNG"
                            class="manualImg"
                        />
                        <div>
                            Default setting: On the bottom you see the numbers
                            1-9, when you move your mouse over them, all
                            identical numbers will be highlighted in yellow on
                            the field. In the red circle all previous displayed
                            numbers are summed. Click on this button and you are
                            in the "make-notes-mode".
                        </div>
                    </div>
                    <div class="manualflex">
                        <img
                            src="/games/Sudoku/images/bottomNumbers.PNG"
                            class="manualImg2"
                        />
                    </div>
                    <div class="manualflex">
                        <img src="/games/Sudoku/images/makeNotes.PNG" class="manualImg" />
                        <div>
                            „make-notes-mode“: You can only do this before
                            playing! Click on a cell, than click on a number on
                            the bottom and you can insert numbers into a cell.
                            Double click on a cell and you can insert your
                            solution number. Click again on this button you come
                            back to the default setting.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="time">
            <div id="min">00</div>
            <div>:</div>
            <div id="sec">00</div>
            <button id="pause">| |</button>
        </div>
        <div id="sudokuArea"></div>
        <div id="buttons">
            <button id="hint">Hint</button>
            <button id="helpSelectionNumber"></button>
            <button id="notes"></button>
            <button id="check">Check</button>
        </div>
        <div id="counterSection">
            <div class="cell counterCell">
                <div>1</div>
                <div class="counter">0</div>
            </div>
            <div class="cell counterCell">
                <div>2</div>
                <div class="counter">0</div>
            </div>
            <div class="cell counterCell">
                <div>3</div>
                <div class="counter">0</div>
            </div>
            <div class="cell counterCell">
                <div>4</div>
                <div class="counter">0</div>
            </div>
            <div class="cell counterCell">
                <div>5</div>
                <div class="counter">0</div>
            </div>
            <div class="cell counterCell">
                <div>6</div>
                <div class="counter">0</div>
            </div>
            <div class="cell counterCell">
                <div>7</div>
                <div class="counter">0</div>
            </div>
            <div class="cell counterCell">
                <div>8</div>
                <div class="counter">0</div>
            </div>
            <div class="cell counterCell">
                <div>9</div>
                <div class="counter">0</div>
            </div>
        </div>
        <div id="endGame">
            <p>CONGRATULATIONS !!!</p>
            <button id="restart" class="windowbutton">Restart</button>
        </div>
        <script src="/games/Sudoku/Sudoku.js" type="text/javascript"></script>
    </body>
</html>
