<?php

//Interace
//We can Only Just Declate Function.
//Cannot Emplement Function.
//Cannot Create Variable.
//Cannot Make Object.
//We Can Implent Function Derived Class and It Should be Compatible.
//all Methods Are Public

interface a{
    public function printData();
 }

 interface b{
    public function getData();
 }

 interface c extends a, b{
    public function addData();
 }

 class d implements c{

    public function printData(){
       echo "I am printing";
    }

    public function getData(){
       echo "I am reading data";
    }

    public function addData(){
       echo "I am adding";
    }

 }

?>