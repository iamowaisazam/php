<?php 

$host = "127.0.0.1";
$port = 80811;
$socket = socket_create(AF_INET,SOCK_STREAM,0) or die('Not Created');
$socket_bind = socket_bind($socket,$host,$port);
$socket_listen = socket_listen($socket,3) or die('error fou');

do{

    $accept = socket_accept($socket)  or die('not accept');
    $read = socket_read($read,1024);
    


    //Write
    $read= $msg;
    socket_write($accept,$reply,strlen($reply));

    //Read
    $msg = trim($msg);
    echo $msg."\n";


    
} while(true);


socket_close($accept,$socket);

?>