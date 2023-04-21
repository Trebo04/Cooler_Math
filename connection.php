<?php
try {
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "login";
}
catch(mysqli_sql_exception) {
	echo"You are not connected! 😔";
}
if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

	die("failed to connect!");
}

?>