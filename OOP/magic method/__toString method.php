<?php

// __toString magic method used to show custom error when user try to echo $object

class Employee{

    public $name;

    public function __construct($name){
        $this->name = $name;
        
    }

    public function __toString(){

        return "you are trying to echo object to string but it's not possible";
    }
}

$obj = new Employee("ashik");
echo $obj;
?>