<?php

  $valid_username = "Matt";
  $valid_password = "password";

  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == $valid_username && $password == $valid_password) {
    echo "Login successful! Hello, $username!";
  } else {
    echo "Invalid username or password. Please try again.";
  }

>