<?php

// PHP Indexed Arrays
// There are two ways to create indexed arrays:

// The index can be assigned automatically (index always starts at 0), like this:

// index number Through :
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


// Loop Through an Associative Array
// To loop through and print all the values of an associative array, you could use a foreach loop, like this:

    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);
    
    for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }


?>