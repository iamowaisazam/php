<?php

// PHP Assignment Operators
// The PHP assignment operators are used with numeric values to write a value to a variable.

// The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.


//1.Assign x = y	 	
//2.Addition x += y	 	
//3.Subtraction x -= y	 	
//4.Multiplication x *= y	 	
//5.Division x /= y	 	
//6.Modulus x %= y
//7.Concatenation .
//8.Concatenation assignment .=	    
//9.Ternary :?
//10.Null coalescing ??	


//1.Assign x = y
    $e= 10;
    $x = $e;  
    echo $x;

//2.Addition x += y
$x = 20;  
$x += 100;

echo $x;

//3.Subtraction x -= y	
$x = 50;
$x -= 30;

echo $x;

//4.Multiplication x *= y
  $x = 10;  
  $y = 6;
  echo $x * $y;

//5.Division x /= y	 	
    $x = 10;
    $x /= 5;

    echo $x;


//6.Modulus x %= y 

    $x = 15;
    $x %= 4;

    echo $x;

 //7.Concatenation .
    $txt1 = "Hello";
    $txt2 = " world!";
    echo $txt1 . $txt2;

//8.Concatenation assignment .=	
    $txt1 = "Hello";
    $txt2 = " world!";
    $txt1 .= $txt2;
    echo $txt1;

//9.Ternary ?:	
 
     // if empty($user) = TRUE, set $status = "anonymous"
     echo $status = (empty($user)) ? "anonymous" : "logged in";
     echo("<br>");
  
     $user = "John Doe";
     // if empty($user) = FALSE, set $status = "logged in"
     echo $status = (empty($user)) ? "anonymous" : "logged in";


//10.Null coalescing ??	

    // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";

?>