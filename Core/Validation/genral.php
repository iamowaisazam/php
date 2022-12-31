<?php

// connection_aborted()	Checks whether the client has disconnected
        function check_abort()
        {
        if (connection_aborted())
        error_log ("Script $GLOBALS[SCRIPT_NAME]" .
        "$GLOBALS[SERVER_NAME] was aborted by the user.");
        }

        // Some script to be executed here

        // Call the check_abort function when the script ends
        register_shutdown_function("check_abort");


// connection_status()	Returns the current connection status

        // switch (connection_status())
        // {
        // case CONNECTION_NORMAL:
        // $txt = 'Connection is in a normal state';
        // break;
        // case CONNECTION_ABORTED:
        // $txt = 'Connection aborted';
        // break;
        // case CONNECTION_TIMEOUT:
        // $txt = 'Connection timed out';
        // break;
        // case (CONNECTION_ABORTED & CONNECTION_TIMEOUT):
        // $txt = 'Connection aborted and timed out';
        // break;
        // default:
        // $txt = 'Unknown';
        // break;
        // }

        // echo $txt;


// constant()	Returns the value of a constant

    //define a constant
    define("GREETING","Hello you! How are you today?");

    echo constant("GREETING");

// define()	Defines a constant

    define("GREETING","Hello you! How are you today?");
    echo constant("GREETING");

// defined()	Checks whether a constant exists
    define("GREETING","Hello you! How are you today?");
    echo defined("GREETING");

// die()	Alias of exit()
    $site = "https://www.w3schools.com/";
    fopen($site,"r")
    or die("Unable to connect to $site");

// eval()	Evaluates a string as PHP code
    $string = "beautiful";
    $time = "winter";

    $str = 'This is a $string $time morning!';
    echo $str. "<br>";

    eval("\$str = \"$str\";");
    echo $str;

// exit()	Prints a message and exits the current script
    $site = "https://www.w3schools.com/";
    fopen($site,"r")
    or exit("Unable to connect to $site");

// get_browser()	Returns the capabilities of the user's browser
    echo $_SERVER['HTTP_USER_AGENT'];
    $browser = get_browser();
    print_r($browser);

// highlight_file()	Outputs a file with the PHP syntax highlighted
    highlight_file("test.php"); 

// highlight_string()	Outputs a string with the PHP syntax highlighted
    highlight_string("Hello world! <?php phpinfo(); ?>");

// hrtime()	Returns the system's high resolution time
    echo hrtime();

// ignore_user_abort()	Sets whether a remote client can abort the running of a script
    ignore_user_abort();

// pack()	Packs data into a binary string
    echo pack("C3",80,72,80);

// php_strip_whitespace()	Returns the source code of a file with PHP comments and whitespace removed
    echo php_strip_whitespace("test.php");

// show_source()	Alias of highlight_file()
    show_source("test.php");


// sleep()	Delays code execution for a number of seconds
    echo date('h:i:s') . "<br>";

    //sleep for 3 seconds
    sleep(3);

    //start again
    echo date('h:i:s');

// sys_getloadavg()	Returns the system load average
    $loadtime = sys_getloadavg();
    if ($loadtime[0] > 0.80) {
    die('Sorry, server is busy.');
    }

// time_nanosleep()	Delays code execution for a number of seconds and nanoseconds
    if (time_nanosleep(2,500000000) === true)
    {
    echo "Slept for 2,5 seconds";
    }

// time_sleep_until()	Makes a script sleep until the specified time

    time_sleep_until(time()+3);
    echo "Hello";
// uniqid()	Generates a unique ID
    echo uniqid();

// unpack()	Unpacks data from a binary string
    $data = "PHP";
    print_r(unpack("C*",$data));

// usleep()
    
    echo date('h:i:s') . "<br>";

    //sleep for 3 seconds
    usleep(3000000);

    //start again
    echo date('h:i:s');

?>