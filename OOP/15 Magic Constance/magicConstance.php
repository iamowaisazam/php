<?php

// Magic Constants
// Magic constants are the predefined constants in PHP which get changed on the basis of their use. They start with double underscore (__) and ends with double underscore.

// They are similar to other predefined constants but as they change their values with the context, they are called magic constants.

// There are nine magic constants in PHP. In which eight magic constants start and end with double underscores (__).

// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__
// ClassName::class



// __LINE__
// It returns the current line number of the file, where this constant is used.

// Example:
 
    echo "<h3>Example for __LINE__</h3>";    
    // print Your current line number i.e;4     
    echo "You are at line number " . __LINE__ . "<br><br>";  



//     __FILE__:
// This magic constant returns the full path of the executed file, where the file is stored. If it is used inside the include, the name of the included file is returned.

// Example:

    echo "<h3>Example for __FILE__</h3>";    
    //print full path of file with .php extension    
    echo __FILE__ . "<br><br>";  



    // __DIR__:
    // It returns the full directory path of the executed file. The path returned by this magic constant is equivalent to dirname(__FILE__). This magic constant does not have a trailing slash unless it is a root directory.
    echo "<h3>Example for __DIR__</h3>";    
    //print full path of directory where script will be placed    
    echo __DIR__ . "<br><br>";  
    //below output will equivalent to above one.  
    echo dirname(__FILE__) . "<br><br>";



//     __FUNCTION__:
// This magic constant returns the function name, where this constant is used. It will return blank if it is used outside of any function.
echo "<h3>Example for __FUNCTION__</h3>";    
    //Using magic constant inside function.    
    function test(){    
        //print the function name i.e; test.   
        echo 'The function name is '. __FUNCTION__ . "<br><br>";   
    }    
    test();    
      
    //Magic constant used outside function gives the blank output.    
    function test_function(){    
        echo 'Hie';    
    }    
    test_function();    
    //give the blank output.   
    echo  __FUNCTION__ . "<br><br>";  


//     __CLASS__:
// It returns the class name, where this magic constant is used. __CLASS__ constant also works in traits.
echo "<h3>Example for __CLASS__</h3>";    
    class JTP    
    {    
        public function __construct() {    
            ;    
    }    
    function getClassName(){    
        //print name of the class JTP.   
        echo __CLASS__ . "<br><br>";   
        }    
    }    
    $t = new JTP;    
    $t->getClassName();    
      
    //in case of multiple classes   
    class base  
    {    
    function test_first(){    
            //will always print parent class which is base here.    
            echo __CLASS__;   
        }    
    }    
    class child extends base    
    {    
        public function __construct() {    
            ;    
        }    
    }    
    $t = new child;    
    $t->test_first();    


// __TRAIT__:
// This magic constant returns the trait name, where it is used.

// Example:  
    echo "<h3>Example for __TRAIT__</h3>";    
    trait created_trait {    
        function jtp(){    
            //will print name of the trait i.e; created_trait    
            echo __TRAIT__;  
        }    
    }    
    class Company {    
        use created_trait;    
        }    
    $a = new Company;    
    $a->jtp();    


//     __METHOD__:
// It returns the name of the class method where this magic constant is included. The method name is returned the same as it was declared.

// Example:   
    echo "<h3>Example for __METHOD__</h3>";  
    class method {    
        public function __construct() {    
            //print method::__construct    
                echo __METHOD__ . "<br><br>";   
            }    
        public function meth_fun(){    
            //print method::meth_fun    
                echo __METHOD__;   
        }    
    }    
    $a = new method;    
    $a->meth_fun();  


    // __NAMESPACE__:
    // It returns the current namespace where it is used.
    // Example:
    echo "<h3>Example for __NAMESPACE__</h3>";  
    class name {    
        public function __construct() {    
            echo 'This line will print on calling namespace.';     
        }     
    }    
    $class_name = __NAMESPACE__ . '\name';    
    $a = new class_name;   

//     ClassName::class:
// This magic constant does not start and end with the double underscore (__). It returns the fully qualified name of the ClassName. ClassName::class is added in PHP 5.5.0. It is useful with namespaced classes.
   //namespace Technical_Portal;  
    echo "<h3>Example for CLASSNAME::CLASS </h3>";  
    class javatpoint {    
    }  
    echo javatpoint::class;    //ClassName::class 












?>