<?php
  session_start();
?>

<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <style>
            a:link {
              color: white;
              background-color: transparent;
              text-decoration: none;
            }
            a:visited {
              color: white;
              background-color: transparent;
              text-decoration: none;
            }
            a:hover {
              color: red;
              background-color: transparent;
              text-decoration: underline;
            }
            a:active {
              color: red;
              background-color: transparent;
              text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <nav id="nav">
            <ui>
                <li>
                    <a href="index.php">Home</a>
                    <a href="divisions.php">Divisions</a>
                    <a href="hierarchy.php">Hierarchy</a>
                    <a href="assets.php">Assets</a>
                </li>
            </ui>
        </nav>
        <nav id="nav" style="position:absolute; left:1150; list-type: none;">
          <ui>
            <?php
              if(isset($_SESSION["user"])){
                echo "<li><a href='profile.php'>Profile</a><a href='logout.php'>Logout</a></li>";
              }else{
                echo "<li><a href='signup.php'>Register</a><a href='login.php'>Login</a></li>";
              }
            ?>
          </ui>
        </nav>

