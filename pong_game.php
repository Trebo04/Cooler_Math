<?php
/*
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
*/
ini_set('display_errors', 1);
error_reporting(E_ALL);

$myVar = $_POST['myVar'];
// Check if the 'myVar' parameter was sent in the request body
if (isset($_POST['myVar'])) {
    // Retrieve the value of the 'myVar' parameter from the request body
    $myVar = $_POST['myVar'];
  
    // Print the value of the 'myVar' parameter to the browser
    echo $myVar;
  } else {
    // If the 'myVar' parameter was not sent, print an error message
    echo "Error: 'myVar' parameter not found."."<br>";
  }

var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "<br>"."it's posting";
}
echo "<br>".$_SERVER['REQUEST_METHOD'];

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="pong.js"></script>


</body>

</html>