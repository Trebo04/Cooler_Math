<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!-- Hello Inspect Element :D -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="/cooler_math/png/icon.png" />
    <link rel="apple-touch-icon" sizes="128x128" href="/cooler_math/png/high_def_icon.png" />
    <link href="/cooler_math/css/main.css" rel="stylesheet" />
    <title>Cooler Math</title>
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">
            <nav>
                <ul id="rcorners1">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="asteroids.php">Asteroids</a></li>
                    <li><a href="pong.php">PONG</a></li>
                    <li><a href="wallball.php">Wall Ball</a></li>
                    <li style="float: right"><a href="logout.php">Logout</a></li>
                    <li style="float: right"><a href="login.php">Account | <?php echo $user_data['user_name']; ?></a></li>
                </ul>
            </nav>
            <div id="title">
                <h1>😎Cooler Math Games<span style="cursor: wait">🤔</span></h1>
            </div>
            <hr/>
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
            <img src="coolguy.png">
        </div>
        <footer id="footer">
            <!--
<a href="legal.php">Conditions of Use</a>
<a href="legal.php">Privacy Notice</a>
<a href="legal.php">Interest-Based Ads</a>
-->
            Cooler Math Games is optimized for gaming by gamers. Games might be
            simplified to improve gaming for bad gamers. Games are constantly
            reviewed to avoid errors, but I cannot warrant full correctness of all
            content. While using Cooler Math Games, you agree to have read and
            accepted my terms of use, cookie and privacy policy as well as
            understanding my <a href="legal.php">legal</a> page. <br />Copyright
            2022-<span style="color: aqua; font-size: small">∞</span> by Me. All
            Rights Reserved.
        </footer>
    </div>
</body>

</html>

<!--lorem + [Tab] to make sample text-->