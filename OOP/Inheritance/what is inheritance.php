<?php

// PHP - What is Inheritance?
// Inheritance in OOP = When a class derives from another class.
// The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
// An inherited class is defined by using the extends keyword.
// Let's look at an example:

class Father {
    public $id;
    public $name;


    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }

    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  
}
  
  // Strawberry is inherited from Fruit
  class Son extends Father {

           
    public $color;


    public function message() {
      echo "Am I a fruit or a berry? ";

    }


}














?>