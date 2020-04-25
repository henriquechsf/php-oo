<?php

// public -> visivel para todas classes
// protected -> visivel somente pela própria classe e para classes filhas
// private -> visivel somente pela própria classe ou sua instancia

class Person
{
    public $name;
    private $age = 30;

    public function showName() {
        return $this->name;
    }

    public function showAge() {
        return $this->age;
    }
}

class Woman extends Person {

    public function showWomanAge() {
        return $this->showAge();
    }
}

$person = new Person();
$person->name = 'Henrique';
//$person->age = 35;

print $person->name . "\n";

$woman = new Woman();
print $woman->showWomanAge();