<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
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
    <?php if (isset($_SESSION['errors'])) { ?>
      <ul>
        <?php foreach ($_SESSION['errors'] as $error) { ?>
          <li><?= $error ?></li>
        <?php } ?>
      </ul>
    <?php } ?>
    <form action="process.php" method="post">
      <input type="hidden" name="action" value="registration">
      Name: <input type="text" name="name">
      Email: <input type="text" name="email">
      Password: <input type="password" name="password">
      <input type="submit" value="Register">
    </form>
  </body>
</html>
