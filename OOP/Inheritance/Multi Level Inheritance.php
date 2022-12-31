<?php

// Multi Level Inheritance
// If A Class Derived from more than One Parent Class, Then it is Called Multiple Inheritance


//Parent Class
class Father {  
    
    //Properties
    public $id;
    public $name;

    //constructer
    public function __construct() {
      $this->id = 'f';
      $this->name = 'l';
    }

     //methods
    public function intro($id,$name) {
      $this->id = $id;
      $this->name = $name;
    }

  
}
  
  // child class
class Son extends Father {

    //properties       
    public $color;


    ///methods
    public function getSon() {
     return  $this->id;
    }

     public function setSon($id) {
       $this->id = $id;
    }
  }


   // child class
class GrandSon extends Son {

    //properties       
    public $color;


    ///methods
    public  function GetGrandSon() {
     return  $this->id;
    }

     public function setGrandson($id) {
       $this->id = $id;
    }

}






//Result
    $son = New GrandSon();
    $son->setGrandSon(1);
    echo $son->getGrandSon();






?>