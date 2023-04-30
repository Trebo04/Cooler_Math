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
    <title>Cooler Math | Scores</title>
</head>

<body>
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
    <div style='color:yellow;'>
        <h1>PONG Highscores</h1>
    </div>
    <!-- Get high scores from database and display them -->
    <p>
        <?php
        // Connect to MySQL database
        $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        // Check if user is logged in and get user id
        $user_data = check_login($con);
        $user_id = $user_data['user_id'];

        // Show error messages
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        // SQL query to get high scores and usernames
        $query = "SELECT u.user_name, s.pong_score, s.score_date
                    FROM scores s
                    JOIN users u ON s.user_id = u.user_id
                    ORDER BY s.pong_score DESC
                    LIMIT 10";

        $num = 0;

        // Get query results and display high scores and usernames
        if ($result = $con->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $num += 1;
                echo "<p style='color:yellow; font-size:20px;'>" . "#" . $num . " : " . $row["user_name"] . " scored " . $row["pong_score"] . " on " . $row["score_date"] . "<br>" . "</p>";
            }
        }
        ;

        // Display a message if no scores were found
        if (mysqli_num_rows($result) == 0) {
            echo "Nothing to Display 🤷🏻‍♂️";
        }
        ;
        ?>
    </p>

    <hr>
</body>

</html>