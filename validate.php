<?php

  session_start();

  $valid_username = "Matt";
  $valid_password = "TestMatt128";

  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == $valid_username && $password == $valid_password) {
    echo "Login successful! Hello, $username!";
  } else {
    if(isset($_SESSION['login_attempt_fails'])){
      $_SESSION['login_attempt_fails'] += 1;
    } else {
      $_SESSION['login_attempt_fails'] = 1;
    }

    echo "Login failed. Total fails: " . $_SESSION['login_attempt_fails'];
  }

?>