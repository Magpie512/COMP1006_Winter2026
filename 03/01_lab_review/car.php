<?php
// This class represents a car with basic properties.
class Car {
    public $make;
    public $model;
    public $year;

    // Constructor sets up the car object when created.
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method returns a formatted string with car info.
    public function getCarInfo() {
        return "Car: {$this->year} {$this->make} {$this->model}";
    }
}
?>