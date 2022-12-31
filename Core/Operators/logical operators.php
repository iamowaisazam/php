<?php

// PHP Logical Operators
// The PHP logical operators are used to combine conditional statements.

// 1.And Operator  and / &&	
// 2.Or Operator or / ||
// 3.Xor Operator xor
// 4. Not Operator  !


// 1.And Operator  and / &&	

    $x = 100;  
    $y = 50;

    if ($x == 100 and $y == 50) {
        echo "Hello world!";
    }

// // 2.Or Operator or / ||

    $x = 100;  
    $y = 50;

    if ($x == 100 or $y == 80) {
        echo "Hello world!";
    }

// // 3.Xor Operator xor

    if ($x == 100 xor $y == 80) {
        echo "Hello world!";
    }

// // 4. Not Operator  !

    $x = 100;  

    if ($x !== 90) {
        echo "Hello world!";
    }







?>