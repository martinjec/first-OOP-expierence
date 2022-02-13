<?php
require('person.class.php');
interface Block extends Humans
{
    public function getColor($color);
    public function getName();
}
class House implements Block
{
    //Properties
    public $color;
    public $size;

    //Methods
    function getName()
        {
            return $this->firstname;
        }
    public function __construct($color, $size)
        {    
        $this->color = $color;
        $this->size = $size;
        }
    public function getColor($color)
    {
        return $this->$color;
    }
}

$colorOpt = new House('green', 300);
echo $colorOpt->getColor('color');
