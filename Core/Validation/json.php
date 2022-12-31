<?php

// var_export()
$a = 32;
echo var_export($a) . "<br>";

//var_dump
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
var_dump($json);


// json_encode()
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
echo json_encode($arr);

// json_decode()
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
var_dump(json_decode($json));












?>