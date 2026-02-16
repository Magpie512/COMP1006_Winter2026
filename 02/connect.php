<?php

declare(strict_types=1); // Enable strict types

$host = "localhost"; // Database host name
$db = "testdb";     // Database name
$user = "root";    // Database username
$pass = "";       // Database password (empty for default XAMPP setup)

$dsn = "mysql:host=" . $host . ";dbname=" . $db;
// Dsn = data source name.
// complies the global variables into a single string that can be used to connect to the database.

try {
    $pdo = new PDO($dsn, $user, $pass);
    // pdo is php data object
    // this specific line creates a new instance of the PDO class, which represents a connection to the database.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    // PDO::ATTR_ERRMODE is a constant that specifies the error reporting mode for the PDO connection.
    // PDO::ERRMODE_EXCEPTION is a constant that tells PDO to throw exceptions whenever a database error occurs.
    
    //  -> is the object operator in PHP, used to access properties and methods of an object.
    // it simply means that if there is an error in the connection, it will throw an exception and the catch block will handle it.
    echo "<p>Connected to the database successfully!</p>";
    // Echo is the output text operator in PHP
} 

catch (PDOException $e) {
    //Catches any exceptions of type PDOException that may occur during the database connection attempt.
    echo "<p>Connection failed: " . $e->getMessage() . "</p>";
}

