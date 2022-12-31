<?php

// <!-- File handling is an important part of any web application. You often need to open and process a file for different tasks.

// PHP Manipulating Files
// PHP has several functions for creating, reading, uploading, and editing files.

// Be careful when manipulating files!

// When you are manipulating files you must be very careful.
// You can do a lot of damage if you do something wrong. Common errors are: editing the wrong file, filling a hard-drive with garbage data, and deleting the content of a file by accident -->


// Opening a file
// Reading a file
// Writing a file
// Closing a file

// Opening and Closing Files
// The PHP fopen() function is used to open a file. It requires two arguments stating first the file name and then mode in which to operate.Files modes can be specified as one of the six options in this table.

// 1.r
// Opens the file for reading only.
// Places the file pointer at the beginning of the file.

// 2.r+
// Opens the file for reading and writing.
// Places the file pointer at the beginning of the file.

// 3.w
// Opens the file for writing only.
// Places the file pointer at the beginning of the file.
// and truncates the file to zero length. If files does not
// exist then it attempts to create a file.

// 4.w+
// Opens the file for reading and writing only.
// Places the file pointer at the beginning of the file.
// and truncates the file to zero length. If files does not
// exist then it attempts to create a file.

// 5.a
// Opens the file for writing only.Places the file pointer at the end of the file.
// If files does not exist then it attempts to create a file.

// 6.a+
// Opens the file for reading and writing only.
// Places the file pointer at the end of the file.
// If files does not exist then it attempts to create a file.




// Reading a file
// Once a file is opened using fopen() function it can be read with a function called fread(). This function requires two arguments. These must be the file pointer and the length of the file expressed in bytes.
// The files length can be found using the filesize() function which takes the file name as its argument and returns the size of the file expressed in bytes.

// So here are the steps required to read a file with PHP.
// Open a file using fopen() function.
// Get the file's length using filesize() function.
// Read the file's content using fread() function.

// Close the file with fclose() function.
// The following example assigns the content of a text file to a variable then displays those contents on the web page.


// $filename = "owais.txt";
// $file = fopen( $filename, "r" );

// if( $file == false ) {
//    echo ( "Error in opening file" );
//    exit();
// }

// $filesize = filesize( $filename );
// $filetext = fread( $file, $filesize );
// fclose( $file );
// echo ( "File size : $filesize bytes" );
// echo ( "<pre>$filetext</pre>" );



// Writing a file
// A new file can be written or text can be appended to an existing file using the PHP fwrite() function. This function requires two arguments specifying a file pointer and the string of data that is to be written. Optionally a third integer argument can be included to specify the length of the data to write. If the third argument is included, writing would will stop after the specified length has been reached.

// The following example creates a new text file then writes a short text heading inside it. After closing this file its existence is confirmed using file_exist() function which takes file name as an argument

    // $filename = "azam.txt";
    //    $file = fopen( $filename, "w" );
    
    //    if( $file == false ) {
    //       echo ( "Error in opening new file" );
    //       exit();
    //    }
    //    fwrite( $file, "This is  a simple test\n" );
    //    fclose( $file );



// PHP Check End-Of-File - feof()
    // $myfile = fopen("owais.txt", "r") or die("Unable to open file!");
    // // Output one line until end-of-file
    // while(!feof($myfile)) {
    //   echo fgets($myfile) . "<br>";
    // }
    // fclose($myfile);


// PHP Read Single Character - fgetc()

    // $myfile = fopen("owais.txt", "r") or die("Unable to open file!");
    // // Output one character until end-of-file
    // while(!feof($myfile)) {
    // echo fgetc($myfile);
    // }
    // fclose($myfile);









?>