<?php





// Create Function

    function writeMsg() {
        echo "Hello world!";
    }

    writeMsg(); // call the function


// Function Arguments
// Information can be passed to functions through arguments. An argument is just like a variable

    function familyName($fname) {
        echo "$fname Refsnes.<br>";
    }

    function familyName1($fname, $year) {
        echo "$fname Refsnes. Born in $year <br>";
    }

    function familyName2($fname, $year,$d) {
        echo "$fname Refsnes. Born in $year <br> $d";
    }
    
    familyName("Hege");
    familyName("Stale", "1978");
    familyName("Kai Jim", "1983",'asdas');


// function with data type
    function addNumbers(int $a, int $b) {
        return $a + $b;
    }
    echo addNumbers(5, "5 days"); // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10



// Default Argument Value
        
        function setHeight(int $minheight = 50) {
            echo "The height is : $minheight <br>";
        }
        
        setHeight(350);
        setHeight(); // will use the default value of 50
        setHeight(135);
        setHeight(80);

        
// Functions - Returning values

    function sum(int $x, int $y) {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4);


// Return Type Declarations

    function addNumberss(float $a, float $b) : float {
        return $a + $b;
    }
    echo addNumbers(1.2, 5.2);



// Dynamic Function Calls

    function sayHello() {
        echo "Hello<br />";
    }
    
    $function_holder = "sayHello";
    $function_holder();



?>