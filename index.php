<?php
session_start();



// We first need to check if the user is logged in.
// If not, automatically redirect them to the login page, fyi; login.php
?>

<DOCTYPE html>
<html>
  <head>
    <title>COSC 4806 - Assignment 1 (Matthew Del Fierro)</title>
  </head>
  <body>

    <h1>Assignment 1: Login Page</h1>

    <p> Welcome to the login page, <?=$_SESSION['username'] ?></p>
    
  </body>

  <footer>
     <p><a href="/logout.php"> Click this link to logout and start again!</a></p>
  </footer>
</html>