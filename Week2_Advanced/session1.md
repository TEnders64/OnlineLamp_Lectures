#PHP Advanced
####What We've Learned
- Basics of PHP
  - Data types
    - Integers, Floats, Strings, Arrays, Associative Arrays
  - Control Flow  
    - for and foreach loops
    - if, else if, else statements
- PHP alongside HTML
  - PHP and HTML can co-exist in a .php file

####What We're Going to Learn
- Sending information via GET and POST requests while submitting forms
  - We'll revisit the HTTP Req/Res Cycle
- Sending Headers
- Persisting data without a DB
  - Session
- Hidden Inputs
  - Stashing data in forms hidden from the user.

####HTTP Request/Response Cycle
So far we've built stand-alone programs in PHP with some HTML sprinkled in at times.  But soon we're going to need to pass information from the user to our server.  We'll need forms to help us with this.  But first, let's remember the request/response cycle.

1. Someone types 'www.codingdojo.com' into their browser of choice.

2. 'codingdojo.com' ends up getting translated by a DNS (Domain Name Server) into a physical IP address, say 57.189.24.22

3. The browser then heads for 57.189.24.22 with a GET request.

4. Now it's the job of the codingdojo.com server to handle that GET request and determine what to do with it.  

5. Typically, a simple www.domain.com address means in English 'Get me your homepage', so codingdojo.com is going to do that.

However, codingdojo.com's servers may be using PHP, Ruby, Python, who knows.  But we only care, as the browser, that we get HTML, CSS, or Javascript back. So where's the translation?

As you saw last week, we built files with PHP and HTML side-by-side.  What ended up happening is a PHP interpreter read through all of the file and executed the PHP code and left the remains alongside the HTML code.  So all we had left was HTML.  This is what a server does.  

6. codingdojo.com now knows that, based on the GET request it received that it needs to find a particular file and serve it back to the browser.  Simple as that.

Now this operation might require going to a database to fetch information first, but we won't worry about that now.  Just know that we're going to be writing a lot of PHP (and later some SQL) to place dynamic information on a page that will be served back to browsers.

####Submitting and Catching Information to/on a Server
Let's submit some data! Wait, how? FORMS!

Example:
```html
<form action="process.php" method="post">
  <input type="text" name="username">
  <input type="submit" value="Submit">
</form>
```
A form needs a few things...
1. An action attribute
2. A method attribute
3. Inputs with name attributes - **WHY?**
4. A submit input

The particular form above requires that we have a couple things...
1. A process.php file
2. Inside process.php we have to be able to retrieve the data from the form

process.php
```php
<?php
  var_dump($_POST); //This is how we look at POSTed forms.
?>
```

####GET vs POST
What is a GET request meant for?
  - Where does GET data show up in the browser?
  - How would process.php need to look?

What is a POST request meant for?
  - Where does POST data show up in the browser?


####Activity: Survey Form
