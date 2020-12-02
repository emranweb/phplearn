<?php

class Person {
    public $name;
    public $age;
    protected $brother;

    public static function welcom (){
        return "hello world";
    }

    public function getName (){
        return self::welcom();
    }

    function __construct($name, $age, $brother){
     $this->name = $name;
     $this->age = $age;
     $this->brother  = $brother;
    }
 
}


$person1 = new Person("emran", 30,"sabbir");
echo $person1->getName();


class Shop extends Person {
    public $id;

    public function __construct($name, $age, $brother, $id){
        parent:: __construct($name, $age,$brother);
        $this->id = $id;
    }
}

$shop1 = new Shop("erman", 30, "sabbir", 0220202);





 echo $person1->name;



