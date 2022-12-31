<?php
// The __autoload() method can try to load an undefined class.
// In the past, if you were to create 100 objects in a program file, then you had to use include() or require() to contain 100 class files, or you had to define the 100 classes in the same class file, for example:

    /**
 * file autoload_demo.php
 */
function  __autoload($className) {
    $filePath = “project/class/{$className}.php”;
    if (is_readable($filePath)) {
        require($filePath);
    }
}

if (ConditionA) {
    $a = new A();
    $b = new B();
    $c = new C();
    // …
} else if (ConditionB) {
    $a = newA();
    $b = new B();
    // …
}












?>