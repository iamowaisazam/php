<?php
// The __autoload() method can try to load an undefined class.

// In the past, if you were to create 100 objects in a program file, then you had to use include() or require() to contain 100 class files, or you had to define the 100 classes in the same class file, for example:




// function __autoload($classname)
// {
//     include __DIR__."./classess/{$classname}.php";
//     # code...
// }

function load($classname){
    include __DIR__."./classess/{$classname}.php";
    
}


spl_autoload_register('load');



$obj = new Customer();
echo $obj->text();








?>