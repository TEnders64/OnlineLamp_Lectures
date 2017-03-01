<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Email</title>
  </head>
  <body>
    <h1><?= $_SESSION['email'] ?></h1>
    <h2>Email Addresses Entered:</h2>
<?php foreach ($_SESSION['all_emails'] as $email) { ?>
    <p><?= $email['email'] ?> <?= $email['created_at'] ?></p>
<?php } ?>
  </body>
</html>
