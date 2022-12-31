<?php



// Validate Request method name
    if (isset($_POST['email'])) {
        $boolean = $_POST['email'];	
    }

// boolval()	Returns the boolean value of a variable
    echo "0: " .(boolval(1) ? 'true' : 'false') . "<br>";

// doubleval()	Alias of floatval() Return
    $a = "1234.56789";
    echo doubleval($a) . "<br>";

    $b = "1234.56789Hello";
    echo doubleval($b) . "<br>";

// get_defined_vars()	
    $a = array("red", "green", "blue");
    $arr = get_defined_vars();
    print_r($arr);

// get_resource_type()	Returns the type of a resource
    $file = fopen("test.txt","r");
    echo get_resource_type($file);


//  gettype()	Returns the type of a variable
    $a = 3;
    echo gettype($a) . "<br>";
    
//Validate Empty variables
    $var =null;
    if (empty($var)) {
        $email = $var;	
    }

// validate string
    $x = 5985;
    var_dump(is_string($x));

// validate integer
    $x = 5985;
    var_dump(is_int($x));

// validate Float
    $x = 10.365;
    var_dump(is_float($x));

// validate Double
    $x = 10.365;
    var_dump(is_double($x));

//Validate PHP is_nan() Function
    echo is_nan(200) . "<br>";
    echo is_nan(acos(1.01));

//Validate PHP Numerical Strings
    $x = "59.85" + 100;
    var_dump(is_numeric($x));

//Validate is_array 
    if (!is_array($obj)) {
        return false;
    }

//Validate is_object 
    if (!is_object($obj)) {
        return false;
    }

// Validate is_resource
    $db_link = @mysql_connect('localhost', 'mysql_user', 'mysql_pass');
    if (!is_resource($db_link)) {
        die('Can\'t connect : ' . mysql_error());
    }

// is_callable()	Checks whether the contents of a variable can be called as a function
    function test1(){
    }

    echo "test1 is callable: " . is_callable("test1");
    echo "<br>";
    echo "test2 is callable: " . is_callable("test2");

// is_countable()	Checks whether the contents of a variable is a countable value
    $a = "Hello";
    echo "a is " . is_countable($a) . "<br>";

// is_long()	Alias of is_int()
    $a = 32;
    echo "a is " . is_long($a) . "<br>";

// is_real()	Alias of is_float()
    $a = 32;
    echo "a is " . is_real($a) . "<br>";

// is_scalar()	Checks whether a variable is a scalar
    $a = "Hello";
    echo "a is " . is_scalar($a) . "<br>";


?>