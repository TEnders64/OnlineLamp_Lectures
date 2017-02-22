<?php session_start();
  if (!isset($_SESSION['number'])){
    $_SESSION['number'] = rand(1,100);
  }
  var_dump($_SESSION);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Great Number Game</title>
    <style media="screen">
      .red{
        color: red;
      }
      .green{
        color: green;
      }
    </style>
  </head>
  <body>
    <h1>Welcome to the GNG</h1>
    <p>Thinking of number 1-100</p>
    <?php if (isset($_SESSION['result']) && $_SESSION['result'] == 'correct') {?>
      <div class="<?= $_SESSION['class'] ?>">
        <p><?= $_SESSION['number'] ?> was the number!</p>
      </div>
      <form action="process.php" method="post">
        <input type="hidden" name="action" value="reset">
        <input type="submit" value="Play Again!">
      </form>
    <?php } ?>
    <?php if (isset($_SESSION['result']) && $_SESSION['result'] == 'high') {?>
      <div class="<?= $_SESSION['class'] ?>">
        <p>Too high!</p>
      </div>
    <?php } ?>
    <form action="process.php" method="post">
      <input type="number" min="1" max="100" name="guess">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
