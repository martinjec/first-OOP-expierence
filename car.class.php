<?php
require('house.class.php');
interface Garage extends Block
{
    public function setMake($make, $model);
    public function getMake();
}
class Car extends House
{
    //Properties
    public $make;
    public $model;
    public $engine;

    //Methods
    public function setMake($make, $model) 
    {
        $this->make = $make;
        $this->model = $model;
    } 
    public function getMake() 
    {
        return $this->make;
    }
}

$car = new Car('E30', '325');
$car->setMake('E30', '325');
echo $car->getMake();