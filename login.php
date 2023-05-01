<?php

session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        // read from database
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);
                /*  **If password wasn't hashed**
                if (($user_data['password'] === $password)) { */
                if (password_verify($password, $user_data['password'])) {
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
    </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="icon.png" />
    <link rel="apple-touch-icon" sizes="128x128" href="high_def_icon.png" />
    <link href="main.css" rel="stylesheet"/>
    <title>Login | Cooler Math</title>
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">
            <h1>😎Cooler Math Games<span style="cursor: wait">🤔</span></h1>
            <hr>
                <form method="post">
                    <div class="imgcontainer">
                        <img src="profile_pic.png" alt="Avatar" class="avatar">
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
                            <h2>You're Logged In</h2>
                            <img src="coolguy.png"><br><br>
                            <button type="button" onclick="window.location.href='logout.php'">Logout</button>
                            <button type="button" onclick="window.location.href='home.php'">Return Home</button>
                        </div>

                    <?php endif; ?>
                    <?php
                    if (!$condition):
                        ?>
                        <div class="container">
                            <input id="text" type="text" placeholder="Enter Username" name="user_name"><br><br>
                            <input id="text" type="password" placeholder="Enter Password" name="password"><br><br>
                            <button id="button" type="submit" value="Login" style="background-color: aqua">Login</button>
                            <button id="button" type="button" onclick="window.location.href='signup.php'">Signup</button>
                            <button id="button" type="button" onclick="window.location.href='home.php'">Forgot
                                Password?</button>
                        </div>
                    <?php endif; ?>
                </form>
        </div>
        <footer id="footer">
            <a href="privacy_policy.php">privacy policy</a> | <a href="legal.php">legal</a>
        </footer>
    </div>
</body>

</html>