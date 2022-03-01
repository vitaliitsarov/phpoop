<?php

class Person
{
    public $name;

    public function getName()
    {
        return $this->name;
    }
}

$person = new Person();
$person->name = 'Bob smith';
echo $person->getName();

?>  
