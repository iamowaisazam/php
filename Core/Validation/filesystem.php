<?php

// basename()	Returns the filename component of a path
        $path = "/testweb/home.php";

        //Show filename
        echo basename($path) ."<br/>";

        //Show filename, but cut off file extension for ".php" files
        echo basename($path,".php");

// chgrp()	Changes the file group
        chgrp("test.txt","admin");

// chmod()	Changes the file mode
        // Read and write for owner, nothing for everybody else
        chmod("test.txt",0600);

        // Read and write for owner, read for everybody else
        chmod("test.txt",0644);

        // Everything for owner, read and execute for everybody else
        chmod("test.txt",0755);

        // Everything for owner, read for owner's group
        chmod("test.txt",0740);

// chown()	Changes the file owner
        chown("test.txt","charles");

// clearstatcache()	Clears the file status cache
            //output filesize
        echo filesize("test.txt");

        echo "<br />";

        $file = fopen("test.txt", "a+");
        // truncate file
        ftruncate($file,100);
        fclose($file);

        //Clear cache and check filesize again
        clearstatcache();
        echo filesize("test.txt");

// copy()	Copies a file
        echo copy("source.txt","target.txt");

// dirname()	Returns the directory name component of a path
        echo dirname("c:/testweb/home.php") . "<br />";
        echo dirname("c:/testweb/home.php", 2) . "<br />";
        echo dirname("/testweb/home.php");


// disk_free_space()	Returns the free space of a filesystem or disk
    echo disk_free_space("C:");


// disk_total_space()	Returns the total size of a filesystem or disk
    echo disk_total_space("C:");

// fclose()	Closes an open file
    $file = fopen("test.txt", "r");
    fclose($file);


// feof()	Checks if the "end-of-file" (EOF) has been reached for an open file
        $file = fopen("test.txt", "r");

        //Output lines until EOF is reached
        while(! feof($file)) {
        $line = fgets($file);
        echo $line. "<br>";
        }

        fclose($file);

// fflush()	Flushes buffered output to an open file
        $file = fopen("test.txt","r+");
        rewind($file);
        fwrite($file, 'Hello World');
        fflush($file);

        fclose($file);


// fgetc()	Returns a single character from an open file
    $file = fopen("test.txt","r");
    echo fgetc($file);
    fclose($file);

// fgetcsv()	Returns a line from an open CSV file
    $file = fopen("contacts.csv","r");
    print_r(fgetcsv($file));
    fclose($file);

// fgets()	Returns a line from an open file

    $file = fopen("test.txt","r");
    echo fgets($file);
    fclose($file);
// fgetss()	Deprecated from PHP 7.3. Returns a line from an open file - stripped from HTML and PHP tags

    $file = fopen("test.htm","r");
    echo fgetss($file);
    fclose($file);
// file()	Reads a file into an array
    print_r(file("test.txt"));

// file_exists()	Checks whether or not a file or directory exists
    echo file_exists("test.txt");

// file_get_contents()	Reads a file into a string
    echo file_get_contents("test.txt");

// file_put_contents()	Writes data to a file
    echo file_put_contents("test.txt","Hello World. Testing!");

// fileatime()	Returns the last access time of a file
    echo fileatime("webdictionary.txt");
    echo "<br>";
    echo "Last access: ".date("F d Y H:i:s.", fileatime("webdictionary.txt"));

// filectime()	Returns the last change time of a file
    echo filectime("webdictionary.txt");
    echo "<br>";
    echo "Last changed: ".date("F d Y H:i:s.", filectime("webdictionary.txt"));

// filegroup()	Returns the group ID of a file
    echo filegroup("test.txt");

// fileinode()	Returns the inode number of a file
    echo fileinode("test.txt");

// filemtime()	Returns the last modification time of a file
    echo filemtime("webdictionary.txt");
    echo "<br>";
    echo "Content last changed: ".date("F d Y H:i:s.", filemtime("webdictionary.txt"));

// fileowner()	Returns the user ID (owner) of a file
    echo fileowner("test.txt");

// fileperms()	Returns the file's permissions
    echo fileperms("test.txt");

// filesize()	Returns the file size
    echo filesize("test.txt");  

// filetype()	Returns the file type
    echo filetype("test.txt");

// flock()	Locks or releases a file
    $file = fopen("test.txt","w+");

    // exclusive lock
    if (flock($file,LOCK_EX)) {
    fwrite($file,"Add some text to the file.");
    fflush($file);
    // release lock
    flock($file,LOCK_UN);
    } else {
    echo "Error locking file!";
    }
    fclose($file);

// fnmatch()	Matches a filename or string against a specified pattern
    $txt = "My car is a dark color";
    if (fnmatch("*col[ou]r",$txt))
    {
    echo "hmm...";
    }

// fopen()	Opens a file or URL
    $file = fopen("test.txt", "r");

    //Output lines until EOF is reached
    while(! feof($file)) {
    $line = fgets($file);
    echo $line. "<br>";
    }

    fclose($file);

// fpassthru()	Reads from the current position in a file - until EOF, and writes the result to the output buffer
    $file = fopen("test.txt","r");
    // Read first line
    fgets($file);

    // Read from the current position in file - until EOF, and then write the result to the output buffer
    echo fpassthru($file);

    fclose($file);

// fputcsv()	Formats a line as CSV and writes it to an open file
    $list = array (
        array("Peter", "Griffin" ,"Oslo", "Norway"),
        array("Glenn", "Quagmire", "Oslo", "Norway")
    );
    
    $file = fopen("contacts.csv","w");
    
    foreach ($list as $line) {
        fputcsv($file, $line);
    }
    
    fclose($file);


// fread()	Reads from an open file (binary-safe)
    $file = fopen("test.txt","r");
    fread($file,"10");
    fclose($file);


// fseek()	Seeks in an open file
    $file = fopen("test.txt","r");
    // Read first line
    echo fgets($file);
    // Move back to beginning of file
    fseek($file,0);
    fclose($file);

// fstat()	Returns information about an open file
    $file = fopen("test.txt","r");
    print_r(fstat($file));
    fclose($file);

// ftell()	Returns the current position in an open file
    $file = fopen("test.txt","r");

    // Print current position
    echo ftell($file);

    // Change current position
    fseek($file,"15");

    // Print current position again
    echo "<br>" . ftell($file);

    fclose($file);

// ftruncate()	Truncates an open file to a specified length
    // Check filesize
    echo filesize("test.txt");
    echo "<br>";

    $file = fopen("test.txt", "a+");
    ftruncate($file,100);
    fclose($file);

    // Clear cache and check filesize again
    clearstatcache();
    echo filesize("test.txt");

// fwrite()	Writes to an open file (binary-safe)
    $file = fopen("test.txt","w");
    echo fwrite($file,"Hello World. Testing!");
    fclose($file);

// glob()	Returns an array of filenames / directories matching a specified pattern
    print_r(glob("*.txt"));

// is_dir()	Checks whether a file is a directory
    $file = "images";
    if(is_dir($file)) {
    echo ("$file is a directory");
    } else {
    echo ("$file is not a directory");
    }

// is_executable()	Checks whether a file is executable
    $file = "setup.exe";
    if(is_executable($file)) {
    echo ("$file is executable");
    } else {
    echo ("$file is not executable");
    }

// is_file()	Checks whether a file is a regular file
    $file = "test.txt";
    if(is_file($file)) {
    echo ("$file is a regular file");
    } else {
    echo ("$file is not a regular file");
    }

// is_link()	Checks whether a file is a link
    $link = "images";
    if(is_link($link)) {
    echo ("$link is a link");
    } else {
    echo ("$link is not a link");
    }

// is_readable()	Checks whether a file is readable
    $file = "test.txt";
    if(is_readable($file)) {
    echo ("$file is readable");
    } else {
    echo ("$file is not readable");
    }

// is_uploaded_file()	Checks whether a file was uploaded via HTTP POST
    $file = "test.txt";
    if(is_uploaded_file($file)) {
    echo ("$file is uploaded via HTTP POST");
    } else {
    echo ("$file is not uploaded via HTTP POST");
    }

// is_writable()	Checks whether a file is writable
$file = "test.txt";
    if(is_writable($file)) {
    echo ("$file is writable");
    } else {
    echo ("$file is not writable");
    }


// lchgrp()	Changes the group ownership of a symbolic link
    $target = "downloads.php";
    $link = "downloads";
    symlink($target, $link);

    lchgrp($link, 8);

// lchown()	Changes the user ownership of a symbolic link
    $target = "downloads.php";
    $link = "downloads";
    symlink($target, $link);

    lchown($link, 8);

// link()	Creates a hard link
    $target = "text.txt";
    $linkname = "mylink";

    link($target, $linkname);

// linkinfo()	Returns information about a hard link
    echo linkinfo(rubbish);


// lstat()	Returns information about a file or symbolic link
    print_r(lstat("test.txt"));

// mkdir()	Creates a directory
    mkdir("test");

// parse_ini_file()	Parses a configuration file
    print_r(parse_ini_file("test.ini"));

// pathinfo()	Returns information about a file path
    print_r(pathinfo("/testweb/test.txt"));

// pclose()	Closes a pipe opened by popen()
    $file = popen("/bin/ls","r");
    //some code to be executed
    pclose($file);

// popen()	Opens a pipe
    $file = popen("/bin/ls","r");
    //some code to be executed
    pclose($file);

// readfile()	Reads a file and writes it to the output buffer
    echo readfile("test.txt");

// readlink()	Returns the target of a symbolic link
    echo readlink("/user/testlink");

// realpath()	Returns the absolute pathname
    echo realpath("test.txt");

// realpath_cache_get()	Returns realpath cache entries
    var_dump(realpath_cache_get());

// realpath_cache_size()	Returns realpath cache size
    var_dump(realpath_cache_size());

// rename()	Renames a file or directory
    rename("images","pictures");
    rename("/test/file1.txt","/home/docs/my_file.txt");

// rewind()	Rewinds a file pointer
    $file = fopen("test.txt","r");

    //Change position of file pointer
    fseek($file,"15");

    //Set file pointer to 0
    rewind($file);

    fclose($file);

// rmdir()	Removes an empty directory
    $path = "images";
    if(!rmdir($path)) {
    echo ("Could not remove $path");
    }

// set_file_buffer()	Alias of stream_set_write_buffer(). Sets the buffer size for write operations on the given file
    $file = fopen("test.txt","w");
    if ($file) {
    set_file_buffer($file,0);
    fwrite($file,"Hello World. Testing!");
    fclose($file);}


// stat()	Returns information about a file
    $stat = stat("test.txt");
    echo "Access time: " .$stat["atime"];
    echo "<br>Modification time: " .$stat["mtime"];
    echo "<br>Device number: " .$stat["dev"];

// symlink()	Creates a symbolic link
    $target = "downloads.php";
    $link = "downloads";
    symlink($target, $link);
    echo readlink($link);

// tempnam()	Creates a unique temporary file
    echo tempnam("C:\inetpub\testweb","TMP0");

// tmpfile()	Creates a unique temporary file
    $temp = tmpfile();

    fwrite($temp, "Testing, testing.");
    //Rewind to the start of file
    rewind($temp);
    //Read 1k from file
    echo fread($temp,1024);

    //This removes the file
    fclose($temp);

// touch()	Sets access and modification time of a file
    $filename = "test.txt";
    if (touch($filename)) {
    echo $filename . " modification time has been changed to present time";
    } else {
    echo "Sorry, could not change modification time of " . $filename;
    }

// umask()	Changes file permissions for files
    $file = "test.txt";
    echo (umask());

// unlink()	Deletes a file
    $file = fopen("test.txt","w");
    echo fwrite($file,"Hello World. Testing!");
    fclose($file);

    unlink("test.txt");


?>