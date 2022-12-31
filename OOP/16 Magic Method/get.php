<?php

// __get()
// app kisi class ki private ya proteced properties __get() method ki zariye use kr sakte directly.. 

// When you try to access a private property of an external object in a program, the program will throw an exception and end execution. We can use the magic method __get() to solve this problem. It can get the value of the private property of the object outside the object. Here is an example:

class Person
{

    public function __get($propertyName)
    {
        if ($propertyName == "name") {
           return $this->$propertyName = 'name';
        } else {
            return $this->$propertyName = 'Default value';
        }
    }

}

$Person = new Person();


echo "Name：" . $Person->name . "<br>";
