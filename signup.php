<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        //save to database
        $user_id = random_num(11);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$hash')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    } else {
        echo "Please enter some valid information!";
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <style>
        /* Bordered form */
        form {
            /* border: 3px solid #f1f1f1; */
            background-color: #252525;
            color: aqua;
            width: 75%;
            margin: auto;
        }

        /* Full-width inputs */
        input[type=text],
        input[type=password] {
            width: 75%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 25px;
        }

        /* Set a style for all buttons */
        button {
            background-color: aqua;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: fit-content;
            border-radius: 25px;
        }

        /* Add a hover effect for buttons */
        button:hover {
            opacity: 0.8;
        }

        /* Center the avatar image inside this container */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        /* Avatar image */
        img.avatar {
            width: 25%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
        }

        body {
            background-color: #252525
        }
    </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="icon.png" />
    <link rel="apple-touch-icon" sizes="128x128" href="high_def_icon.png" />
    <link href="main.css" rel="stylesheet" />
    <title>Signup | Cooler Math</title>
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">
            <h1>😎Cooler Math Games<span style="cursor: wait">🤔</span></h1>
            <h2>Account Signup</h2>
            <hr>
            <div class="container">
                <form method="post">
                    <input id="text" type="text" placeholder="Create Username" name="user_name"><br><br>
                    <input id="text" type="password" placeholder="Create Password" name="password"><br><br>
                    <button id="button" type="submit" value="Signup">Signup</button>
                    <button id="button" type="button" onclick="window.location.href='login.php'">Return to
                        Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>