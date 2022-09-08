<?php
    $maintenance = 0;

    if($maintenance == 1){
        echo "<h1 align='center'>Webpage under Maintenance</h1>";
    }else{
        include_once 'header.php';
?>
        <span>
            <h1 id="Header">Profile</h1>
        </span>

        <?php
            if(isset($_SESSION["user"])){
                echo "
                <span>
                    <img src='Divs/Minmatar/Whiteclaw/Whiteclaw.png' style='position: absolute; top: 100; left:25; width: 15%; height: 25%' alt='img'>
                    <p id='Intro' name='ProfileName' style='position: absolute; top: 275; left: 80; font-size: 22px;'>Username</p>
                </span>";

                $username = $_POST['ProfileName'];

                
            }else{
                echo "";

            }
        ?>

<?php
    }
?>