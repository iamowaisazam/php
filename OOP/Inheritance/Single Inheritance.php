<?php

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
   
    public function message() {
   
      //Inheritance
     return  $this->id;
    }

     public function set($id) {
   
      //Inheritance
       $this->id = $id;
    }

}


    $son = New Son();
    $son->set(1);
    echo $son->message();






?>