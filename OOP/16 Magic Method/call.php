<?php

// __call()
// agar koi user is class k private method ya property ko call karne ki kosish karega to ye automatical run hojayega.


// This method takes two parameters. The first parameter $function_name will automatically receive the undefined method name, while the second $arguments will receive multiple arguments of the method as an array.

class Person
{
    private function test(){
       $args = func_get_args();
       foreach ($args as $key => $value) {
           echo $key.'='.$value.'<br>';
       }
    }                             
    
    function __call($funName, $arguments)
    {
          if(method_exists(__CLASS__,$funName)){
              call_user_func_array(array($this,$funName),$arguments);
          }      
    }                                         
}

$Person = new Person();           
$Person->test('asdasd',1,2); 

?>