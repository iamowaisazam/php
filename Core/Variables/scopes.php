<?php

// Variable 4 Types Scopes 


// Local variables
// Function parameters
// Global variables
// Static variables



// Local Variables_________________________________________________________________________________________________
// A variable declared in a function is considered local; that is, it can be referenced solely in that function. Any assignment outside of that function will be considered to be an entirely different variable from the one contained in the function −

// ex

// function assignx () { 
//     $x = 0;
//     print "\$x inside function is $x. <br />";
//  }


//  Function Parameters_________________________________________________________________________________________
// Function parameters are declared after the function name and inside parentheses. They are declared much like a typical variable would be −

// ex
// function multiply ($value) {
//     $value = $value * 10;
//     return $value;
//  }


//  Global Variables________________________________________________________________________________________________
// In contrast to local variables, a global variable can be accessed in any part of the program. However, in order to be modified, a global variable must be explicitly declared to be global in the function in which it is to be modified. This is accomplished, conveniently enough, by placing the keyword GLOBAL in front of the variable that should be recognized as global. Placing this keyword in front of an already existing variable tells PHP to use the variable having that name. Consider an example −

// ex
  $somevar = 15; 
   function addit() {
      GLOBAL $somevar;
      $somevar++;
      
      print "Somevar is $somevar";
   }
   
   addit();


//    Static Variables
// The final type of variable scoping that I discuss is known as static. In contrast to the variables declared as function parameters, which are destroyed on the function's exit, a static variable will not lose its value when the function exits and will still hold that value should the function be called again.
// You can declare a variable to be static simply by placing the keyword STATIC in front of the variable name.

// ex
// function keep_track() {
//     static $count = 0;
//     $count++;
//     echo $count;
   
//  }
//  keep_track();












?>