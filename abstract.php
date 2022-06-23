<?php

abstract class Car{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract protected function run() : string;
}

class Audi extends Car{
    public function run() : string{
        return "This is audi car";
    }
}

class Volvo extends Car{
    public function run() : string{
        return "This is volvo car";
    }
}

$myAudi = new Audi("audi");
echo $myAudi->run();
$myVolvo = new Volvo("volvo");
echo $myVolvo->run();