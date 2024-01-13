<?php

// before php 8 version we need write property separately when set property with constructor
class test1
{
    public string $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;

    }

    public function changvalue($name, $age)
    {

        $this->name = $name;
        $this->age = $age;

    }
}

$obj = new test1("ahmed", 25);

$obj->changvalue("ashik", 26);

echo $obj->name . " " . $obj->age;

echo PHP_EOL;


// here php 8 new features called constructor property promotion
class test2
{

    public function __construct(public string $name, public $age)
    {

        // no need to asign value here into $name and $age
        // because these property asign value inside __construct parameter when it called

    }

    public function changvalue($name, $age)
    {

        $this->name = $name;
        $this->age = $age;

    }
}

$obj = new test2("ahmed", 25);

$obj->changvalue("ashik", 26);

echo $obj->name . " " . $obj->age;
?>