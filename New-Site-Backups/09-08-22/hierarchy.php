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

        </span>
        <span>
            <h1 id="Header">Zodiac Corps Hierarchy</h1>
        </span>
        <span>
            <img src="treediagrams.png" alt="Zodiac Hierarchy Tree" style="position:absolute; left: 350;">
        </span>
        <div style="position:absolute; top: 950; width: 100%; ">
            <h1 id="Header">What does all this mean?</h1>
        </div>
        <span style="position:absolute; top: 1000;">
            <p id="Intro">
                Above you will see the hierarchy that Zodiac Corps, This is techinically the chain of
                command. This is where you can see what roles are in charge of who, We do follow this 
                hierarchy strictly. This is a good reason to stay motiviated, hard work and dedicated and you
                maybe in the leading ranks of Zodiac Corps! <br>If you would like to find out more about any of 
                the Roles above, please click a link below!
                <br>
                <span style="position: absolute; top: 250; left: 450; color: #white;">
                    <a href="">CEO</a><br><a href="">Director</a><br><a href="">Regional Commander</a><br>
                    <a href="">Division Commander</a><br><a href="">Fleet Commander</a><br><a href="">System Commander</a><br>
                    <a href="">Squadron Commander</a><br><a href="">Wing Commander</a><br><a href="">Squad Member</a><br>
                    <a href="">Division Member</a><br><a href="">Squadron Member</a><br>
                </span>
            </p>
        </span>
    </body>
</html>

<?php
    }
?>