<?php

class Person
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

$person = new Person();
// $person->name = 'Bob smith'; // Throws an error
$person->setName('Bob smith');
echo $person->getName(); // prints 'Bob smith'

?>  
