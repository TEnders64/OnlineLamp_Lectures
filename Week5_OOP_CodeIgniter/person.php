<?php
class Person
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_name($new_name)
    {
        $this->name = $new_name;
    }

    public function get_age()
    {
        return $this->age;
    }

    public function set_age($new_age)
    {
        $this->age = $new_age;
    }
}

$p1 = new Person("Todd", 32);
$p2 = new Person("Jose", 28);
// $p1_name = $p1->get_name();
// $p2_name = $p2->get_name();
// $p1->set_name("Jimmy");
$p1->set_age(25);
var_dump($p1);
 ?>
