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
        body {
            font-family: Courier New, arial, helvetica, sans-serif;
            background-color: white;
            color: black;
        }

        body p {
            text-align: left;
            text-indent: 7ex;
        }

        div.sticky {
            position: sticky;
            top: 0;
            padding: 5px;
            color: aqua;
            background-color: black;
            border: 2px solid aqua;
        }

        /* unvisited link */
        a:link {
            color: black;
            text-decoration: none;
        }

        /* visited link */
        a:visited {
            color: black;
            text-decoration: none;
        }

        /* mouse over link */
        a:hover {
            color: black;
            text-decoration: none;
        }

        /* selected link */
        a:active {
            color: black;
            text-decoration: none;
        }
    </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="icon.png" />
    <link rel="apple-touch-icon" sizes="128x128" href="high_def_icon.png" />
    <link href="" rel="stylesheet" />
    <title>Cooler Math | Privacy Policy</title>
</head>

<body>
    <div class="sticky" style="text-align: center">😎Cooler Math Games🤔<div style="text-align: right"><a
                href="login.php">Account |
                <?php echo $user_data['user_name']; ?>
            </a></div>
    </div>
    <h1>Privacy Stuff</h1>
    <hr><br>
    Your data is mine, but I hash protected your password 😔.
    <h1 style="text-align: center">
        <a style="color: aqua" href="home.php">return home</a>
    </h1>
</body>

</html>