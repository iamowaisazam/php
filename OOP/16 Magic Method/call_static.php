<?php
// __call()
//Static function or method class ka object banaye bina call hojate hen.

// This method takes two parameters. The first parameter $function_name will automatically receive the undefined method name, while the second $arguments will receive multiple arguments of the method as an array.

class Person
{
    
    public static function test(){
       $args = func_get_args();
       foreach ($args as $key => $value) {
           echo $key.'='.$value.'<br>';
       }
    } 
    

   public static function __callStatic($funName, $arguments)
    {
          if(method_exists(__CLASS__,$funName)){
              call_user_func_array(array($this,$funName),$arguments);
          } 
          
        //  echo 'asdasd';
    }                                         
}

        
Person::test('1'); 




?>