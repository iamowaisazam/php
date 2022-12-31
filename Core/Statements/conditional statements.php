<?php

// PHP Conditional Statements
// Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

// In PHP we have the following conditional statements:

//1. if statement - executes some code if one condition is true
//2. if...else statement - executes some code if a condition is true and another code if that condition is false
//3. if...elseif...else statement - executes different codes for more than two conditions


//1. if statement

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}

//2. if...else statement

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}


//3. if...elseif...else statement 

$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}















?>