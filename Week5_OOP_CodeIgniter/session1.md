#PHP OOP
####But First, Q&A on The Wall?

####Object Oriented Programming
What are OOP's strengths?
- DRY principle
- Blueprints

Are there any weaknesses to OOP?
- What if our objective was to have a really small script or program?

####Properties and Methods
Properties, also known as attributes, give each blueprint some substance.  Think of every person having a name and an age.  These would be properties we'd want to give to a Person class for example.  They need a visibility keyword, such as `public` or `private`

Methods, or just functions belonging to a class, are just like functions as we know them, but they need visibility keywords, such as public or private

Example
```php
<?php
    class Person
    {
        public $name;
        public $age;

        public function get_name()
        {
            return $this->name;
        }
    }
 ?>
```

**QUIZ:** How do we invoke get_name? What do we need in place first before we can invoke it?

####Constructors
What if we want to customize our Person class?  Enter **__constructor()**.  What does a constructor function do?  How often is it invoked?
