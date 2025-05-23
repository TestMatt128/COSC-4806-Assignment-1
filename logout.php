<?php
// A quick redirect to the login page. Restarts the session again, so all data is reset back to default.
session_start();
session_destroy();

header("Location: /login.php");
?>