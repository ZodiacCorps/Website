<?php

require("bin/eve/data/esi.php");

function emptyInputRegister($username, $password, $pwd_verify, $email){
    $results;

    if(empty($username) || empty($password) || empty($pwd_verify) || empty($email)){
        $results = true;
    }else{
        $results = false;
    }
    return $results;
}

function invalidUser($username){
    $results;

    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $results = true;
    }else{
        $results = false;
    }
    return $results;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function pwdMatch($password, $pwd_verify){
    $results;

    if($password !== $pwd_verify){
        $results = true;
    }else{
        $results = false;
    }
    return $results;
}

function userExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE username = ? or email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $password){
    $sql = "INSERT INTO users (email, username, pwd, base, division, rank, isCEO, isDirector, isDivLead, isDivCom, isMember) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    $base = "n/a";
    $div = "n/a";
    $rank = "Guest";
    $isCeo = false;
    $isDirector = false;
    $isDivLead = false;
    $isDivCom = false;
    $isMember = false;

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssssiiiii", $email, $username, $hashedPwd, $base, $div, $rank, $isCeo, $isDirector, $isDivLead, $isDivCom, $isMember);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
    exit();
}

function emptyInputLogin($username, $password){
    $results;

    if(empty($username) || empty($password)){
        $results = true;
    }else{
        $results = false;
    }
    return $results;
}

function loginUser($conn, $username, $password){
    $userExists = userExists($conn, $username, $username);

    if($userExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $userExists["pwd"];

    $checkPwd = password_verify($password, $pwdHashed);

    if($checkPwd === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    elseif($checkPwd === true){
        session_start();
        $_SESSION["user"] = $userExists["username"];
        $state = "adfa83aldj09ggjlljfa";
        $authUrl = "https://login.eveonline.com/v2/oauth/authorize/" . "response_type=code&redirect_uri=" . $cback . "&client_id=" . $cid . "&state=" . $state;
        if(header_sent){
            echo "<script>window.location = " . $authUrl . ";</script>";
        }else{
            header("Location: " . $authUrl);
            die();
        }
        header("location: ../index.php");
        exit();
    }
}
