<?php session_start();
  //handles guesses
  if (isset($_POST['guess'])){
    if ($_POST['guess'] == $_SESSION['number']){
      //just right
      $_SESSION['result'] = "correct";
      $_SESSION['class'] = "green";
    } else if ($_POST['guess'] > $_SESSION['number']){
      //too high
      $_SESSION['result'] = "high";
      $_SESSION['class'] = "red";

    } else {
      //too low
      $_SESSION['result'] = "low";
      $_SESSION['class'] = "red";
    }
  }

  //handles resetting
  if (isset($_POST['action']) && ($_POST['action'] == 'reset')){
    session_destroy();
  }

  header('location: /');
 ?>
