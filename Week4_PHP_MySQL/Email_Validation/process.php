<?php
  session_start();
  require_once('new-connection.php');
  $_SESSION['error'] = false;

  if (isset($_POST['email'])){
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $_SESSION['error'] = true;
      header('location: /');
      die();
    } else {
      $query = "INSERT INTO emails (email, created_at, updated_at) VALUES ('{$_POST['email']}', NOW(), NOW())";
      $last_row_id = run_mysql_query($query);
      if ($last_row_id > 0){
        //the query worked
        $_SESSION['email'] = $_POST['email'];
        header('location: success.php');
        die();
        
      } else {
        //the insert Failed
        die('the insert query failed');
      }
    }
  }
 ?>
