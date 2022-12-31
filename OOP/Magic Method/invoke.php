<?php
// __invoke()
// jub ap kisi object function ki tarha use karte hen to invoke function call hojata ha automatic();

// When you try to call an object in the way of calling a function, the __ invoke() method will be called automatically.
// Note: This feature is only valid in PHP 5.3.0 and above.
// Here is an example:

class Person
{

    public $sex;
    public $name;
    public $age;

    // public function __construct($name="",  $age=25, $sex='Male')
    // {
    //     $this->name = $name;
    //     $this->age  = $age;
    //     $this->sex  = $sex;
    // }

    public function __invoke() {
        echo 'This is an object';
    }

}

$person = new Person(); // Initially assigned.
$person();