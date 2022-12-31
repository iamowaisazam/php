<?php

// What is a Cookie?
// A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.


// Name − This sets the name of the cookie and is stored in an environment variable called HTTP_COOKIE_VARS. This variable is used while accessing cookies.

// Value − This sets the value of the named variable and is the content that you actually want to store.

// Expiry − This specify a future time in seconds since 00:00:00 GMT on 1st Jan 1970. After this time cookie will become inaccessible. If this parameter is not set then cookie will automatically expire when the Web Browser is closed.

// Path − This specifies the directories for which the cookie is valid. A single forward slash character permits the cookie to be valid for all directories.

// Domain − This can be used to specify the domain name in very large domains and must contain at least two periods to be valid. All cookies are only valid for the host and domain which created them.

// Security − This can be set to 1 to specify that the cookie should only be sent by secure transmission using HTTPS otherwise set to 0 which mean cookie can be sent by regular HTTP




// PHP Create Cookie
// setcookie(name, value); required
// setcookie(name, value, expire, path, domain, secure, httponly); optional

$cookie_name = "user";
$cookie_value = "John Doe";
$expireTime = time() + (86400 * 30);

setcookie($cookie_name, $cookie_value, $expireTime, "/"); // 86400 = 1 day


// Retrieve a Cookie
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}


// Modify a Cookie Value
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}



// Delete a Cookie
// To delete a cookie, use the setcookie() function with an expiration date in the past:
setcookie("user", "", time() - 3600);


?>