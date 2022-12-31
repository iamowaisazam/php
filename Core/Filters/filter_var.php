<?php
// Filters
// PHP filters are used to validate and sanitize external input. This is especially useful
// when the data source contains unknown data, like user input. For example, data from an
// HTML form, cookies, sql statement result etc.
// There are two main types of filtering:


// Validation - Validation is used to validate or check if the data meets certain
// qualifications. For example, passing in FILTER_VALIDATE_EMAIL will
// determine if the data is a valid email address, but will not change the data itself.

// Sanitization - Sanitization will sanitize the data, so it may alter it by removing
// undesired characters. For example, passing in FILTER SANITIZE EMAIL will
// remove characters that are inappropriate for an email address to contain. That said,
// it does not validate the data.

// Why Use Filters?
// Many web applications receive external input. External input/data can be:

// User input from a form
// Cookies
// Web services data
// Server variables
// Database query results

// PHP filter_var() Function
// The filter_var() function both validate and sanitize data.

// The filter_var() function filters a single variable with a specified filter. It takes two pieces of data:

// The variable you want to check
// The type of check to use


// Integer
    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("Integer is valid");
    } else {
        echo("Integer is not valid");
    }

// Tip: filter_var() and Problem With 0
// In the example above, if $int was set to 0, the function above will return "Integer is not valid". To solve this problem, use the code below
    $int = 0;

    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("Integer is valid");
    } else {
        echo("Integer is not valid");
    }

//IP Address
    if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
        echo("$ip is a valid IP address");
    } else {
        echo("$ip is not a valid IP address");
    }

// Sanitize and Validate an Email Address
    $email = "john.doe@example.com";

    // Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("$email is a valid email address");
    } else {
        echo("$email is not a valid email address");
    }


//Sanitize and Validate a URL
    $url = "https://www.w3schools.com";

    // Remove all illegal characters from a url
    $url = filter_var($url, FILTER_SANITIZE_URL);

    // Validate url
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo("$url is a valid URL");
    } else {
        echo("$url is not a valid URL");
}


?>
