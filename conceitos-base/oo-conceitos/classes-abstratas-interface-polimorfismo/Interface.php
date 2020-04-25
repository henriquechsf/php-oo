<?php

interface Animal {
    public function run();
    public function sound();
}

class Dog implements Animal {

    public function run()
    {
        return 'Dog is running';
    }

    public function sound()
    {
        return 'Au au au';
    }
}

$dog = new Dog();
print $dog->run();
print $dog->sound();