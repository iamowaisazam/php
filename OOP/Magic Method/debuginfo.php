<?php

// debugInfo()
// Debug Info agar koi error hota ha to usko bhi show kardeta ha.
// The __debugInfo() method will be called when the var_dump() method is executed. If the __debugInfo() method is not defined, then the var_dump() method will print out all the properties in the object.
// Here is an example:

class C {

    private $prop;
    public function __construct($val) {
        $this->prop = $val;
    }

    public function __debugInfo() {
        return [
            'propSquared' => $this->prop ** 2,
        ];
    }

    
}

var_dump(new C(42));