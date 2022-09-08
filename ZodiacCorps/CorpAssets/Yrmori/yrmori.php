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
        include_once '../assetsheader.php';
?>
        <nav id="nav">
            <ui>
                <li>
                    <a href="yrmori.php">Home</a>
                    <a href="../../assets.php">Assets</a>
                    <a href="../../login.php">Login</a>
                </li>
            </ui>
        </nav>

        <span>
            <h1 id="Header">Yrmori VI <br>Core Complexion Inc. Factory</h1>
        </span>
        <div>
            <p id="Intro">
                Yrmori VI - Core Complexion Inc. Factory has been the headquarters of the Zodiac
                Corps since the beginning! When the Founder, Lurderker Etgur was exploring for a decent
                startup location, He stumbled upon the gem "Yrmori" With Yrmori being in a lightly 
                traveled to pocket in the Metropolis Region this made it a great hide away for a easy takeoff
                without interruption of other capsuleers. On the other hand, Yrmori is a Lower
                Sec area with a 0.6 Security Rating. 
            </p>
        </div>
    </body>
</html>

<?php
    }
?>