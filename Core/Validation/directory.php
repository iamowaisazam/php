<?php

// chdir()	Changes the current directory
    // Get current directory
    echo getcwd() . "<br>";

    // Change directory
    chdir("images");

    // Get current directory
    echo getcwd();

// chroot()	Changes the root directory
    // Change root directory
    chroot("/path/to/chroot/");

    // Get current directory
    echo getcwd();

// closedir()	Closes a directory handle

    $dir = "/images/";

    // Open a directory, and read its contents
    if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
        echo "filename:" . $file . "<br>";
        }
        closedir($dh);
    }
    }


// dir()	Returns an instance of the Directory class
    $d = dir(getcwd());

    echo "Handle: " . $d->handle . "<br>";
    echo "Path: " . $d->path . "<br>";

    while (($file = $d->read()) !== false){
    echo "filename: " . $file . "<br>";
    }
    $d->close();


// getcwd()	Returns the current working directory
    echo getcwd();


// opendir()	Opens a directory handle
$dir = "/images/";

// Open a directory, and read its contents
        if (is_dir($dir)){
        if ($dh = opendir($dir)){
            while (($file = readdir($dh)) !== false){
            echo "filename:" . $file . "<br>";
            }
            closedir($dh);
        }
        }

// readdir()	Returns an entry from a directory handle
        $dir = "/images/";

        // Open a directory, and read its contents
        if (is_dir($dir)){
        if ($dh = opendir($dir)){
            while (($file = readdir($dh)) !== false){
            echo "filename:" . $file . "<br>";
            }
            closedir($dh);
        }
        }


// rewinddir()	Resets a directory handle
        $dir = "/images/";

        // Open a directory, and read its contents
        if (is_dir($dir)){
        if ($dh = opendir($dir)){
            // List files in images directory
            while (($file = readdir($dh)) !== false){
            echo "filename:" . $file . "<br>";
            }
            rewinddir();
            // List once again files in images directory
            while (($file = readdir($dh)) !== false){
            echo "filename:" . $file . "<br>";
            }
            closedir($dh);
        }
        }


// scandir()	Returns an array of files and directories of a specified directory
        $dir = "/images/";

        // Sort in ascending order - this is default
        $a = scandir($dir);

        // Sort in descending order
        $b = scandir($dir,1);

        print_r($a);
        print_r($b);



?>