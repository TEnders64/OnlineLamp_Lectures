<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Email App</title>
  </head>
  <body>
<?php if (isset($_SESSION['error']) && $_SESSION['error'] == true){ ?>
    <p>Invalid Email</p>
<?php } ?>
    <form action="process.php" method="post">
      <input type="text" name="email">
      <input type="submit" value="Add Email">
    </form>
  </body>
</html>
