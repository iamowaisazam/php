<?php

// __set()
// app kisi class ki private ya proteced properties __set() method ki zariye set kr sakte directly.. 
// The __set( $property, $value) method is used to set the private property of the object. When an undefined property is assigned, the __set() method will be triggered and the passed parameters are the property name and value that are set.
// Here is the demo code:

class Person
{
    public function __set($property, $value) {
      return $this->$property = $value;
    }

}

 $Person=new Person(); //Note that the initial value will be changed by the code below.
 echo $Person->age = 'asim';  
 echo $Person->age;     

