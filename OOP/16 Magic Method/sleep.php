<?php

// __sleep()
// The serialize() method will check if there is a magic method __sleep() in the class. If it exists, the method will be called first and then perform the serialize operation.
// The __sleep() method is often used to specify the properties that need to be serialized before saving data. If there are some very large objects that don't need to be saved all, then you will find this feature is very useful.
// For details, please refer to the following code:

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
}

$person = new Person('John'); // Initially assigned.
echo serialize($person);
echo '<br/>';