<?php
class First {
    //property
    public $name = "emran";


    //methodes
    public function name (){
        echo $this->  name;
    }
}




class Foo {

    static private $name = "afdhefi";

    private static function nameValue (){
        echo self::$name;
    }

    public function check(){
        echo self::nameValue();
    }
}

$foo = new Foo;

print $foo->check();



