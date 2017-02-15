<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Results</title>
  </head>
  <body>
    <h1>Results</h1>
    <p>Email: <?= $_SESSION['email'] ?></p>
    <p>Submitted Registration Form: <?= $_SESSION['reg_counter'] ?> time(s)</p>
  </body>
</html>
