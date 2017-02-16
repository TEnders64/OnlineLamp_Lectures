#PHP Advanced
####Form Validations
Time for us to step up our game and validate people's submissions.  We know how to access form data and we know there are some functions like empty(), strlen(), etc. that can help us.

Remember at this point, we can handle processing information in process.php and then redirect away to some other page that shows or **renders** content.  So let's use header() wisely and strive for a good user experience!

####Activity: Build validations for a simple registration form
Start with the code snippets below.
Inside index.php
```php
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
    <form action="process.php" method="post">
      <input type="hidden" name="action" value="registration">
      Name: <input type="text" name="name">
      Email: <input type="text" name="email">
      Password: <input type="password" name="password">
      <input type="submit" value="Register">
    </form>
  </body>
</html>
```
Inside process.php
```php
<?php
  //a registration form is submitted with name and email fields...
  if (isset($_POST['action']) && $_POST['action'] == 'registration')){

  }
?>
```
