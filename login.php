<?php

session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: home.php");
                    die;
                }
            }
        }

        echo "wrong username or password!";
    } else {
        echo "wrong username or password!";
    }
}

?>

<!-- Hello Inspect Element :D -->
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /* Bordered form */
        form {
            border: 3px solid #f1f1f1;
            background-color: white;
            color: black;
        }

        form a {
            color: black;
        }

        /* Full-width inputs */
        input[type=text],
        input[type=password] {
            width: 100%;
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
            width: 100%;
            border-radius: 25px;
        }

        /* Add a hover effect for buttons */
        button:hover {
            opacity: 0.8;
        }

        /* Extra style for the cancel button (red) */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the avatar image inside this container */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        /* Avatar image */
        img.avatar {
            width: 20%;
            border-radius: 50%;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
        }

        /* The "Forgot password" text */
        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }

        #box {
            width: 500px;
            margin: auto;
        }
    </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="/cooler_math/png/icon.png" />
    <link rel="apple-touch-icon" sizes="128x128" href="/cooler_math/png/high_def_icon.png" />
    <link href="/cooler_math/css/main.css" rel="stylesheet" />
    <title>Login | Cooler Math</title>
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">
            <h1>Account Login
                <hr>
            </h1>

            <!--
                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button>
                    <label>
                        <input type="checkbox" unchecked="unchecked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" class="cancelbtn">Cancel</button>
                </div>
    -->
            <div id="box">

                <form method="post">
                    <div class="imgcontainer">
                        <img src="/cooler_math/png/high_def_icon.png" alt="Avatar" class="avatar">
                    </div>

                    <?php
                    $condition = check_login_bool($con);

                    if ($condition) {
                        $user_data = check_login($con);
                        echo "Hello ";
                        echo $user_data['user_name'];
                    } else {
                        echo "Login to Continue";
                    }

                    if ($condition):
                        ?>
                        <div class="container">
                            <button type="button" onclick="window.location.href='logout.php'">Want to Logout?</button>
                            <button type="button" onclick="window.location.href='home.php'">Return Home?</button>
                        </div>

                    <?php endif; ?>
                    <?php
                    if (!$condition):
                        ?>

                        <input id="text" type="text" placeholder="Enter Username" name="user_name"><br><br>
                        <input id="text" type="password" placeholder="Enter Password" name="password"><br><br>

                        <input id="button" type="submit" value="Login" style="background-color: aqua"><br><br>
                        <div class="container">
                            <button id="button" type="button" onclick="window.location.href='signup.php'">Want to Signup?</button>
                            <button id="button" type="button" onclick="window.location.href='home.php'">Forgot Password?</button>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
            </form>
        </div>



        <!--<footer id="footer">
            
<a href="legal.php">Conditions of Use</a>
<a href="legal.php">Privacy Notice</a>
<a href="legal.php">Interest-Based Ads</a>

            <br />Cooler Math Games is optimized for gaming by gamers. Games might
            be simplified to improve gaming for bad gamers. Games are constantly
            reviewed to avoid errors, but we cannot warrant full correctness of all
            content. While using Cooler Math Games, you agree to have read and
            accepted our terms of use, cookie and privacy policy as well as
            understanding our <a href="legal.php">legal</a> page.
            <br />Copyright 2022-<span style="color: aqua; font-size: small">∞</span>
            by Me. All Rights Reserved.
        </footer>-->
    </div>
</body>

</html>