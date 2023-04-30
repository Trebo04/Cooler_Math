<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="icon.png" />
    <link rel="apple-touch-icon" sizes="128x128" href="high_def_icon.png" />
    <link href="main.css" rel="stylesheet" />
    <title>Cooler Math</title>
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">
            <nav>
                <ul id="rcorners1">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="pong.php">PONG</a></li>
                    <li><a href="scores.php">SCORES</a></li>
                    <li style="float: right"><a href="logout.php">Logout</a></li>
                    <li style="float: right"><a href="login.php">Account |
                            <?php echo $user_data['user_name']; ?>
                        </a></li>
                </ul>
            </nav>
            <div id="title">
                <h1>😎Cooler Math Games<span style="cursor: wait">🤔</span></h1>
            </div>
            <hr />
            <h2>About</h2>
            <p>
                This website <i>will</i>
                <!-- <i> is the same as <em> -->
                be <b>better</b>
                <!-- <b> is the same as <strong> -->
                than
                <a href="https://www.coolmath.com" target="_blank"
                    title="This takes you to the worse website">coolmath</a>.
            </p>
            <!--Default target is _self-->
        </div>
        <footer id="footer">
            <a href="privacy_policy.php">privacy policy</a> | <a href="legal.php">legal</a>
        </footer>
    </div>
    <!--lorem + [Tab] to make sample text-->
</body>

</html>