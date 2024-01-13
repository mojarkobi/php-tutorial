<?php

class Student
{
    public $name;
    private $fullName;
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }
}

$obj = new Student();

$obj->name = "Hridoy"; // directly set name property outside the class

$obj->setFullName("Ashik");

echo "this output from first example\n";

echo isset($obj->name); // output 1

echo isset($obj->fullName); // output 0 so no output shown.

?>



<?php

class Student2
{
    public $name = "hridoy";
    private $fullName;
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }
    public function __isset($n)
    {

        return isset($this->$n);

    }
}

$obj2 = new Student2();

$obj2->setFullName("Ashik");

echo isset($obj2->name); // output 1

echo isset($obj2->fullName); // output 1 because now this isset get output from __isset() method from the class

?>