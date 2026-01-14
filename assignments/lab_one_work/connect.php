<?php

declare(strict_types=1); // Enable strict types

// Database connection parameters
$host = "localhost";      // Database server's hostname
$db = "testdb";          // Database name
$user = "root";          // Database username
$pass = "";              // Database password (empty for local development)

// Build the Data Source Name (DSN) string for the MySQL connection
$dsn = "mysql:host=" . $host . ";dbname=" . $db;

try {
    // Create a new PDO (PHP Data Objects) instance to establish database connection
    $pdo = new PDO($dsn, $user, $pass);
    
    // Set PDO to throw exceptions on errors for better error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Display success message
    echo "<p>Connected to the database successfully!</p>";
} 

catch (PDOException $e) {
    // Catch and display any connection errors
    echo "<p>Connection failed: " . $e->getMessage() . "</p>";
}
