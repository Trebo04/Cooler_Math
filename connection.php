<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$con) {

    die("failed to connect!");
}
?>