<?php

?>

<!-- Hello Inspect Element :D -->
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #page-container {
            font-family: "customfont";
        }
    </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="/png/icon.png" />
    <link rel="apple-touch-icon" sizes="128x128" href="/png/high_def_icon.png" />
    <link href="/css/main.css" rel="stylesheet" />
    <title>PONG | Cooler Math</title>
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">
            <nav>
                <ul id="rcorners1">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="/php/asteroids.php">Asteroids</a></li>
                    <li><a href="/php/pong.php">PONG</a></li>
                    <li style="float: right">
                        <a href="/php/account.php">Account</a>
                    </li>
                </ul>
            </nav>
            <h1>
                PONG
                <br />
                <hr />
                <!--<div id="start">START</div>-->
                <div id="gameContainer">
                    <canvas id="gameBoard" width="1250" height="600"></canvas>
                    <div id="scoreText">0 : 0</div>
                    <button id="resetBtn" style="font-family: customfont">RESET</button>
                </div>
                <script src="/javascript/pong.js"></script>
            </h1>
            <br><br><br>
        </div>
        <footer id="footer">
            <!--
<a href="/php/legal.php">Conditions of Use</a>
<a href="/php/legal.php">Privacy Notice</a>
<a href="/php/legal.php">Interest-Based Ads</a>
-->
            <br />Cooler Math Games is optimized for gaming by gamers. Games might
            be simplified to improve gaming for bad gamers. Games are constantly
            reviewed to avoid errors, but we cannot warrant full correctness of all
            content. While using Cooler Math Games, you agree to have read and
            accepted our terms of use, cookie and privacy policy as well as
            understanding our <a href="/php/legal.php">legal</a> page.
            <br />Copyright 2022-<span style="color: aqua; font-size: small">∞</span>
            by Me. All Rights Reserved.
        </footer>
    </div>
</body>

</html>