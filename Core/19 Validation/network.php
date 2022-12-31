<?php

// checkdnsrr()	Checks DNS records for type corresponding to host
    $domain="w3schools.com";
    if(checkdnsrr($domain,"MX")) {
    echo "Passed";
    } else {
    echo "Failed";
    }

// closelog()	Closes the connection of system logger
function _log($text) {
    openlog("phperrors", LOG_PID | LOG_PERROR);
    syslog(LOG_ERR, $text);
    closelog();

    }


// dns_check_record()	Alias of checkdnsrr()
$domain="w3schools.com";
if(dns_check_record($domain,"MX")) {
  echo "Passed";
} else {
  echo "Failed";


// dns_get_mx()	Alias of getmxrr()
$domain="w3schools.com";
if(dns_get_mx($domain,$mx_details)){
  foreach($mx_details as $key=>$value){
    echo "$key => $value <br>";
  }
}

// dns_get_record()	Gets the DNS resource records associated with the specified hostname
print_r(dns_get_record("w3schools.com", DNS_MX));

// fsockopen()	Opens an Internet or Unix domain socket connection
$fp = fsockopen("www.w3schools.com", 80, $errno, $errstr, 20);
if (!$fp) {
  echo "$errstr ($errno)<br>";
} else {
  $out = "GET / HTTP/1.1\r\n";
  $out .= "Host: www.w3schools.com\r\n";
  $out .= "Connection: Close\r\n\r\n";
  fwrite($fp, $out);
  while (!feof($fp)) {
    echo fgets($fp, 128);
  }
  fclose($fp);


// gethostbyaddr()	Returns the domain name for a given IP address
$host = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
echo $host;

// gethostbyname()	Returns the IPv4 address for a given domain/host name
$ip = gethostbyname("www.w3schools.com");
echo $ip;

// gethostbynamel()	Returns a list of IPv4 address for a given domain/host name
$hostlist = gethostbynamel("www.w3schools.com");
print_r($hostlist);

// gethostname()	Returns the host name
echo gethostname;


// getmxrr()	Returns the MX records for the specified internet host name
$domain="w3schools.com";
if(getmxrr($domain,$mx_details)){
  foreach($mx_details as $key=>$value){
    echo "$key => $value <br>";
  }
}

// getprotobyname()	Returns the protocol number for a given protocol name
$protocolnum = getprotobyname("tcp");
echo $protocolnum;

// getprotobynumber()     	Returns the protocol name for a given protocol number
$protocolname = getprotobynumber(6);
echo $protocolname;

// getservbyname()	Returns the port number for a given Internet service and protocol
$portnum = getservbyname("http", "tcp");
echo $portnum;

// getservbyport()	Returns the Internet service for a given port and protocol
$intservname = getservbyport(80, "tcp");
echo $intservname;

// header_register_callback()	Calls a header function
$portnum = getservbyname("http", "tcp");
echo $portnum;

// header_remove()	Removes an HTTP header previously set with the header() function
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

header_remove("Pragma");

// header()	Sends a raw HTTP header to a client
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

// headers_list()	Returns a list of response headers to be sent to the browser
setcookie("TestCookie","SomeValue");
header("X-Sample-Test: foo");
header("Content-type: text/plain");

var_dump(headers_list());

// headers_sent()	Checks if/where headers have been sent
if (!headers_sent()) {
    header("Location: https://www.w3schools.com/");
    exit;
  }


// http_response_code()	Sets or returns the HTTP response status code
http_response_code(404);

// inet_ntop()	Converts a 32bit IPv4 or 128bit IPv6 address into a readable format
$addr = chr(127) . chr(0) . chr(1) . chr(1);
$exp = inet_ntop($addr);
echo $exp;

// inet_pton()	Converts a readable IP address into a packed 32bit IPv4 or 128bit IPv6 format
$addr = inet_pton("127.0.1.1");
echo $addr;

// ip2long()	Converts an IPv4 address into a long integer
$ip = gethostbyname("www.w3schools.com");
$out = "The following URLs are equivalent:<br>";
$out .= "https://www.w3schools.com/, https://" . $ip . "/, and https://" . sprintf("%u", ip2long($ip)) . "/";
echo $out;

// long2ip()	Converts a long integer address into a string in IPv4 format
echo(long2ip(344294967296));

// openlog()	Opens the connection of system logger
function _log($text) {
    openlog("phperrors", LOG_PID | LOG_PERROR);
    syslog(LOG_ERR, $text);
    closelog();

    }

// pfsockopen()	Opens a persistent Internet or Unix domain socket connection
$fp = pfsockopen("www.w3schools.com", 80, $errno, $errstr, 20);
if (!$fp) {
  echo "$errstr ($errno)<br>";
} else {
  $out = "GET / HTTP/1.1\r\n";
  $out .= "Host: www.w3schools.com\r\n";
  $out .= "Connection: Close\r\n\r\n";
  fwrite($fp, $out);
  while (!feof($fp)) {
    echo fgets($fp, 128);
  }
  fclose($fp);
}



// setrawcookie()	Defines a cookie (without URL encoding) to be sent along with the rest of the HTTP headers
$cookie_name = "user";
$cookie_value = "John";
setrawcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
// 86400 = 1 day

// socket_get_status()	Alias of stream_get_meta_data()
socket_get_status();


// syslog()
function _log1($text) {
    openlog("phperrors", LOG_PID | LOG_PERROR);
    syslog(LOG_ERR, $text);
    closelog();

    }










?>