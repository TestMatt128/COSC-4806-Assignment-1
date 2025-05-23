<DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>
<body>
    <h1>Login Form</h1>

  <!-- The components for the login form. -->
  <form action="/validate.php" method="post">
    <label for=username>Username</label>
    <br>
    <input type="text" id="username" name="username">
    <br>
    <label for="password">Password</label>
    <br>
    <input type="password" id="password" name="password">
    <br><br>
    <input type="submit" value="Submit">
  <!-- After the information is put in and the Submit button is clicked, one of 2 outcomes will activate. Check the validate.php for both conditions. -->
  </form>
</body>
</html>