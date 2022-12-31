<?php
// Dates are so much part of everyday life that it becomes easy to work with them without thinking. PHP also provides powerful tools for date arithmetic that make manipulating dates easy.

// Getting the Time Stamp with time()
// PHP's time() function gives you all the information that you need about the current date and time. It requires no arguments but returns an integer.

// The integer returned by time() represents the number of seconds elapsed since midnight GMT on January 1, 1970. This moment is known as the UNIX epoch, and the number of seconds that have elapsed since then is referred to as a time stamp.


// Example 
print time();


// Display Date and Time
        $date_array = getdate();
        
        foreach ( $date_array as $key => $val ){
        print "$key = $val<br />";
        }
        
        $formated_date  = "Today's date: ";
        $formated_date .= $date_array['mday'] . "/";
        $formated_date .= $date_array['mon'] . "/";
        $formated_date .= $date_array['year'];

        print $formated_date;

        // preview
        // seconds = 51
        // minutes = 36
        // hours = 9
        // mday = 22
        // wday = 6
        // mon = 2
        // year = 2020
        // yday = 52
        // weekday = Saturday
        // month = February
        // 0 = 1582364211
        // Today's date: 22/2/2020








?>