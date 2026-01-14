<?php
// Enable strict types
declare(strict_types=1); 

// Include the database connection and Car class files
require_once "connect.php";
require "car.php";

// Create a new Car object from the Car class
$car = new Car("Toyota", "Camry", 2020);

// Display the car information
echo $car->displayInfo();

/*
This assignment was alright. I generally found it easy due to the fact I basically just did this in C# with Shivali a month ago.

However, I had to relearn practices for PHP including strict typing and using PDO for database connections.

I don't entirely know if I did it correctly, but I believe I followed the instructions well enough. 
*/