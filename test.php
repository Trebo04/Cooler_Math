<?php

include("functions.php");

/*
ini_set('display_errors', 1);
error_reporting(E_ALL);
*/

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
/*
// Dump the contents of the $_POST array
var_dump($_POST);
*/

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$id = random_num(11);

$query = "INSERT INTO dumb (id,var) values ('$id','$myVar')";

mysqli_query($con, $query);

header("Location: test_page.php");

die;

?>
