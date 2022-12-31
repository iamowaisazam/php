<?php
// A PHP script can be used with a HTML form to allow users to upload files to the server. Initially files are uploaded into a temporary directory and then relocated to a target destination by a PHP script.

// Information in the phpinfo.php page describes the temporary directory that is used for file uploads as upload_tmp_dir and the maximum permitted size of files that can be uploaded is stated as upload_max_filesize. These parameters are set into PHP configuration file php.ini

// The process of uploading a file follows these steps −

// The user opens the page containing a HTML form featuring a text files, a browse button and a submit button.

// The user clicks the browse button and selects a file to upload from the local PC.

// The full path to the selected file appears in the text filed then the user clicks the submit button.

// The selected file is sent to the temporary directory on the server.

// The PHP script that was specified as the form handler in the form's action attribute checks that the file has arrived and then copies the file into an intended directory.

// The PHP script confirms the success to the user.

?>

<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>

<?php

if(isset($_FILES['image'])){
    $errors= array();

        $uploadOk = 1;
        $folder_name = "uploads/";
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $send_location = $folder_name.$file_name;

     //Validate Extension
    // if(in_array($file_ext,$extensions)=== false){
    //    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    // }

   
    //File Size Error  
    if($file_size > 2097152){
        array_push($errors,"File size must be excately 2 MB");
    }
    
    if(empty($errors)==true){

        move_uploaded_file($file_tmp,$send_location);

        echo "Success";
    
    }else{
    
        print_r($errors);
    }
 }






?>