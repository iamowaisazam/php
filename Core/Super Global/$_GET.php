<!DOCTYPE html>
<html>
<body>

<a href="test_get.php?fname=PHP&web=W3schools.com">Test $GET</a>



<?php


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // collect value of input field
    $name = $_GET['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}



?>



</body>
</html>