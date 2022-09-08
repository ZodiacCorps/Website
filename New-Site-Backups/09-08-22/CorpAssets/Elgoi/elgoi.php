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
        include_once "../assetsheader.php";
?>
        <nav id="nav">
            <ui>
                <li>
                    <a href="elgoi.php">Home</a>
                    <a href="../../assets.php">Assets</a>
                    <a href="../../login.php">Login</a>
                </li>
            </ui>
        </nav>

        <span>
            <h1 id="Header">Elgoi VIII <br>Core Complexion Inc. Storage</h1>
        </span>
    </body>
</html>

<?php
    }
?>