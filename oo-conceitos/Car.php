<?php


class Car
{
    public $color;
    public $year;
    public $model;

    public function run() {
        return $this->model . ' car is running';
    }

    public function  stop() {
        return $this->model . ' car has stopped';
    }
}

// instanciando os objetos Car
$car = new Car();
$car->model = 'Gol';
$car->color = 'white';
$car->year = 2014;

print $car->run();
print $car->stop();