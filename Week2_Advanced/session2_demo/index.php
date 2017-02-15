<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login/Registration</title>
  </head>
  <body>
    <h1>Login</h1>
    <form action="process.php" method="post">
      <input type="hidden" name="action" value="login">
      Email: <input type="text" name="email">
      Password: <input type="password" name="password">
      <input type="submit" value="Login">
    </form>
    <h1>Registration</h1>
    <form action="process.php" method="post">
      <input type="hidden" name="action" value="registration">
      Email: <input type="text" name="email">
      Password: <input type="password" name="password">
      Confirm Password: <input type="password" name="c_password">
      <input type="submit" value="Login">
    </form>
  </body>
</html>
