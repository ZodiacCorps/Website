<?php
    $maintanence = 0;

    if($maintanence == 1){
?>

<html>
    <body>
        <h1>Webpage is currently under maintenance</h1>
    </body>
</html>

<?php
    }else{
        include_once 'header.php';
?>

        <span>
            <h1 id="Header" align="center">
                Minmatar Regions
                <div>
                    <h2 id="Header2" align="center">Metropolis</h2>
                </div>
            </h1>
        </span>
        <span id="Whiteclaw_Haulers">
            <a href="Divs/Minmatar/Whiteclaw/wchaul.php"><img src="Divs/Minmatar/Whiteclaw/Whiteclaw.png" alt="Division Logo: Whiteclaw Haulers"
            height=25% width=15%>
            <h2 id="Intro">Whiteclaw Haulers<br>Est. 09/03/2022</a></h2>
        </span>
        <span style="position:absolute; left:350; top:160; height:400; width:1250;">
            <a href="Divs/Minmatar/AquariusMiningInc/ami.php"><img src="Divs/Minmatar/AquariusMiningInc/aquarius.png" alt="Division Logo: Aquarius Mining Inc."
            height=35% width=15%>
            <h2 id="Intro">Aquarius Mining Inc.<br>Est. 09/03/2022</a></h2>
        </span>
        <span style="position:absolute; left:650; top:160; height:400; width:1250;">
            <a href="Divs/Minmatar/404.php"><img src="Divs/Minmatar/SerpentfangFighterSquad/aquarius.png" alt="Division Logo: Serpentfang Fighter Squadron"
            height=35% width=15%>
            <h2 id="Intro">Serpentfang Fighter Squadron<br>Est. Coming Soon</a></h2>
        </span>
        <span style="position:absolute; left:1075; top:160; height:400; width:1250;">
            <a href="Divs/Minmatar/404.php"><img src="" alt="Division Logo: Scorpio Salvagers"
            height=35% width=15%>
            <h2 id="Intro">Scorpio Salvagers<br>Est. Coming Soon</a></h2>
        </span>
        <br>
        <div>
            <h1 id="Header" align="center">
                Amarr Regions
                <div>
                    <h2 id="Header2" align="center">Devoid</h2>
                </div>
            </h1>
            <br>
            
        </div>
        <span id="Whiteclaw_Haulers"><a href="">
            <img src="Blue Wood.pn" alt="Division Logo: Amarrian Royal Guards"
            height=25% width=15%>
            <h2 id="Intro">Amarrian Royal Guards<br>Est. Coming Soon</a></h2>
        </span>

        <div>
            <p id="Header" align="center" style="font-size: 22px;">
                <a href="divisions.php">1,</a>  <a href="Divs/divs2.php">2,</a>  <a href="">3,</a>
            </p>
        </div>
    </body>
</html>

<?php
    }
?>