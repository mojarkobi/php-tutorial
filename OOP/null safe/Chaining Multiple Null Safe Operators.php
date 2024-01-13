<?php
class Car {
    public function getModel(): ?string {
        return "Toyota";
    }
}

class Driver {
    public function getCar(): ?Car {
        return new Car();
    }
}

$driver = new Driver();
$model = $driver?->getCar()?->getModel();

echo "Car Model: " . $model; // Output: Car Model: Toyota

?>