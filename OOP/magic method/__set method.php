<?php

class test{
    private $name;
    public function show(){

        echo $this->name;
    }

    public function __set($propertyName,$propertyValue){
      
      if(property_exists($this,$propertyName)){
        
        $this->$propertyName = $propertyValue; // $propertyName use doller sign because it's a method parameter
        // and it has the original property name 
      }
      else{
        echo "sorry property name `$propertyName` not exist \n";
      }

    }
}

$obj = new test();

$obj->names = "ashik";

$obj->name = "ashik";

$obj->show();


?>