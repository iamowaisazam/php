<?php
// __wakeup()
// In contrast to the __sleep() method, the __wakeup() method is often used in deserialize operations, such as re-building a database connection, or performing other initialization operations.
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

    /**
     * @return array
     */
    public function __sleep() {
        echo "It is called when the serialize() method is called outside the class.<br>";
        $this->name = base64_encode($this->name);
        return array('name', 'age'); // It must return a value of which the elements are the name of the properties returned.
    }

    /**
     * __wakeup
     */
    public function __wakeup() {
        echo "It is called when the unserialize() method is called outside the class.<br>";
        $this->name = 2;
        $this->sex = 'Male';
        // There is no need to return an array here.
    }
}

$person = new Person('John'); // Initially assigned.
var_dump(serialize($person));
var_dump(unserialize(serialize($person)));