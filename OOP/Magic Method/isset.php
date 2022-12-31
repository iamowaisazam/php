 <?php
//  __isset()
// kisi bhi class ki public property ko check karne k liye isset use krte hen.. true or false return hota ha..


//  Before using the __isset () method, let me explain the use of the isset () method first. The isset () method is mainly used to determine whether the variable is set.
//  If you use the isset() method outside the object, there are two cases:
//  If the parameter is a public property, you can use the isset() method to determine whether the property is set or not.
//  If the parameter is a private property , the isset() method will not work.
//  So for the private property, is there any way to know if it is set? Of course, as long as we define a __isset() method in a class, we can use the isset() method outside the class to determine whether the private property is set or not.
//  When the isset() or empty() is called on an undefined or inaccessible property, the __isset() method will be called. Here is an example:
 
 
class Person
{
    public $sex = 'v';
    private $name;


    // public function __construct($name="",  $age=25, $sex='Male')
    // {
    //     $this->name = $name;
    //     $this->age  = $age;
    //     $this->sex  = $sex;
    // }

    public function __isset($content) {
        echo "The {$content} property is private，the __isset() method is called automatically.<br>";
        echo  isset($this->$content);
    }
}


$person = new Person("John", 25); // Initially assigned.
echo isset($person->sex),"<br>";
echo isset($person->name),"<br>";
echo isset($person->age),"<br>";