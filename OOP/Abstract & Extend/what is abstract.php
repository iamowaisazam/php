<?php

// PHP - What are Abstract Classes and Methods?
// Cannot Create Object Of Abstract Class.
// Abstract Function Only Declare.
// We Can Extend Abstract Class To Other Class.


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