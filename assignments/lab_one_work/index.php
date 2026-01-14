<?php
declare(strict_types=1); // Enable strict types
require_once "connect.php";
require "car.php";
$car = new Car("Toyota", "Camry", 2020);
echo $car->displayInfo();

