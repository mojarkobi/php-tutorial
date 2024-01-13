<?php

/*
 __destruct magic method automatic call after all function all statement are done 
 of this entire php script file

 but __construct method also automatic call when new object or instance create of class
*/
class Calculation
{
    private $numbers = [];

    public function __construct(...$args)
    {
        $this->numbers = $args;
    }

    public function getNumbers(): array
    {
        return $this->numbers;
    }

    public function sum(): void
    {
        $result = array_reduce($this->numbers, function ($carry, $n) {
            return $carry + $n;
        }, 0);

        echo "Sum: $result\n";
    }

    public function __destruct()
    {
        echo "All functions are called so that this __destruct method works.\n";
    }
}

$obj = new Calculation(25, 36);
echo "this text write after create obj object of class calculation\n";
$obj->getNumbers();
echo "this is last line of this script";
?>