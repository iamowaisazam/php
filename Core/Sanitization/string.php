<?php


// intval()	Returns the integer value of a variable
    $a = 32;
    echo intval($a) . "<br>";

// settype()	Converts a variable to a specific type
    $a = "32"; // string
    settype($a, "integer"); // $a is now integer

// unset()	Unsets a variable
    $a = "Hello world!";
    echo "The value of variable 'a' before unset: " . $a . "<br>";
    unset($a);
    echo "The value of variable 'a' after unset: " . $a;

// strval()	Returns the string value of a variable
    $a = "Hello";
    echo strval($a) . "<br>";

    $b = "1234.56789";
    echo strval($b) . "<br>";

    $c = "1234.56789Hello";
    echo strval($c) . "<br>";

    $d = "Hello1234.56789";
    echo strval($d) . "<br>";

    $e = 1234;
    echo strval($e) . "<br>";

// parse_str()	Parses a query string into variables
    parse_str("name=Peter&age=43");
    echo $name."<br>";
    echo $age;

// print()	Outputs one or more strings
    print "Hello world!";

// printf()	Outputs a formatted string
    $number = 9;
    $str = "Beijing";
    printf("There are %u million bicycles in %s.",$number,$str);

// quoted_printable_decode()	Converts a quoted-printable string to an 8-bit string
    $str = "Hello=0Aworld.";
    echo quoted_printable_decode($str);

// quotemeta()	Quotes meta characters
    $str = "Hello world. (can you hear me?)";
    echo quotemeta($str);

// rtrim()	Removes whitespace or other characters from the right side of a string
    $str = "Hello World!";
    echo $str . "<br>";
    echo rtrim($str,"World!");

// setlocale()	Sets locale information
    echo setlocale(LC_ALL,"US");
    echo "<br>";
    echo setlocale(LC_ALL,NULL);

// sha1()	Calculates the SHA-1 hash of a string
    $str = "Hello";
    echo sha1($str);

// sha1_file()	Calculates the SHA-1 hash of a file
    $filename = "test.txt";
    $sha1file = sha1_file($filename);
    echo $sha1file;

// similar_text()	Calculates the similarity between two strings
    echo similar_text("Hello World","Hello Peter");

// soundex()	Calculates the soundex key of a string
    $str = "Hello";
    echo soundex($str);

// sprintf()	Writes a formatted string to a variable
    $number = 9;
    $str = "Beijing";
    $txt = sprintf("There are %u million bicycles in %s.",$number,$str);
    echo $txt;

// sscanf()	Parses input from a string according to a format
    $str = "age:30 weight:60kg";
    sscanf($str,"age:%d weight:%dkg",$age,$weight);
    // show types and values
    var_dump($age,$weight);

// str_ireplace()	Replaces some characters in a string (case-insensitive)
    echo str_ireplace("WORLD","Peter","Hello world!");

// str_pad()	Pads a string to a new length
    $str = "Hello World";
    echo str_pad($str,20,".");

// str_repeat()	Repeats a string a specified number of times
    echo str_repeat("Wow",13);

// str_replace()	Replaces some characters in a string (case-sensitive)
    echo str_replace("world","Peter","Hello world!");

// str_rot13()	Performs the ROT13 encoding on a string
    echo str_rot13("Hello World");
    echo "<br>";    
    echo str_rot13("Uryyb Jbeyq");

// str_shuffle()	Randomly shuffles all characters in a string
    echo str_shuffle("Hello World");

// str_split()	Splits a string into an array
    print_r(str_split("Hello"));

// str_word_count()	Count the number of words in a string
    echo str_word_count("Hello world!");

// strcasecmp()	Compares two strings (case-insensitive)
    echo strcasecmp("Hello world!","HELLO WORLD!");

// strchr()	Finds the first occurrence of a string inside another string (alias of strstr())
    echo strchr("Hello world!","world");

// strcmp()	Compares two strings (case-sensitive)
    echo strcmp("Hello world!","Hello world!");

// strcoll()	Compares two strings (locale based string comparison)
    setlocale (LC_COLLATE, 'NL');
    echo strcoll("Hello World!","Hello World!");
    echo "<br>";

    setlocale (LC_COLLATE, 'en_US');
    echo strcoll("Hello World!","Hello World!");

// strcspn()	Returns the number of characters found in a string before any part of some specified characters are found
    echo strcspn("Hello world!","w");

// strip_tags()	Strips HTML and PHP tags from a string
    echo strip_tags("Hello <b>world!</b>");

// stripcslashes()	Unquotes a string quoted with addcslashes()
    echo stripcslashes("Hello \World!");

// stripslashes()	Unquotes a string quoted with addslashes()
    echo stripslashes("Who\'s Peter Griffin?");

// stripos()	Returns the position of the first occurrence of a string inside another string (case-insensitive)
    echo stripos("I love php, I love php too!","PHP");

// stristr()	Finds the first occurrence of a string inside another string (case-insensitive)
    echo stristr("Hello world!","WORLD");

// strlen()	Returns the length of a string
    echo strlen("Hello");

// strnatcasecmp()	Compares two strings using a "natural order" algorithm (case-insensitive)
    echo strnatcasecmp("2Hello world!","10Hello WORLD!");
    echo "<br>";
    echo strnatcasecmp("10Hello world!","2Hello WORLD!");

// strnatcmp()	Compares two strings using a "natural order" algorithm (case-sensitive)
    echo strnatcmp("2Hello world!","10Hello world!");
    echo "<br>";
    echo strnatcmp("10Hello world!","2Hello world!");

// strncasecmp()	String comparison of the first n characters (case-insensitive)
    echo strncasecmp("Hello world!","hello earth!",6);

// strncmp()	String comparison of the first n characters (case-sensitive)
    echo strncmp("Hello world!","Hello earth!",6);

// strpbrk()	Searches a string for any of a set of characters
    echo strpbrk("Hello world!","oe");

// strpos()	Returns the position of the first occurrence of a string inside another string (case-sensitive)
    echo strpos("I love php, I love php too!","php");

// strrchr()	Finds the last occurrence of a string inside another string
    echo strrchr("Hello world!","world");

// strrev()	Reverses a string
    echo strrev("Hello World!");

// strripos()	Finds the position of the last occurrence of a string inside another string (case-insensitive)
    echo strripos("I love php, I love php too!","PHP");

// strrpos()	Finds the position of the last occurrence of a string inside another string (case-sensitive)
    echo strrpos("I love php, I love php too!","php");

// strspn()	Returns the number of characters found in a string that contains only characters from a specified charlist
    echo strspn("Hello world!","kHlleo");

// strstr()	Finds the first occurrence of a string inside another string (case-sensitive)
    echo strstr("Hello world!","world");

// strtok()	Splits a string into smaller strings
    $string = "Hello world. Beautiful day today.";
    $token = strtok($string, " ");

    while ($token !== false)
    {
    echo "$token<br>";
    $token = strtok(" ");
    }

// strtolower()	Converts a string to lowercase letters
    echo strtolower("Hello WORLD.");

// strtoupper()	Converts a string to uppercase letters
    echo strtoupper("Hello WORLD!");

// strtr()	Translates certain characters in a string
    echo strtr("Hilla Warld","ia","eo");

// substr()	Returns a part of a string
    echo substr("Hello world",6);

// substr_compare()	Compares two strings from a specified start position (binary safe and optionally case-sensitive)
    echo substr_compare("Hello world","Hello world",0);

// substr_count()	Counts the number of times a substring occurs in a string
    echo substr_count("Hello world. The world is nice","world");

// substr_replace()	Replaces a part of a string with another string
    echo substr_replace("Hello","world",0);

// trim()	Removes whitespace or other characters from both sides of a string
    $str = "Hello World!";
    echo $str . "<br>";
    echo trim($str,"Hed!");

// ucfirst()	Converts the first character of a string to uppercase
    echo ucfirst("hello world!");

// ucwords()	Converts the first character of each word in a string to uppercase
    echo ucwords("hello world");

// vfprintf()	Writes a formatted string to a specified output stream
    $number = 9;
    $str = "Beijing";
    $file = fopen("test.txt","w");
    echo vfprintf($file,"There are %u million bicycles in %s.",array($number,$str));

// vprintf()	Outputs a formatted string
    $number = 9;
    $str = "Beijing";
    vprintf("There are %u million bicycles in %s.",array($number,$str));

// vsprintf()	Writes a formatted string to a variable
    $number = 9;
    $str = "Beijing";
    $txt = vsprintf("There are %u million bicycles in %s.",array($number,$str));
    echo $txt;

// wordwrap()	Wraps a string to a given number of characters
    $str = "An example of a long word is: Supercalifragulistic";
    echo wordwrap($str,15,"<br>\n");

// addcslashes()	Returns a string with backslashes in front of the specified characters
    $str = addcslashes("Hello World!","W");
    echo($str);

// addslashes()	Returns a string with backslashes in front of predefined characters
    $str = addslashes('What does "yolo" mean?');
    echo($str);

// bin2hex()	Converts a string of ASCII characters to hexadecimal values
    $str = bin2hex("Hello World!");
    echo($str);

// chop()	Removes whitespace or other characters from the right end of a string
    $str = "Hello World!";
    echo $str . "<br>";
    echo chop($str,"World!");

// chr()	Returns a character from a specified ASCII value
    echo chr(52) . "<br>"; // Decimal value
    echo chr(052) . "<br>"; // Octal value
    echo chr(0x52) . "<br>"; // Hex value

// chunk_split()	Splits a string into a series of smaller parts
    $str = "Hello world!";
    echo chunk_split($str,1,".");

// convert_cyr_string()	Converts a string from one Cyrillic character-set to another
    $str = "Hello world! æøå";
    echo $str . "<br>";
    echo convert_cyr_string($str,'w','a');

// convert_uudecode()	Decodes a uuencoded string
    $str = ",2&5L;&\@=V]R;&0A `";
    echo convert_uudecode($str);

// convert_uuencode()	Encodes a string using the uuencode algorithm
    $str = "Hello world!";
    echo convert_uuencode($str);

// count_chars()	Returns information about characters used in a string
    $str = "Hello World!";
    echo count_chars($str,3);

// crc32()	Calculates a 32-bit CRC for a string
    $str = crc32("Hello World!");
    printf("%u\n",$str);

// echo()	Outputs one or more strings
    echo "Hello world!";

// explode()	Breaks a string into an array
    $str = "Hello world. It's a beautiful day.";
    print_r (explode(" ",$str));

// fprintf()	Writes a formatted string to a specified output stream
    $number = 9;
    $str = "Beijing";
    $file = fopen("test.txt","w");
    echo fprintf($file,"There are %u million bicycles in %s.",$number,$str);

// get_html_translation_table()	Returns the translation table used by htmlspecialchars() and htmlentities()
    print_r (get_html_translation_table()); 

// hebrev()	Converts Hebrew text to visual text
    echo hebrev("á çùåï äúùñâ");

// hebrevc()	Converts Hebrew text to visual text and new lines (\n) into <br>
    echo hebrevc("� ���� �����\n� ���� �����");

// hex2bin()	Converts a string of hexadecimal values to ASCII characters
    echo hex2bin("48656c6c6f20576f726c6421");

// html_entity_decode()	Converts HTML entities to characters
    $str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
    echo html_entity_decode($str);

// htmlentities()	Converts characters to HTML entities
    $str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
    echo htmlentities($str);

// htmlspecialchars_decode()	Converts some predefined HTML entities to characters
    $str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
    echo htmlspecialchars_decode($str);

// htmlspecialchars()	Converts some predefined characters to HTML entities
    $str = "This is some <b>bold</b> text.";
    echo htmlspecialchars($str);

// implode()	Returns a string from the elements of an array
    $arr = array('Hello','World!','Beautiful','Day!');
    echo implode(" ",$arr);

// join()	Alias of implode()
    $arr = array('Hello','World!','Beautiful','Day!');
    echo join(" ",$arr);

// lcfirst()	Converts the first character of a string to lowercase
    echo lcfirst("Hello world!");

// levenshtein()	Returns the Levenshtein distance between two strings
    echo levenshtein("Hello World","ello World");
    echo "<br>";
    echo levenshtein("Hello World","ello World",10,20,30);

// localeconv()	Returns locale numeric and monetary formatting information
    setlocale(LC_ALL,"US");
    $locale_info = localeconv();
    print_r($locale_info);

// ltrim()	Removes whitespace or other characters from the left side of a string
    $str = "Hello World!";
    echo $str . "<br>";
    echo ltrim($str,"Hello");

// md5()	Calculates the MD5 hash of a string
    $str = "Hello";
    echo md5($str);

// md5_file()	Calculates the MD5 hash of a file
    $filename = "test.txt";
    $md5file = md5_file($filename);
    echo $md5file;

// metaphone()	Calculates the metaphone key of a string
    echo metaphone("World");

// money_format()	Returns a string formatted as a currency string
    $number = 1234.56;
    setlocale(LC_MONETARY,"en_US");
    echo money_format("The price is %i", $number);

// nl2br()	Inserts HTML line breaks in front of each newline in a string
    echo nl2br("One line.\nAnother line.");

// number_format()	Formats a number with grouped thousands
    echo number_format("1000000")."<br>";
    echo number_format("1000000",2)."<br>";
    echo number_format("1000000",2,",",".");

// ord()	Returns the ASCII value of the first character of a string
    echo ord("h")."<br>";
    echo ord("hello")."<br>";



?>