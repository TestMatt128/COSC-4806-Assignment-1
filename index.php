<?php
session_start();

// We first need to check if the user is logged in.
// If not, automatically redirect them to the login page, fyi; login.php
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true)
  header("Location: /login.php");
?>

<DOCTYPE html>
<html>
  <head>
    <title>COSC 4806 - Assignment 1 (Matthew Del Fierro)</title>
  </head>
  <body>

    <h1>Assignment 1: Login Page</h1>
    <!-- This should be the check to see if the username is verified and authenticated. As a bonus, show the user how many attempts it took to finally log in! -->
    <p> Welcome to the login page, <?=$_SESSION['username']?>! It took a total of <?=$_SESSION['login_attempts_fails'] ?> attempt(s) to successfully log in!</p>
    
  </body>

  <!-- The link to start again whenever needed to log out. -->
  <footer>
     <p><a href="/logout.php"> Click this link to logout and start again!</a></p>
  </footer>
</html>