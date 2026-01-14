<?php

class Car {
    // Declares 
    private string $make;
    private string $model;
    private int $year;

    public function __construct(string $make, string $model, int $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getMake(): string {
        return $this->make;
    }

    public function getModel(): string {
        return $this->model;
    }

    public function getYear(): int {
        return $this->year;
    }

    public function displayInfo(): string {
        return "Car: " . $this->year . " " . $this->make . " " . $this->model;
    }
}