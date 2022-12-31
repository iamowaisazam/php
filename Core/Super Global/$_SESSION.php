<?php

// What is a PHP Session?
// When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.



// Start a PHP Session
session_start();
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";



// Get Session Variable Values
session_start();
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";


// Display All Session
 print_r($_SESSION);



// Destroy a PHP Session
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();




















?>