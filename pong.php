<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #page-container {
            font-family: "customfont";
        }

        canvas {
            width: 40%;
        }
    </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="icon.png" />
    <link rel="apple-touch-icon" sizes="128x128" href="high_def_icon.png" />
    <link href="main.css" rel="stylesheet" />
    <title>PONG | Cooler Math</title>
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
            <h1>
                PONG
                <br>
                <hr>
                <div id="gameContainer">
                    <canvas id="gameBoard" width="600%" height="600%"></canvas>
                    <div id="scoreText">0 : 0</div>
                    <button id="resetBtn" style="font-family: customfont">RESET AND SAVE SCORE</button>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="pong.js?v=<?php echo time(); ?>"></script>
                <h3>Your Most Recent Score: <div id="response"></div>
                </h3>
            </h1>
            <br><br><br>
        </div>
        <footer id="footer">
            <a href="privacy_policy.php">privacy policy</a> | <a href="legal.php">legal</a>
        </footer>
    </div>
</body>

</html>