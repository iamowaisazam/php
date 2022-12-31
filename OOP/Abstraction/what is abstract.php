<?php

// PHP - What are Abstract Classes and Methods?
// Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
// An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
// An abstract class or method is defined with the abstract keyword:

    abstract class Car {
        abstract public function intro();
    }
  
  // Child classes
  class Audi extends Car {

    public $name= "Audi";
    public function intro() {
      return "Choose German quality! I'm an".$this->name;
    }

  }
  
  class Volvo extends Car {
   
    public $name= "Volvo";
    public function intro() {
      return "Choose German quality! I'm an".$this->name;
    }

  }
  
  class Citroen extends Car {
    
    public $name= "Citrogen";
    public function intro()  {
      return "Choose German quality! I'm an".$this->name;
    }

  }
  
  // Create objects from the child classes
  $audi = new audi();
  echo $audi->intro();
  echo "<br>";
  
  $volvo = new volvo();
  echo $volvo->intro();
  echo "<br>";
  
  $citroen = new citroen();
  echo $citroen->intro();


?>