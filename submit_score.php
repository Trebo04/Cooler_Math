<?php

session_start();

include("connection.php");
include("functions.php");

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$user_data = check_login($con);

$user_id = $user_data['user_id'];

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if the 'myVar' parameter was sent in the request body
if (isset($_POST['myVar'])) {
    // Retrieve the value of the 'myVar' parameter from the request body
    $myVar = $_POST['myVar'];

    // Print the value of the 'myVar' parameter to the browser
    echo $myVar;
} else {
    // If the 'myVar' parameter was not sent, print an error message
    echo "Error: 'myVar' parameter not found." . "<br>";
}

// Dump the contents of the $_POST array
/* var_dump($_POST); */


$score_id = random_num(11);

$query = "INSERT INTO scores (score_id, user_id, pong_score, score_date) VALUES ('$score_id', '$user_id', '$myVar', NOW())";

mysqli_query($con, $query);

die;

?>