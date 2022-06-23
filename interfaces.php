<?php

// interface Bowlers{
//     public function spinner();
//     public function faster();
//     public function mediumPacer();
// }

// class Bumrah implements Bowlers{
//     public function spinner()
//     {
//         echo "Bumrah does not bowl spin \n";
//     }
//     public function faster()
//     {
//         echo "Bumrah bowls fast as 90 mil per hours \n";
//     }
//     public function mediumPacer()
//     {
//         echo "Bumrah does not bowl medium speed";
//     }

// }

// $topBowler = new Bumrah();
// $topBowler->spinner();
// $topBowler->faster();
// $topBowler->mediumPacer();


/////////////////////////////////////////////////////
interface Animals{
    public function makeSound();
}

class Cat implements Animals{
    public function makeSound()
    {
        echo "Meow";
    }
}

class Dog implements Animals{
    public function makeSound()
    {
        echo "Barke";
    }
}

class Lion implements Animals{
    public function makeSound()
    {
        echo "Roar";
    }
}

$cat = new Cat();
$dog = new Dog();
$lion = new Lion();

$animals = array($cat, $dog, $lion);

foreach($animals as $animal){
    $animal->makeSound();
}