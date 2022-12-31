<?php

// Create 
class Fruit {

    // Properties
    public $name;
    protected $age;
    private $weight;
  
    // Methods get
    function get_name(){
        
      //This Keyword
      return $this->name;
    }

    function get_age(){

     //This Keyword
      return $this->age;
    }
    
    function get_weight(){

     //This Keyword
    return $this->weight;
    }

     // Methods set
    function set_name($name){

     //This Keyword
     return $this->name = $name;
    }

    function set_age($age){

     //This Keyword
     return $this->age = $age;
    }

    function set_weight($weight){

     //This Keyword
     return $this->weight = $weight;
    }


  }
  

  //Creating Object
  $apple = new Fruit();

  //Call Class Get Function 
  $apple->set_name('Apple');
  
  //Call Class set Function 
  $apple->set_weight('Red');

  //You can Set only Public Property Without Method 
   $apple->name ='Re';

  //Result
  echo "Name: " . $apple->get_name();
  echo "<br>";
  echo "Color: " . $apple->get_weight();

  // Class Exist Or Not 
  $app = new Fruit();
  var_dump($app instanceof Fruit);


?>