<?php

// The PHP Date and Time Function
// The PHP Date and Time function formats a timestamp to a more readable date and time



//Get a Date
// The required format parameter of the date() function specifies how to format the date (or time).

// Here are some characters that are commonly used for dates:

// d - Represents the day of the month (01 to 31)
// m - Represents a month (01 to 12)
// Y - Represents a year (in four digits)
// l (lowercase 'L') - Represents the day of the week
// Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.

// The example below formats today's date in three different ways:

    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");


// PHP Tip - Automatic Copyright Year
      echo date("Y");


// Get a Time
// Here are some characters that are commonly used for times:

//     H - 24-hour format of an hour (00 to 23)
//     h - 12-hour format of an hour with leading zeros (01 to 12)
//     i - Minutes with leading zeros (00 to 59)
//     s - Seconds with leading zeros (00 to 59)
//     a - Lowercase Ante meridiem and Post meridiem (am or pm)
//     The example below outputs the current time in the specified format:

 echo "The time is " . date("h:i:sa");


// Get Your Time Zone
    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa");

// Create a Date With mktime()
// The optional timestamp parameter in the date() function specifies a timestamp. If omitted, the current date and time will be used (as in the examples above).
    $d=mktime(11, 14, 54, 8, 12, 2014);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);


// Create a Date From a String With strtotime()

    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
    }

    $d1=strtotime("July 04");
    $d2=ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 ." days until 4th of July.";










?>