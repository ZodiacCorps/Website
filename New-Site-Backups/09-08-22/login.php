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
        
        <form align="center" id="Login" class="box" action="includes/login.inc.php" method="post">
            <h1>
                Login
            </h1>
            <input type="text" name="user" placeholder="Enter username" id="username">
            <br>
            <br>
            <input type="password" name="pwd" placeholder="Enter password" id="password">
            <br>
            <br>
            <input type="submit" name="submit" id="login" value="Login" onclick="validate()">

        </form>
    </body>
</html>

<?php
    }
?>