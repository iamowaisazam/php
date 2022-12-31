<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbox</title>
    <style>
        
        form {
            max-width: 500px;
            margin: auto;
            text-align: center;
        }

        form input{
            padding: 2px 0px;
        }

        form input,form textarea{
            margin: 6px 0px;
            display: block;
            width: calc(100% - 7px);
        }
    </style>
</head>
<body>
    <form>
        <input required type="text" name="name" placeholder="usenrame" />
        <textarea required name="message" id="" cols="30" rows="10" placeholder="Type message" ></textarea>
        <button type="submit" >Submit</button>
    </form>
    <script>

    </script>
</body>
</html>
<?php 
    // if(isset($_GET['name']) && isset($_GET['message'])){

    $host = "127.0.0.1";
    $port = 80811;

    //Create Socket
    $socket = socket_create(AF_INET,SOCK_STREAM,0) or die('Not Created');

    //Connection
    $socket_connect = socket_connect($socket,$host,$port) or die('Not Connect');



    if(isset($_GET['name']) && isset($_GET['message'])){

        $app_url = "http://localhost/websocket/client.php";
        $name = $_GET['name'];
        $message = $_GET['message'];
        $date = date('y-m-d');

        //Send Request
        $msg = "{$name}:{$message}...date:{$date}\n";
        socket_write($socket,$msg,strlen($msg));
        // header('Location: '.$app_url);

        $reply= socket_read($socket,1024);
        $reply= trim($reply);
        echo $reply;
          
    }


    
    socket_close($socket);