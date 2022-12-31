<?php

// Herarical Inheritance


//Parent Class
class Father {  
    
    //Properties
    public  $id = 1;
    public $name = 'Father';
    public $age = 50;
    public $mobile = '03112239342';
    public $address = 'Karachi,Pakistan';
    protected $housekey = 'key';
    private $housepapers = 'papers';
    private $gender = 'male';
    public static $card = 123;

    //constructer
    public function __construct() {
        echo '<br> Construct Called Father <br>';
    }

     //methods
    public function Getall() {
      return [
           'id' => $this->id,
           'name' => $this->name,
           'age' => $this->age,
           'mobile' => $this->mobile,
           'address' => $this->address,
           'key' => $this->housekey,
      ];
    }

    public function change($property,$value) {
        $this->$property = $value;
      }
    
    public function get_by_key($key) {
    return  $this->$key;
    }

    public static function all() {
        return [
            'card' => self::$card,
       ];
    }
    
}
  
  // child class
class Son extends Father {
       
     //Properties
     public $id = 1123;
     public $name = 'Son';
     public $age = 35;
     public $mobile = '031122393';
     private $gender = 'male';
 
     //constructer
     public function __construct() {

         parent::__construct();
        echo '<br> Construct Called Son <br>';
     }
 
      //methods
     public function Getall() {
       return [
            'id' => $this->id,
            'name' => $this->name,
            'age' => $this->age,
            'mobile' => $this->mobile,
            'address' => $this->address,
       ];
     }

     public function change($property,$value) {
        $this->$property = $value;
      }

      public function get_by_key($key) {
        return  $this->$key;
      }
  
}

class GrandSon extends Son {
       
    //Properties
    public $id = 11;
    public $name = 'GrandSon';
    public $age = 10;
    public $mobile = '031122393';
    private $gender = 'male';

    //constructer
    public function __construct() {

        parent::__construct();
       echo '<br> Construct Called GrandSon <br>';
    }

     //methods
    public function Getall() {
      return [
           'id' => $this->id,
           'name' => $this->name,
           'age' => $this->age,
           'mobile' => $this->mobile,
           'address' => $this->address,
      ];
    }

    public function get_by_key($key) {
        return  $this->$key;
      }

    public function change($property,$value) {
       $this->$property = $value;
     }
 
}


   // child class
class Daughter extends Father {

       //Properties
       public $id = 234;
       public $name = 'Daughter';
       public $age = 30;
       public $mobile = '03112239312';
       private $gender = 'female';
   
       //constructer
       public function __construct() {
  
           parent::__construct();
          echo '<br> Construct Called Daughter <br>';
       }
   
        //methods
       public function Getall() {
         return [
              'id' => $this->id,
              'name' => $this->name,
              'age' => $this->age,
              'mobile' => $this->mobile,
              'address' => $this->address,
         ];
       }

       public function change($property,$value) {
        $this->$property = $value;
      }

      public function get_by_key($key) {
        return  $this->$key;
      }

}


//Result
    // $obj = New Father();
    // $obj->change('mobile','123');
    // $obj->Getall();
    // print_r($obj);

    // $objSon = New Son();
    // $objSon->change('mobile','12');
    // $objSon->change('address','none');
    // $objSon->Getall();
    // print_r($objSon);


      print_r(Father::all());

    //   $objGrandSon = New Father();
    //   echo $objGrandSon->get_static_value();

     // $objGrandSon->Getall();
      //print_r($objGrandSon);

?>