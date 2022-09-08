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
        
        <form align="center" id="Signup" class="box" action="includes/signup.inc.php" method="post">
            <h1 id="Header">
                Register
            </h1>
            <input type="text" name="user" placeholder="Enter username" id="username">
            <br>
            <br>
            <input type="password" name="pwd" placeholder="Enter password" id="password">
            <br>
            <br>
            <input type="password" name="pwd_verify" placeholder="Renter password" id="pwd_verify">
            <br>
            <br>
            <input type="text" name="email" placeholder="Enter email" id="email">
            <br>
            <br>
            <button type="submit" name="submit">Register</button>

        </form>
<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p id=\"Header\" style=\" position: absolute; top: 320; left: 630;\">Fill in all Fields!</p>";
        }
        elseif($_GET["error"] == "invaliduser"){
            echo "<p id=\"Header\">Invalid Characters in Username!</p>";
        }
        elseif($_GET["error"] == "invalidemail"){
            echo "<p id=\"Header\">Invalid Email!!</p>";
        }
        elseif($_GET["error"] == "pwdmismatch"){
            echo "<p id=\"Header\">Passwords Mismatch</p>";
        }
        elseif($_GET["error"] == "usertaken"){
            echo "<p id=\"Header\">Username / Email Already Taken</p>";
        }
        elseif($_GET["error"] == "none"){
            echo "<p id=\"Header\">Registered Successfully! Please speak with a Zodiac Management Member!</p>";
        }
    }
?>
    </body>
</html>

<?php
    }
?>