<?php
  session_start();
  //a registration form is submitted with name and email fields...
  if (isset($_POST['action']) && $_POST['action'] == 'registration'){
    $errors = [];
    //name can't be empty
    if (empty($_POST['name'])){
      $errors[] = "Name can't be empty";
    }
    //name has to be at least 2 characters
    if (strlen($_POST['name']) < 2){
      $errors[] = "Name has to be at least 2 characters";
    }
    //name can't have numbers
    if (!ctype_alpha($_POST['name'])){
      $errors[] = "Name can't have numbers";
    }
    //valid email??
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $errors[] = "Email is not valid";
    }
    if (!empty($errors)){
      $_SESSION['errors'] = $errors;
      header('location: index.php');
    } else {
      header('location: success.php');
    }
  }
?>
