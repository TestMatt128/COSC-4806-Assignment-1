<?php
session_start();

// We first need to check if the user is logged in.
// If not, automatically redirect them to the login page, fyi; login.php
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true)
  header("Location: /login.php");

// If the user is logged in, the date when the user logged in will be displayed. So we initialize the date variable here.
$date = date('m/d/Y'); 
?>

<DOCTYPE html>
<html>
  <head>
    <title>COSC 4806 - Assignment 1 (Matthew Del Fierro)</title>
  </head>
  <body>

    <h1>Assignment 1: Login Page</h1>
    <!-- This should be the check to see if the username is verified and authenticated. Shows the date when the user logged in. -->
    <p> Welcome to the login page, <?=$_SESSION['username']?>! You logged in on <?=$date?>. </p>
  </body>

  <!-- The link to start the login process again whenever needed to log out. -->
  <footer>
     <p><a href="/logout.php"> Click this link to logout and start again!</a></p>
  </footer>
</html>