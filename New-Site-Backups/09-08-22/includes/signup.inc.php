<?php

if(isset($_POST["submit"])){
    $username = $_POST["user"];
    $password = $_POST["pwd"];
    $pwd_verify = $_POST["pwd_verify"];
    $email = $_POST["email"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputRegister($username, $password, $pwd_verify, $email) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if(invalidUser($username) !== false){
        header("location: ../signup.php?error=invaliduser");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($password, $pwd_verify) !== false){
        header("location: ../signup.php?error=pwdmismatch");
        exit();
    }
    if(userExists($conn, $username, $email) !== false){
        header("location: ../signup.php?error=usertaken");
        exit();
    }

    createUser($conn, $username, $email, $password);
}else{
    header("location: ../signup.php");
    exit();
}