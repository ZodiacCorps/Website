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
?>

<html>
    <head>
        <link rel="stylesheet" href="../../../main.css">
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
                    <a href="wchaul.php">Home</a>
                    <a href="../../../divisions.php">Divisions</a>
                    <a href="roster.php">Roster</a>
                    <a href="../../../login.php">Login</a>
                </li>
            </ui>
        </nav>
        <span>
            <h1 id="Header">Whiteclaw Haulers Roster</h1>
        </span>
        <div>
            <table width="100%" id="Intro">
                <tr>
                    <th>ID Number</th>
                    <th>Username</th>
                    <th>Based At</th>
                    <th>Rank</th>
                </tr>
                <tr>
                    <td align="center">01</td>
                    <td align="center">None</td>
                    <td align="center">None</td>
                    <td align="center">None</td>
                </tr>
                <tr>
                    <td align="center">02</td>
                    <td align="center">None</td>
                    <td align="center">None</td>
                    <td align="center">None</td>
                </tr>
                <tr>
                    <td align="center">03</td>
                    <td align="center">None</td>
                    <td align="center">None</td>
                    <td align="center">None</td>
                </tr>
                <tr>
                    <td align="center">04</td>
                    <td align="center">None</td>
                    <td align="center">None</td>
                    <td align="center">None</td>
                </tr>
                <tr>
                    <td align="center">05</td>
                    <td align="center">None</td>
                    <td align="center">None</td>
                    <td align="center">None</td>
                </tr>
                <tr>
                    <td align="center">06</td>
                    <td align="center">None</td>
                    <td align="center">None</td>
                    <td align="center">None</td>
                </tr>
            </table>
        </div>
    </body>
</html>

<?php
    }
?>