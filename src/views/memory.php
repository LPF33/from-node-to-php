<!DOCTYPE html>
<html>
    <head>
        <title>MEMORY</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width" initial-scale=1>
        <link href="/games/Memory/Memory.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="/games/Memory/pictures/favicon.png" sizes="96x96">
    </head>    
    <body>
        <a id="x" href="/play-games">X</a>
        <div id="win">Great job!
            <div id="winScore">Your points:</div>
            <button id="button">RESTART GAME</button>
        </div>         
        <div id="device1">
            <div class="deviceTop">
                <div>M</div>
                <div>E</div>
                <div>M</div>
                <div>O</div>
                <div>R</div>
                <div>Y</div>
            </div>
            <div class="device2">
                <div>P</div>
                <div>L</div>
                <div>E</div>
                <div>A</div>
                <div>S</div>
                <div>E</div>
                <div>!</div>
            </div>
            <div class="device2">
                <div>R</div>
                <div>O</div>
                <div>T</div>
                <div>A</div>
                <div>T</div>
                <div>E</div>
            </div>
            <div class="device2">
                <div>Y</div>
                <div>O</div>
                <div>U</div>
                <div>R</div>
            </div>
            <div class="device2">
                <div>D</div>
                <div>E</div>
                <div>V</div>
                <div>I</div>
                <div>S</div>
                <div>E</div>
            </div>
        </div>     
        <div></div>
        <div></div>
        <div></div>
        <div class="text">
            
            <div>
                <div id="scoresText" class="sidebox">Scores</div> 
                <div id="scores" class="sidebox"></div>               
            </div>
            <div>
                <div id="triesText" class="sidebox">Tries</div>
                <div id="tries" class="sidebox"></div>
            </div>
            <div id="sliderText">
                <div>
                    <div class="sidebox sliderText">How</div>
                    <div class="sidebox sliderText">many</div>
                    <div class="sidebox sliderText">Pairs?</div>
                </div>                
                <div id="sliderInput" class="sidebox"></div>
                <div id="slider">
                    <div></div>
                    <div id="sliderBar"></div>
                </div>              
            </div>  
        </div>
        
        <div id="memorySurface"></div>
        <div id="memoryPairs"></div>

        <div id="right">
            <div id="rightTop">
                <div class="sidebox">M</div>
                <div class="sidebox">E</div>
                <div class="sidebox">M</div>
                <div class="sidebox">O</div>
                <div class="sidebox">R</div>
                <div class="sidebox">Y</div>
            </div>
            <div id="rightMiddle">
                <div class="sidebox">Select</div>
                <div class="sidebox">the</div>                
                <div class="sidebox">type?</div>
            </div>            
            <div class="sidebox type">Color</div>
            <div class="sidebox type active">Picture</div>
            <div class="sidebox type">1234<div>
        </div>
        <div></div>
        <div></div>
        <div id="black"></div>
        
        <script src="/games/Memory/Memory.js" type="text/javascript"></script>
    </body>
</html>