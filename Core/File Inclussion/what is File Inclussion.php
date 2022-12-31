<?php

// <!-- You can include the content of a PHP file into another PHP file before the server executes it. There are two PHP functions which can be used to included one PHP file into another PHP file.

// The include() Function
// The require() Function
// This is a strong point of PHP which helps in creating functions, headers, footers, or elements that can be reused on multiple pages. This will help developers to make it easy to change the layout of complete website with minimal effort. If there is any change required then instead of changing thousand of files just change included file. -->


// <!-- include will only produce a warning (E_WARNING) and the script will continue -->
// The require statement is also used to include a file into the PHP code.
include 'i.php';

// The include_once() statement can be used to include a php file in another one, when you may need to include the called file more than once. If it is found that the file has already been included, calling script is going to ignore further inclusions
include_once 'i.php';


// <!-- require will produce a fatal error (E_COMPILE_ERROR) and stop the script -->
require 'i.php';


// require_once() statement can be used to include a php file in another one, when you may need to include the called file more than once. If it is found that the file has already been included, calling script is going to ignore further inclusions.
require_once 'i.php';
?>