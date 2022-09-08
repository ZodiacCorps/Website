<?php

$serverName = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "zodiaccorps";

$conn = mysqli_connect($serverName, $dbUser, $dbPass, $dbName);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}