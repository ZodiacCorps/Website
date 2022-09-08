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

        <span>
            <h1 id="Header" align="center">
                Minmatar Regions
                <div>
                    <h2 id="Header2" align="center">Metropolis</h2>
                </div>
            </h1>
        </span>
        <div>
            <table width="100%" id="Intro">
                <tr>
                    <th>Solar System</th>
                    <th>Station</th>
                    <th>Type</th>
                    <th>System Commander</th>
                    <th>Establish Date</th>
                    <th>Corporate HQ</th>
                </tr>
                <tr>
                    <td align="center">Yrmori</td>
                    <td align="center"><a href="CorpAssets/Yrmori/yrmori.php">Yrmori VI <br>Core Complexion Inc. Factory</a></td>
                    <td align="center">Office</td>
                    <td align="center">None</td>
                    <td align="center">08/25/2022</td>
                    <td align="center">True</td>
                </tr>
                <tr>
                    <td align="center">Elgoi</td>
                    <td align="center"><a href="CorpAssets/Elgoi/elgoi.php">Elgoi VIII <br>Core Complexion Inc. Storage</a></td>
                    <td align="center">Office</td>
                    <td align="center">None</td>
                    <td align="center">08/28/2022</td>
                    <td align="center">False</td>
                </tr>
                <tr>
                    <td align="center">Eram</td>
                    <td align="center"><a href="CorpAssets/Elgoi/elgoi.php">Eram VIII <br>Sebiestor Tribe Bureau</a></td>
                    <td align="center">Office</td>
                    <td align="center">None</td>
                    <td align="center">09/04/2022</td>
                    <td align="center">False</td>
                </tr>
            </table>
        </div>

        <span>
            <h1 id="Header" align="center">
                Amarr Regions
                <div>
                    <h2 id="Header2" align="center">Devoid</h2>
                </div>
            </h1>
            <br>
            
        </span>

        <div>
            <table width="100%" id="Intro">
                <tr>
                    <th>Solar System</th>
                    <th>Station</th>
                    <th>Type</th>
                    <th>System Commander</th>
                    <th>Establish Date</th>
                    <th>Corporate HQ</th>
                </tr>
                <tr>
                    <td align="center">Choonka</td>
                    <td align="center"><a href="CorpAssets/Choonka/choonka.php">Choonka X <br>Imperial Armaments Factory</a></td>
                    <td align="center">Office</td>
                    <td align="center">None</td>
                    <td align="center">09/01/2022</td>
                    <td align="center">False</td>
                </tr>
            </table>
        </div>
    </body>
</html>

<?php
    }
?>