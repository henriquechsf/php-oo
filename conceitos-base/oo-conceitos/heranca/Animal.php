<?php


class Animal
{
    public $name;

    public function sleep() {
        return $this->name . ' are sleeping...';
    }
}

class Dog extends Animal {

    public function sleep()
    {
        print parent::sleep(); // chama o metodo da classe pai
        return 'Dog are sleeping...';
    }
}

class Bird extends Animal {

}

$dog = new Dog();
$dog->name = 'Campeão';
print $dog->sleep();

print "\n";

$bird = new Bird();
$bird->name = 'Fly';
print $bird->sleep();