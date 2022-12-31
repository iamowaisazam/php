<?php

// debug_backtrace()	Generates a backtrace
            function a($txt) {
                b("Glenn");
            }
            function b($txt) {
                c("Cleveland");
            }
            function c($txt) {
                var_dump(debug_backtrace());
            }
            a("Peter");


// debug_print_backtrace()	Prints a backtrace
            function a($txt) {
                b("Glenn");
            }
            function b($txt) {
                c("Cleveland");
            }
            function c($txt) {
                debug_print_backtrace();
            }
            a("Peter");

// error_clear_last()	Clears the last error
        echo $test;
        print_r(error_get_last());

// error_get_last()	Returns the last error that occurred
        echo $test;
        print_r(error_get_last());


// error_log()	Sends an error message to a log, to a file, or to a mail account
            // Send error message to the server log if error connecting to the database
        if (!mysqli_connect("localhost","bad_user","bad_password","my_db")) {
            error_log("Failed to connect to database!", 0);
        }

        // Send email to administrator if we run out of FOO
        if (!($foo = allocate_new_foo())) {
            error_log("Oh no! We are out of FOOs!", 1, "admin@example.com");



// error_reporting()	Specifies which errors are reported

                error_reporting(0);

                // Report runtime errors
                error_reporting(E_ERROR | E_WARNING | E_PARSE);

                // Report all errors
                error_reporting(E_ALL);

                // Same as error_reporting(E_ALL);
                ini_set("error_reporting", E_ALL);

                // Report all errors except E_NOTICE
                error_reporting(E_ALL & ~E_NOTICE);  

  

// restore_error_handler()	Restores the previous error handler
    
                // A user-defined error handler function
                function myErrorHandler($errno, $errstr, $errfile, $errline) {
                    echo "<b>Custom error:</b> [$errno] $errstr<br>";
                    echo " Error on line $errline in $errfile<br>";
                }

                // Set user-defined error handler function
                set_error_handler("myErrorHandler");

                $test=2;

                // Trigger error
                if ($test>1) {
                    trigger_error("A custom error has been triggered");
                }

                // Restore previous error handler
                restore_error_handler();

                // Trigger error again
                if ($test>1) {
                    trigger_error("A custom error has been triggered");
                }
      


// restore_exception_handler()	Restores the previous exception handler
      
            // Two user-defined exception handler functions
            function myException1($exception) {
                echo "[" . __FUNCTION__ . "]" . $exception->getMessage();
            }
            function myException2($exception) {
                echo "[" . __FUNCTION__ . "]" . $exception->getMessage();
            }

            set_exception_handler("myException1");
            set_exception_handler("myException2");

            restore_exception_handler();

            // Throw exception
            throw new Exception("This triggers the first exception handler...");

            // set_error_handler()	Sets a user-defined error handler function
                // A user-defined error handler function
                function myErrorHandler($errno, $errstr, $errfile, $errline) {
                    echo "<b>Custom error:</b> [$errno] $errstr<br>";
                    echo " Error on line $errline in $errfile<br>";
                }

                // Set user-defined error handler function
                set_error_handler("myErrorHandler");

                $test=2;

                // Trigger error
                if ($test>1) {
                    trigger_error("A custom error has been triggered");
                }


// set_exception_handler()	Sets a user-defined exception handler function
                // A user-defined exception handler function
                function myException($exception) {
                    echo "<b>Exception:</b> ", $exception->getMessage();
                }

                // Set user-defined exception handler function
                set_exception_handler("myException");

                // Throw exception
                throw new Exception("Uncaught exception occurred!");



// trigger_error()	Creates a user-level error message
    if ($usernum>10) {
        trigger_error("Number cannot be larger than 10");
    }







?>