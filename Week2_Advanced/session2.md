#PHP Advanced
####Now that we know how to handle `<forms>` using `$_GET` and `$_POST`...
What if we have multiple forms on the same page going to the same php file?

####Hidden Inputs
Let's say for example we have a login and registration form on index.php...

```html
<h1>Login</h1>
<form action="process.php" method="post">
  Email: <input type="text" name="email">
  Password: <input type="password" name="password">
  <input type="submit" value="Login">
</form>
<h1>Registration</h1>
<form action="process.php" method="post">
  Email: <input type="text" name="email">
  Password: <input type="password" name="password">
  Confirm Password: <input type="password" name="c_password">
  <input type="submit" value="Login">
</form>
```
How do we determine which form is submitted to process.php?  Both won't be submitted simultaneously, so thank goodness for that.

Let's hide an extra input into the form.  'Hide' is a relative term because ANYONE can open a browser and look at their dev tools and see everything hidden or visible on a page.  Nothing on the front-end is safe!

```html
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
  Email: <input type="text" name="email">
  Password: <input type="password" name="password">
  <input type="submit" value="Login">
</form>
```

Sweet! But how do we handle things on the back end?

####!empty() and isset() again
In our process.php file we won't necessarily know which form is being submitted so we have to do some digging.  It's always good to check a couple things first.  Is there even a `$_POST` to look at? Does it have particular **keys** set inside of it already?

```php
<?php
  //inside process.php
  if (!empty($_POST) && isset($_POST['action'])){
    // ^^^ these checks ^^^ will determine if we have a POST to look through and whether there's an 'action' key to look at.
  }
?>
```

Based on the snippet above, if it ends up being true, we know we're dealing with either the login or registration form.  Now **which** one is still up to us to determine. **HOW?**

```php
<?php
  //inside process.php
  if (!empty($_POST) && isset($_POST['action'])){
    if ($_POST['action'] == 'login'){
      //do login logic
    } else if ($_POST['action'] == 'registration'){
      //do registration logic
    }
  }
?>
```

####Debugging Tools: var_dump() and die()
Sounds awful doesn't it?  But these two functions are going to help us debug our code and understand what our form data really looks like.  `die()` helps us stop the process.php file from running any further code.  It's kind of like a stopper.

####Moving into `$_SESSION`
Session is great for holding onto data for as long as we see fit as developers.  Ever wonder how carts work on e-commerce sites?  Session!  Ever wonder how you get cool little greetings on websites with your name? Session!  

Session helps us persist small amounts of data without needing to save anything to a database.  Later we'll see how to incorporate a database to save data for us, but for now let's worry about preserving only SMALL amounts of data for a user's visit to our applications.

Think of session as this awesome associative array (kinda like `$_GET` and `$_POST`) that sticks with a user.  We set up session really easy.

```php
<?php
  session_start();
?>
```

`session_start()` needs to be on **EVERY** page we might need session for! Okay, so how do we use it?

```php
<?php
  session_start();

  $_SESSION['name'] = "Todd";
?>
```
Simple enough.  `$_SESSION` is an associative array.  We know how to deal with those.  Let's do something more interesting though and add it to our process.php file.

```php
<?php
//inside process.php
  session_start();
  $_SESSION['email'] = $_POST['email'];
?>
```
Here we are taking information from `$_POST` and storing it in `$_SESSION`.  No big deal. But let's be more realistic and send a user somewhere else after we do this logic.

####Headers
Headers allow us to redirect a user around our applications.  That normal behavior you get when you submit a form and are then shown another page that might show some text that says "SUCCESSFULLY SUBMITTED THE FORM!" is what headers allow us to do.

For an example, let's create a third page called results.php and this will be a simple page that might show us what information we have stored inside session or form data submitted from another page like index.php  

results.php
```php
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
  </body>
</html>
```
But how we get them there from process.php looks like this...

```php
<?php
//inside process.php
  session_start();
  $_SESSION['email'] = $_POST['email'];
  header('location: results.php');
?>
```
