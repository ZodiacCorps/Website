<?php
    require("bin/eve/data/esi.php");

    $maintanence = 0;

    if($maintanence == 1){

?>

<html>
    <body>
        <h1 align="center">Webpage is currently under maintenance</h1>
    </body>
</html>

<?php
    }else{
        include_once 'header.php';

        $state = "adfa83aldj09ggjlljfa";
        $authUrl = "https://login.eveonline.com/v2/oauth/authorize/" . "?response_type=code&redirect_uri=" . $cback . "&client_id=" . $cid . "&state=" . $state;
        if(headers_sent()){
            echo "<script>window.location = " . $authUrl . ";</script>";
        }else{
            header("Location: " . $authUrl);
            die();
        }
?>

        <h1 id="Header">Welcome to the Zodiac Corps</h1>
        <br>
        <span>
            <p id="Intro">
                Zodiac Corps is a newer alliance in a game known as
                Eve Online. In Zodiac Corps, you will be able to choose
                between one of our fine divisions. Climb up the ranks of Zodiac
                Corps as you work your way towards all the riches New Eden has to
                offer. Gather together and Form Fleets for better efficiency.
                Become a Fleet Leader, Recruiter, Miner, Division Leadership and
                more!
            </p>
        </span>
        <div>
            <h1 id="Header">What does Zodiac Corps offer?</h1>
            <br>
            <p>
                <ui>
                    <li id="Intro">
                        Fleets to group up with others, to go on mining trips, hauling trips,
                        salvaging runs and more!
                    </li>
                    <li id="Intro">
                        Supplies / Ships provided by the corporation, Supplies will be provided before
                        going out Fleeting, Mission Running, Etc.
                    </li>
                    <li id="Intro">
                        We are a new growing corporation, We offer plenty of oppertunities to climb
                        up the ladder weither you want to work your way up to a Fleet Wing Commander,
                        Fleet Commander, or even go for top dog positions in the corporation management
                        fields (Accounting, Recruiting, Scheduling Trade Runs and More!)
                    </li>
                    <li id="Intro">

                    </li>
                </ui>
            </p>
        </div>
    </body>
</html>

<?php
    }
?>