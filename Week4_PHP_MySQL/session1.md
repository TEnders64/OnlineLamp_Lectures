#PHP w/ MySQL Week!
This is an important week! We tie **all** the pieces of a full-stack application together.

####Procedural PHP
Just what we've been doing all along!  Using `$_SESSION, $_POST, $_GET` etc.  Having client-facing pages, or views, like `index.php` and `success.php` pages.  Having processing pages, or server-like pages, like `process.php`.  And what gets us between all these pages? `header('location: ...')`

####MySQL Databases
What we just learned last week!  For every application we build from here on out, we have to build a DB to go with it.

Remember your CRUD! `SELECT, INSERT, UPDATE, DELETE`

####What Else Do We Need?
Well PHP doesn't exactly talk to a MySQL Database without some help.  The `new-connection.php` file that's on the platform will help us with this.  It sets up a few things...

```php
<?php
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', ''); //may need to set DB_PASS as 'root'
  define('DB_DATABASE', ''); //make sure to set your database

  //connect to database host
  $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
?>
```

1. Establishes the connection to the MySQL server (being ran through MAMP)
2. We dictate the username, password, and database name we want to use.  Typically these will be `root` for the username and password, but the database name depends per application.
3. Let's us use prescribed functions to query the database.  It's like our surrogate for Workbench.

```php
<?php
  function fetch_all($query)
  {
    $data = array();
    global $connection;
    $result = $connection->query($query);

    while($row = mysqli_fetch_assoc($result))
    {
      $data[] = $row;
    }
    return $data;
  }

  //SELECT - used when expecting a single result
  //returns an associative array
  function fetch_record($query)
  {
    global $connection;
    $result = $connection->query($query);

    return mysqli_fetch_assoc($result);
  }

  //used to run INSERT/DELETE/UPDATE, queries that don't return a value
  //returns a value, the id of the most recently inserted record in your database
  function run_mysql_query($query)
  {
    global $connection;
    $result = $connection->query($query);

    return $connection->insert_id;
  }
?>
```
Knowing how to use these functions for different queries is important!  The comments will help you.

This file lives in `new-connection.php` so how/where do we use it?

####Include, Require
Have a read through the platform regarding the differences as there are four options for tying in code from one file to the next.  We'll use `require_once()` almost exclusively.

process.php
```php
<?php
  session_start();
  require_once('new-connection.php');

  if (!empty($_POST) && $_POST['action'] == 'reset'){
    //....
  }
?>
```
We just tied in the new-connection.php file so we can use all its functionality.

####Let's Build! LEMO: Email Validation with DB
