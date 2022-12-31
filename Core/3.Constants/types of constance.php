<?php

// Php Constance
// A constant is a name or an identifier for a simple value. A constant value cannot change during the execution of the script. By default, a constant is case-sensitive. By convention, constant identifiers are always uppercase. A constant name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. If you have defined a constant, it can never be changed or undefine.

// Differences between constants and variables are
// There is no need to write a dollar sign ($) before a constant, where as in Variable one has to write a dollar sign.

// Constants cannot be defined by simple assignment, they may only be defined using the define() function.
// Constants may be defined and accessed anywhere without regard to variable scoping rules.
// Once the Constants have been set, may not be redefined or undefined.


// Create a PHP Constant
    define("GREETING", "Welcome to W3Schools.com!", true);
    echo greeting;

// PHP Constant Arrays
    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);
    echo cars[0];


// Valid constant names
define("ONE",     "first thing");
define("TWO2",    "second thing");
define("THREE_3", "third thing");
define("__THREE__", "third value");

// Invalid constant names
define("2TWO",    "second thing");




?>