<?php

// PHP - Sort Functions For Arrays
// In this chapter, we will go through the following PHP array sort functions:

// serialize()	Converts a storable representation of a value
  $data = serialize(array("Red", "Green", "Blue"));
  echo $data;

// unserialize()	Converts serialized data back into actual data
    $test = unserialize($data);
    var_dump($test);


// sort() - sort arrays in ascending order

  $cars = array("Volvo", "BMW", "Toyota");
  sort($cars);

// rsort() - sort arrays in descending order

  $cars = array("Volvo", "BMW", "Toyota");
  rsort($cars);

// asort() - sort associative arrays in ascending order, according to the value

  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  asort($age);


// ksort() - sort associative arrays in ascending order, according to the key

  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  ksort($age);


// arsort() - sort associative arrays in descending order, according to the value

  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  arsort($age);

// krsort() - sort associative arrays in descending order, according to the key

  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  krsort($age);


// Get The Length of an Array - The count() Function

  $cars = array("Volvo", "BMW", "Toyota");
  echo count($cars);


// array_change_key_case()	Changes all keys in an array to lowercase or uppercase
  $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
  print_r(array_change_key_case($age,CASE_UPPER));

// array_chunk()	Splits an array into chunks of arrays
  $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
  print_r(array_chunk($cars,2));

// array_column()	Returns the values from a single column in the input array

  $a = array(
      array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
      ),
      array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
      ),
      array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
      )
    );
  
  $last_names = array_column($a, 'last_name');
  print_r($last_names);

  
  // array_combine()	Creates an array by using the elements from one "keys" array and one "values" array
  $fname=array("Peter","Ben","Joe");
  $age=array("35","37","43");

  $c=array_combine($fname,$age);
  print_r($c);

// array_diff()	Compare arrays, and returns the differences (compare values only)
  $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
  $a2=array("e"=>"red","f"=>"green","g"=>"blue");

  $result=array_diff($a1,$a2);
  print_r($result);

// array_diff_assoc()	Compare arrays, and returns the differences (compare keys and values)
  function myfunction($a,$b)
  {
  if ($a===$b)
    {
    return 0;
    }
    return ($a>$b)?1:-1;
  }

  $a1=array("a"=>"red","b"=>"green","c"=>"blue");
  $a2=array("d"=>"red","b"=>"green","e"=>"blue");

  $result=array_diff_uassoc($a1,$a2,"myfunction");
  print_r($result);

// array_diff_key()	Compare arrays, and returns the differences (compare keys only)
  $a1=array("a"=>"red","b"=>"green","c"=>"blue");
  $a2=array("a"=>"red","c"=>"blue","d"=>"pink");

  $result=array_diff_key($a1,$a2);
  print_r($result);

// array_fill()	Fills an array with values
  $a1=array_fill(3,4,"blue");
  print_r($a1);

// array_fill_keys()	Fills an array with values, specifying keys
  $keys=array("a","b","c","d");
  $a1=array_fill_keys($keys,"blue");
  print_r($a1);

// array_filter()	Filters the values of an array using a callback function
  function test_odd(int $var)
    {
    return($var & 1);
    }

  $a1=array(1,3,2,3,4);
  print_r(array_filter($a1,"test_odd"));

// array_flip()	Flips/Exchanges all keys with their associated values in an array
  $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
  $result=array_flip($a1);
  print_r($result);

// array_intersect()	Compare arrays, and returns the matches (compare values only)
  $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
  $a2=array("e"=>"red","f"=>"green","g"=>"blue");

  $result=array_intersect($a1,$a2);
  print_r($result);

// array_intersect_assoc()	Compare arrays and returns the matches (compare keys and values)
  $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
  $a2=array("a"=>"red","b"=>"green","c"=>"blue");

  $result=array_intersect_assoc($a1,$a2);
  print_r($result);

// array_intersect_key()	Compare arrays, and returns the matches (compare keys only)
  $a1=array("a"=>"red","b"=>"green","c"=>"blue");
  $a2=array("a"=>"red","c"=>"blue","d"=>"pink");

  $result=array_intersect_key($a1,$a2);
  print_r($result);

// // array_intersect_uassoc()	Compare arrays, and returns the matches (compare keys and values, using a user-defined key comparison function)
  // function myfunction($a,$b)
  // {
  // if ($a===$b)
  //   {
  //   return 0;
  //   }
  //   return ($a>$b)?1:-1;
  // }

  $a1=array("a"=>"red","b"=>"green","c"=>"blue");
  $a2=array("d"=>"red","b"=>"green","e"=>"blue");

  $result=array_intersect_uassoc($a1,$a2,"myfunction");
  print_r($result);

// // array_intersect_ukey()	Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function)
  // function myfunction($a,$b)
  // {
  // if ($a===$b)
  //   {
  //   return 0;
  //   }
  //   return ($a>$b)?1:-1;
  // }

  $a1=array("a"=>"red","b"=>"green","c"=>"blue");
  $a2=array("a"=>"blue","b"=>"black","e"=>"blue");

  $result=array_intersect_ukey($a1,$a2,"myfunction");
  print_r($result);

// array_key_exists()	Checks if the specified key exists in the array
  $a=array("Volvo"=>"XC90","BMW"=>"X5");
  if (array_key_exists("Volvo",$a))
    {
    echo "Key exists!";
    }
  else
    {
    echo "Key does not exist!";
    }

// array_keys()	Returns all the keys of an array
  $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
  print_r(array_keys($a));

  // array_map()	Sends each value of an array to a user-made function, which returns new values
  // function myfunction($v)
  // {
  //   return($v*$v);
  // }

  $a=array(1,2,3,4,5);
  print_r(array_map("myfunction",$a));

// array_merge()	Merges one or more arrays into one array
  $a1=array("red","green");
  $a2=array("blue","yellow");
  print_r(array_merge($a1,$a2));

// array_merge_recursive()	Merges one or more arrays into one array recursively
  $a1=array("a"=>"red","b"=>"green");
  $a2=array("c"=>"blue","b"=>"yellow");
  print_r(array_merge_recursive($a1,$a2));

// array_multisort()	Sorts multiple or multi-dimensional arrays
  $a=array("Dog","Cat","Horse","Bear","Zebra");
  array_multisort($a);
  print_r($a);

// array_pad()	Inserts a specified number of items, with a specified value, to an array
  $a=array("red","green");
  print_r(array_pad($a,5,"blue"));

// array_pop()	Deletes the last element of an array
  $a=array("red","green","blue");
  array_pop($a);
  print_r($a);

// array_product()	Calculates the product of the values in an array
  $a=array(5,5);
  echo(array_product($a));

// array_push()	Inserts one or more elements to the end of an array
  $a=array("red","green");
  array_push($a,"blue","yellow");
  print_r($a);

// array_rand()	Returns one or more random keys from an array
  $a=array("red","green","blue","yellow","brown");
  $random_keys=array_rand($a,3);
  echo $a[$random_keys[0]]."<br>";
  echo $a[$random_keys[1]]."<br>";
  echo $a[$random_keys[2]];

// array_reduce()	Returns an array as a string, using a user-defined function
  // function myfunction($v1,$v2)
  // {
  // return $v1 . "-" . $v2;
  // }
  $a=array("Dog","Cat","Horse");
  print_r(array_reduce($a,"myfunction"));

// array_replace()	Replaces the values of the first array with the values from following arrays
  $a1=array("red","green");
  $a2=array("blue","yellow");
  print_r(array_replace($a1,$a2));

// array_replace_recursive()	Replaces the values of the first array with the values from following arrays recursively
  $a1=array("a"=>array("red"),"b"=>array("green","blue"),);
  $a2=array("a"=>array("yellow"),"b"=>array("black"));
  print_r(array_replace_recursive($a1,$a2));

// array_reverse()	Returns an array in the reverse order
  $a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
  print_r(array_reverse($a));

// array_search()	Searches an array for a given value and returns the key
  $a=array("a"=>"red","b"=>"green","c"=>"blue");
  echo array_search("red",$a);

// array_shift()	Removes the first element from an array, and returns the value of the removed element
  $a=array("a"=>"red","b"=>"green","c"=>"blue");
  echo array_shift($a);
  print_r ($a);

// array_slice()	Returns selected parts of an array
  $a=array("red","green","blue","yellow","brown");
  print_r(array_slice($a,2));

// array_splice()	Removes and replaces specified elements of an array
  $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
  $a2=array("a"=>"purple","b"=>"orange");
  array_splice($a1,0,2,$a2);
  print_r($a1);

// array_sum()	Returns the sum of the values in an array
  $a=array(5,15,25);
  echo array_sum($a);


// array_unique()	Removes duplicate values from an array
  $a=array("a"=>"red","b"=>"green","c"=>"red");
  print_r(array_unique($a));

// array_unshift()	Adds one or more elements to the beginning of an array
  $a=array("a"=>"red","b"=>"green");
  array_unshift($a,"blue");
  print_r($a);

// array_values()	Returns all the values of an array
  $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
  print_r(array_values($a));

// array_walk()	Applies a user function to every member of an array
  // function myfunction($value,$key)
  // {
  // echo "The key $key has the value $value<br>";
  // }
  $a=array("a"=>"red","b"=>"green","c"=>"blue");
  array_walk($a,"myfunction");

// array_walk_recursive()	Applies a user function recursively to every member of an array
  // function myfunction($value,$key)
  // {
  // echo "The key $key has the value $value<br>";
  // }

  $a1=array("a"=>"red","b"=>"green");
  $a2=array($a1,"1"=>"blue","2"=>"yellow");
  array_walk_recursive($a2,"myfunction");


// compact()	Create array containing variables and their values
  $firstname = "Peter";
  $lastname = "Griffin";
  $age = "41";

  $result = compact("firstname", "lastname", "age");

  print_r($result);

// current()	Returns the current element in an array
  $people = array("Peter", "Joe", "Glenn", "Cleveland");

  echo current($people) . "<br>";

// end()	Sets the internal pointer of an array to its last element
  $people = array("Peter", "Joe", "Glenn", "Cleveland");
  echo current($people) . "<br>";
  echo end($people);

// extract()	Imports variables into the current symbol table from an array
  $a = "Original";
  $my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
  extract($my_array);
  echo "\$a = $a; \$b = $b; \$c = $c";

// in_array()	Checks if a specified value exists in an array
  $people = array("Peter", "Joe", "Glenn", "Cleveland");

  if (in_array("Glenn", $people))
    {
    echo "Match found";
    }
  else
    {
    echo "Match not found";
    }

// key()	Fetches a key from an array
  $people=array("Peter","Joe","Glenn","Cleveland");
  echo "The key from the current position is: " . key($people);

// list()	Assigns variables as if they were an array
  $my_array = array("Dog","Cat","Horse");

  list($a, $b, $c) = $my_array;
  echo "I have several animals, a $a, a $b and a $c.";

// natcasesort()	Sorts an array using a case insensitive "natural order" algorithm
  $temp_files = array("temp15.txt","Temp10.txt",
  "temp1.txt","Temp22.txt","temp2.txt");

  natsort($temp_files);
  echo "Natural order: ";
  print_r($temp_files);
  echo "<br />";

  natcasesort($temp_files);
  echo "Natural order case insensitve: ";
  print_r($temp_files);


// next()	Advance the internal array pointer of an array
  $people = array("Peter", "Joe", "Glenn", "Cleveland");

  echo current($people) . "<br>";
  echo next($people);

// pos()	Alias of current()
  $people = array("Peter", "Joe", "Glenn", "Cleveland");

  echo pos($people) . "<br>";

// prev()	Rewinds the internal array pointer
  $people = array("Peter", "Joe", "Glenn", "Cleveland");

  echo current($people) . "<br>";
  echo next($people) . "<br>";
  echo prev($people);

// range()	Creates an array containing a range of elements
  $number = range(0,5);
  print_r ($number);

// reset()	Sets the internal pointer of an array to its first element
  $people = array("Peter", "Joe", "Glenn", "Cleveland");

  echo current($people) . "<br>";
  echo next($people) . "<br>";

  echo reset($people);

// shuffle()	Shuffles an array
  $my_array = array("red","green","blue","yellow","purple");

  shuffle($my_array);
  print_r($my_array);

// sizeof()	Alias of count()
  $cars=array("Volvo","BMW","Toyota");
  echo sizeof($cars);

?>