<?php

// final methods means you cannot override this method in other class.
// final class means you cannot create child class.




class BaseClass {
    public function test() {
       echo "BaseClass::test() called<br>";
    }
    
    final public function moreTesting() {
       echo "BaseClass::moreTesting() called<br>";
    }
 }
 
 class ChildClass extends BaseClass {
 
    //Cannot Over Ride
    // public function moreTesting() {

    //    echo "ChildClass::moreTesting() called<br>";
    // }

 }


 //Final Class
 //You Can Create Any Child Class If You use Final Keyword

final class BaseClass {
    public function test() {
       echo "BaseClass::test() called<br>";
    }
    
    final public function moreTesting() {
       echo "BaseClass::moreTesting() called<br>";
    }
 }
 
//  class ChildClass extends BaseClass {
 
//     //Cannot Over Ride
//     // public function moreTesting() {

//     //    echo "ChildClass::moreTesting() called<br>";
//     // }

//  }













?>