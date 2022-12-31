<?php

// PHP $_SERVER
// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
// The example below shows how to use some of the elements in $_SERVER:



// $_SERVER['PHP_SELF']	Returns the filename of the currently executing script
  echo $_SERVER['PHP_SELF'];

// $_SERVER['GATEWAY_INTERFACE']	Returns the version of the Common Gateway Interface (CGI) the server is using
 echo $_SERVER['GATEWAY_INTERFACE'];

// $_SERVER['SERVER_ADDR']	Returns the IP address of the host server

echo $_SERVER['SERVER_ADDR'];
// $_SERVER['SERVER_NAME']	Returns the name of the host server (such as www.w3schools.com)

echo $_SERVER['SERVER_NAME'];
// $_SERVER['SERVER_SOFTWARE']	Returns the server identification string (such as Apache/2.2.24)

echo $_SERVER['SERVER_SOFTWARE'];
// $_SERVER['SERVER_PROTOCOL']	Returns the name and revision of the information protocol (such as HTTP/1.1)

echo $_SERVER['GATEWAY_INTERFACE'];
// $_SERVER['REQUEST_METHOD']	Returns the request method used to access the page (such as POST)

echo $_SERVER['REQUEST_METHOD'];
// $_SERVER['REQUEST_TIME']	Returns the timestamp of the start of the request (such as 1377687496)

echo $_SERVER['REQUEST_TIME'];
// $_SERVER['QUERY_STRING']	Returns the query string if the page is accessed via a query string

echo $_SERVER['GATEWAY_INTERFACE'];
// $_SERVER['HTTP_ACCEPT']	Returns the Accept header from the current request

echo $_SERVER['QUERY_STRING'];
// $_SERVER['HTTP_ACCEPT_CHARSET']	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)

echo $_SERVER['HTTP_ACCEPT_CHARSET'];
// $_SERVER['HTTP_HOST']	Returns the Host header from the current request

echo $_SERVER['HTTP_HOST'];
// $_SERVER['HTTP_REFERER']	Returns the complete URL of the current page (not reliable because not all user-agents support it)

echo $_SERVER['HTTP_REFERER'];

// $_SERVER['HTTPS']	Is the script queried through a secure HTTP protocol

echo $_SERVER['HTTPS'];

// $_SERVER['REMOTE_ADDR']	Returns the IP address from where the user is viewing the current page

echo $_SERVER['REMOTE_ADDR'];

// $_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page

echo $_SERVER['REMOTE_HOST'];

// $_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server

echo $_SERVER['REMOTE_PORT'];

// $_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script

echo $_SERVER['SCRIPT_FILENAME'];

// $_SERVER['SERVER_ADMIN']	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)

echo $_SERVER['SERVER_ADMIN'];
// $_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)

echo $_SERVER['SERVER_PORT'];
// $_SERVER['SERVER_SIGNATURE']	Returns the server version and virtual host name which are added to server-generated pages

echo $_SERVER['SERVER_SIGNATURE'];
// $_SERVER['PATH_TRANSLATED']	Returns the file system based path to the current script

echo $_SERVER['PATH_TRANSLATED'];

// $_SERVER['SCRIPT_NAME']	Returns the path of the current script
echo $_SERVER['SCRIPT_NAME'];

// $_SERVER['SCRIPT_URI']	Returns the URI of the current page
echo $_SERVER['SCRIPT_URI'];





?>