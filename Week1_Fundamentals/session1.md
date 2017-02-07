#PHP Fundamentals

###Setting Up
- Is MAMP turned on?  Have you configured your `php.ini` file?
- PHP Tags
```PHP
<?php
  //php code goes here...
?>
```

####The Basics
- Variables
- Data Types
- Functions
- Control Flow

####Variables
Variables, declared with a `$` hang onto data for us, similar to `var` or `let` in Javascript.
Example: `$dog = "Bruce";`

####Data Types
There are various data types in PHP, all with their own strengths and uses.

#####Integer & Float
Integers handle whole numbers.  Floats handle decimal places.

```php
<?php
$age = 9; //integer
$age_in_dog_years = 56.5; //float
?>
```

#####String
Words or phrases handled within quotes.
```php
<?php
$speak = "WOOF!";
?>
```

#####Boolean
This data type only returns true or false.
```php
<?php
$errors = true;
?>
```

#####Array
Arrays are excellent containers that can hold onto anything we want: integers, strings, other arrays, booleans, etc.
They can be written in two different manners (since **PHP 5**)
```php
<?php
$dogs = ['Bruce', 'Dito'];
//is the same as...
//$dogs = array('Bruce', 'Dito');
echo $dogs[1];

$dogs_in_depth = [['Bruce', 9, 'Dachshund', 'Dark Brown Brindle'], ['Dito', 9, 'Dachshund', 'Light Brown']];
var_dump($dogs_in_depth);
?>
```
What's going to help us debug is `var_dump()` and `echo`

#####var_dump() & echo
var_dump() is meant to dump everything about a variable onto the page.  It's not intended for anything other than that.  Later we'll see that we'll want to use `echo` for printing information alongside our HTML, so use var_dump() correctly.

#####Associative Arrays
Often times called hashes (***Ruby***), objects (***Javascript***), or dictionaries (***Python***), Associative Arrays allow for **key  indexing** as opposed to ***numerical*** indexing. Instead of accessing **all of Dito's information** through a numerical index in $dogs_in_depth, if I wanted something easier to remember, I might organize the information like this...

```php
<?php
$dogs_in_depth = array('Bruce' => [9, 'Dachshund', 'Dark Brown Brindle'], 'Dito' => [9, 'Dachshund', 'Light Brown']);
var_dump($dogs_in_depth['Dito']);
?>
```

This makes it a lot easier for me to get to Dito's information as opposed to memorizing a number.
####Activity
Build an associative array about your hobbies.  Make the names of your hobbies the keys and the descriptions of the hobbies their values. var_dump() the array.

####Functions
Functions are great for staying **DRY**.  We can declare functions very easily in PHP and the objective of a function is to break out some code that might be of use later.  For example, if I found myself needing to sum up array values quite often, I might want to build a function to do that for me...

```php
<?php
function sum_it_up($arr)
{
    //iterate through the array and return a sum.
}
?>
```
####***QUIZ: How do I invoke the function above?***

####Moving On: Control Flow

#####For Loops
Another form of control flow is looping.  Let's take a look at an example of what loops can save us from:
```php
<?php
  $sum = 0;
  $sum = $sum + 1;
  $sum = $sum + 1;
  $sum = $sum + 1;
  var_dump($sum); // (int) 3
?>
```
What's the pattern?  How can we rewrite this exact pattern using a for loop?
```php
<?php
  $sum = 0;
  for (initialize ; condition to stop ; increment/decrement) {
    //code...
  }
  var_dump($sum);
?>
```
