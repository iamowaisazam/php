<?php

//Comparison Operators
//The PHP comparison operators are used to compare two values (number or string):
// 1.Equal ==	
// 2.Identical ===	
// 3.Not equal !=	
// 4.Not identical !==	
// 5.Greater than >
// 6.Less than	 <	
// 7.Greater than or equal to >=	
// 8.Less than or equal to <=	
// 9.Spaceship <=>	

  
         $a = 42;
         $b = 20;
      
         //Equal
         if( $a == $b ) {
            echo "TEST1 : a is equal to b<br/>";
         }else {
            echo "TEST1 : a is not equal to b<br/>";
         }
      
         // Identical ===
         $x = 100;  
         $y = "100";
         var_dump($x === $y);


          // Not equal !=
          if( $a != $b ) {
            echo "TEST4 : a is not equal to b<br/>";
         }else {
            echo "TEST4 : a is equal to b<br/>";
         }

         // Not Identical !==
         $x = 100;  
         $y = "100";
         var_dump($x !== $y);



         // Greater than >
         if( $a > $b ) {
            echo "TEST2 : a is greater than  b<br/>";
         }else {
            echo "TEST2 : a is not greater than b<br/>";
         }
      
         // Less than	 <
         if( $a < $b ) {
            echo "TEST3 : a is less than  b<br/>";
         }else {
            echo "TEST3 : a is not less than b<br/>";
         }
      
        
         // Greater than or equal to >=
         if( $a >= $b ) {
            echo "TEST5 : a is either greater than or equal to b<br/>";
         }else {
            echo "TEST5 : a is neither greater than nor equal to b<br/>";
         }
      
         // Less than or equal to <=
         if( $a <= $b ) {
            echo "TEST6 : a is either less than or equal to b<br/>";
         }else {
            echo "TEST6 : a is neither less than nor equal to b<br/>";
         }

         // Spaceship <=>
         $x = 5;  
         $y = 10;
         echo ($x <=> $y); // returns -1 because $x is less than $y
         echo "<br>";




?>