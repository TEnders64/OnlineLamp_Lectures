<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Email</title>
  </head>
  <body>
    <h1><?= $_SESSION['email'] ?></h1>
  </body>
</html>
