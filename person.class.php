<?php
interface Humans
{
    public function getName();
}
class Person implements Humans
{
    //Properties
    public $firstname;
    public $lastname;
    public $email;

    //Methods
    public function __construct($firstname, $lastname, $email)
        {    
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        }
    function getName()
        {
            return $this->firstname;
        }
}       

$name = new Person('John', 'Doe','nu@nav.com');
echo $name->getName();