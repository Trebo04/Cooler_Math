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
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">
                <div id="gameContainer">
                    <canvas id="gameBoard" width="1000" height="600"></canvas>
                    <div id="scoreText">0 : 0</div>
                    <button id="resetBtn" style="font-family: customfont">RESET</button>
                </div>

                <iframe src="pong_game.php" title=""></iframe>

                <script src="/cooler_math/javascript/pong.js">

                </script>
            </h1>
            <table style="width:fixed">
            <tr>
                <th>User</th>
                <th>Opponent</th>
            </tr>
            <tr>
                <td></td>
                <td>50</td>
            </tr>
            <tr>
                <td>70</td>
                <td>90</td>
            </tr>
            </table>
            <br><br><br>
        </div>
        <footer id="footer">
            <!--
            <a href="legal.php">Conditions of Use</a>
            <a href="legal.php">Privacy Notice</a>
            <a href="legal.php">Interest-Based Ads</a>
            -->
            <br />Cooler Math Games is optimized for gaming by gamers. Games might
            be simplified to improve gaming for bad gamers. Games are constantly
            reviewed to avoid errors, but we cannot warrant full correctness of all
            content. While using Cooler Math Games, you agree to have read and
            accepted our terms of use, cookie and privacy policy as well as
            understanding our <a href="legal.php">legal</a> page.
            <br />Copyright 2022-<span style="color: aqua; font-size: small">∞</span>
            by Me. All Rights Reserved.
        </footer>
    </div>
</body>

</html>