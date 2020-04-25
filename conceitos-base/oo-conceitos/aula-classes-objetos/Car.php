<?php


class Car
{
    public $color;
    public $year;
    public $model;

    public function __construct($color, $year, $model)
    {
        $this->color = $color;
        $this->year = $year;
        $this->model = $model;
    }

    public function run() {
        return $this->model . ' car is running';
    }

    public function  stop() {
        return $this->model . ' car has stopped';
    }

    public function __destruct()
    {
        print 'Removing object ' . __CLASS__;
    }
}

// instanciando os objetos Car
$car = new Car('white', '2014', 'Gol');
print $car->model;
//$car->model = 'Gol';
//$car->color = 'white';
//$car->year = 2014;

//print $car->run();
//print $car->stop();