<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!-- Hello Inspect Element :D -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="/cooler_math/png/icon.png" />
  <link rel="apple-touch-icon" sizes="128x128" href="/cooler_math/png/high_def_icon.png" />
  <link href="/cooler_math/css/main.css" rel="stylesheet" />
  <title>Asteroids | Cooler Math</title>
</head>

<body>
  <div id="page-container">
    <div id="content-wrap">
      <nav>
        <ul id="rcorners1">
          <li><a href="home.php">Home</a></li>
          <li><a href="asteroids.php">Asteroids</a></li>
          <li><a href="pong.php">PONG</a></li>
          <li style="float: right"><a href="login.php">Account | <?php echo $user_data['user_name']; ?></a></li>
        </ul>
      </nav>
      <h1>
        Asteroids
        <br />
        <hr />
        <div id="start">START</div>
      </h1>
    </div>
    <footer id="footer">
      <!--
<a href="legal.php">Conditions of Use</a>
<a href="legal.php">Privacy Notice</a>
<a href="legal.php">Interest-Based Ads</a>
-->
      <br />Cooler Math Games is optimized for gaming by gamers. Games might
      be simplified to improve gaming for bad gamers. Games are constantly
      reviewed to avoid errors, but we cannot warrant full correctness of all
      content. While using Cooler Math Games, you agree to have read and
      accepted our terms of use, cookie and privacy policy as well as
      understanding our <a href="legal.php">legal</a> page.
      <br />Copyright 2022-<span style="color: aqua; font-size: small">∞</span>
      by Me. All Rights Reserved.
    </footer>
  </div>
</body>

</html>