<?php


// checkdate()	Validates a Gregorian date
    var_dump(checkdate(12,31,-400));
    echo "<br>";
    var_dump(checkdate(2,29,2003));
    echo "<br>";
    var_dump(checkdate(2,29,2004));

// date_add()	Adds days, months, years, hours, minutes, and seconds to a date
    $date=date_create("2013-03-15");
    date_add($date,date_interval_create_from_date_string("40 days"));
    echo date_format($date,"Y-m-d");

// date_create_from_format()	Returns a new DateTime object formatted according to a specified format
    $date=date_create_from_format("j-M-Y","15-Mar-2013");

// date_create()	Returns a new DateTime object
    $date=date_create("2013-03-15");
    echo date_format($date,"Y/m/d");

// date_date_set()	Sets a new date
    $date=date_create();
    date_date_set($date,2020,10,30);
    echo date_format($date,"Y/m/d");

// date_default_timezone_get()	Returns the default timezone used by all date/time functions
    echo date_default_timezone_get();


// date_default_timezone_set()	Sets the default timezone used by all date/time functions
    date_default_timezone_set("Asia/Bangkok");
    echo date_default_timezone_get();

// date_diff()	Returns the difference between two dates
    $date1=date_create("2013-03-15");
    $date2=date_create("2013-12-12");
    $diff=date_diff($date1,$date2);


// date_format()	Returns a date formatted according to a specified format
    $date=date_create("2013-03-15");
    echo date_format($date,"Y/m/d H:i:s");


// date_get_last_errors()	Returns the warnings/errors found in a date string
    date_create("gyuiyiuyui%&&/");
    print_r(date_get_last_errors());

// date_interval_create_from_date_string()	Sets up a DateInterval from the relative parts of the string
    $date = date_create('2019-01-01');
    date_add($date, date_interval_create_from_date_string('1 year 35 days'));
    echo date_format($date, 'Y-m-d');

// date_interval_format()	Formats the interval
    $date1=date_create("2013-01-01");
    $date2=date_create("2013-02-10");
    $diff=date_diff($date1,$date2);

    // %a outputs the total number of days
    echo $diff->format("Total number of days: %a.");

// date_modify()	Modifies the timestamp
    $date=date_create("2013-05-01");
    date_modify($date,"+15 days");
    echo date_format($date,"Y-m-d");    


// date_sub()	Subtracts days, months, years, hours, minutes, and seconds from a date
    $date=date_create("2013-03-15");
    date_sub($date,date_interval_create_from_date_string("40 days"));
    echo date_format($date,"Y-m-d");

// date_time_set()	Sets the time
    $date=date_create("2013-05-01");
    date_time_set($date,13,24);
    echo date_format($date,"Y-m-d H:i:s");

// date_timestamp_get()	Returns the Unix timestamp
    $date=date_create();
    echo date_timestamp_get($date);

// date_timezone_get()	Returns the time zone of the given DateTime object
    $date=date_create(null,timezone_open("Europe/Paris"));
    $tz=date_timezone_get($date);
    echo timezone_name_get($tz);

// gettimeofday()	Returns the current time

    print_r(gettimeofday());
    // Print the float from gettimeofday()
    echo gettimeofday(true);

// localtime()	Returns the local time
    print_r(localtime());
    echo "<br><br>";
    print_r(localtime(time(),true));

// strtotime()	Parses an English textual datetime into a Unix timestamp
    echo(strtotime("now") . "<br>");
    echo(strtotime("3 October 2005") . "<br>");
    echo(strtotime("+5 hours") . "<br>");
    echo(strtotime("+1 week") . "<br>");
    echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
    echo(strtotime("next Monday") . "<br>");
    echo(strtotime("last Sunday"));

// timezone_name_get()	Returns the name of the timezone
    $tz=timezone_open("Europe/Paris");
    echo timezone_name_get($tz);






?>