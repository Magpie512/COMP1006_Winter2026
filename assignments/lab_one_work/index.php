<?php

require_once "car.php";
include "car.php";
declare(strict_types=1); // Enable strict types
$car = new Car("Toyota", "Camry", 2020);
echo $car->displayInfo();

