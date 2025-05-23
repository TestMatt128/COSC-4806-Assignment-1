<?php

  session_start();

  // Use this username and password as a valid login when checking (To the Professor)
  $valid_username = "Matt";
  $valid_password = "TestMatt128";

  $username = $_REQUEST['username'];
  $_SESSION['username'] = $username;
  $password = $_REQUEST['password'];
  // If the authentication is successful, the user will be sent to the index page, indicated that the user is logged in.
  if ($username == $valid_username && $password == $valid_password) {
    $_SESSION['authenticated'] = true;
    header("Location: /");
  } else {
    // The counter for the failed login attempts.
    if(isset($_SESSION['login_attempt_fails'])){
      $_SESSION['login_attempt_fails'] += 1;
    } else {
      $_SESSION['login_attempt_fails'] = 1;
    }

    // The fail counter will be displayed every time they fail to login and see this message.
    print "Login failed. Total fails: " . $_SESSION['login_attempt_fails'];
    // After the login fail, we must redirect them to the login page again. This is the link to redirect them.
    echo "<br><a href='/login.php'>Click here to try again!</a>";
  }

?>