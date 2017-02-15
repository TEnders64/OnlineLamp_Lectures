<?php
  session_start();
  //inside process.php

  if (!empty($_POST) && isset($_POST['action'])){
    if ($_POST['action'] == 'login'){
      //do login logic
      echo "Login";
      var_dump($_POST);
      die();
    } else if ($_POST['action'] == 'registration'){
      //do registration logic
      if (!isset($_SESSION['reg_counter'])){
        $_SESSION['reg_counter'] = 0;
      }
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['reg_counter']++;
      header('location: results.php');
    }

  }
?>
