<?php
// __unset()
//kisi bhi class ki public/private property ko unset() karsakte hen;

// Similar to the __isset() method, the __unset() method is called when the unset() method is called on an undefined or inaccessible property. Here is an example:

class Person
{
    public $sex;
    private $name;
    private $age;

    public function __construct($name="",  $age=25, $sex='Male')
    {
        $this->name = $name;
        $this->age  = $age;
        $this->sex  = $sex;
    }

    /**
     * @param $content
     *
     * @return bool
     */
    public function __unset($content) {
        echo "It is called automatically when we use the unset() method outside the class.<br>";
        echo  isset($this->$content);
    }
}

$person = new Person("John", 25); // Initially assigned.

// unset($person->sex)."<br>";
// unset($person->name)."<br>";
// unset($person->age)."<br>";