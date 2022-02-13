<?php
require('car.class.php');
interface Bike 
{
    public function getMotor($motor);
}
class Harley extends Car implements Garage
{
    //Properties
    public $motor;
    public $hp;
    public $torque;

    //Methods
    public function setMotor($motor)
    {
        $this->motor = $motor;
    }
    public function getMotor()
    {
        return $this->motor;
    }
}

$motortype = new Harley('V2','somting');
$motortype->setMotor('V2');
echo $motortype->getMotor('V2');