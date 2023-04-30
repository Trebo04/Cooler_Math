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
		body {
			background-color: #252525
		}
	</style>
	<link href="main.css" rel="stylesheet" />
	<title>Signup | Cooler Math</title>
</head>

<body>
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
	<h1>Account Signup</h1>
	<hr>
	<div id="box">

		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
			<input id="text" type="text" placeholder="Create Username" name="user_name"><br><br>
			<input id="text" type="password" placeholder="Create Password" name="password"><br><br>
			<input id="button" type="submit" value="Signup"><br><br>
			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>

</html>