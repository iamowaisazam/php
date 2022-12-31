<?php
// __clone()
// copy by refrence vs copy by value kisi variable k sath & percent use kar k dosre variable ka refrence de sakte phir bad ma is variable ko change karenge to wo variable bhi chnge hojayega.

// clone method jub run hoga jub hum kisi object ya sub object ki clonning karenge. clone keyword se.

$a = 5;
$b = & $a;
$b = 10;
echo $a;


// In PHP we can use the clone keyword to copy objects with the following syntax:
// $copy_of_object = clone $object;
// However, using clone keyword is just a shallow copy, because all referenced properties will still point to the original variable.
// If a __clone() method is defined in a object, then the __clone() method will be called in the copy-generated object and can be used to modify the value of the property (if necessary).
// Here is an example:


class Person
{
    public $sex;
    public $name;
    public $age;

    public function __construct($name="",  $age=25, $sex='Male')
    {
        $this->name = $name;
        $this->age  = $age;
        $this->sex  = $sex;
    }

    public function __clone()
    {
        echo __METHOD__."your are cloning the object.<br>";
    }

}

$person = new Person('John'); // Initially assigned.
$person2 = clone $person;

var_dump('persion1:');
var_dump($person);
echo '<br>';
var_dump('persion2:');
var_dump($person2);