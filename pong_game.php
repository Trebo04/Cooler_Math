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
    <link href="/cooler_math/css/main.css" rel="stylesheet"/>
</head>

<body>
    <div id="gameContainer">
        <canvas id="gameBoard" width="1000" height="600"></canvas>
        <div id="scoreText">0 : 0</div>
        <button id="resetBtn" style="font-family: customfont">RESET</button>
    </div>

    <script src="/cooler_math/javascript/pong.js">

    </script>
    
</body>

</html>