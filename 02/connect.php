<?php

declare(strict_types=1); // Enable strict types

&host = "localhost";
&db = "testdb";
&user = "root";
&pass = "";

$dsn = "mysql:host=" . &host . ";dbname=" . &db;

try {
    $pdo = new PDO($dsn, &user, &pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>Connected to the database successfully!</p>";
} 

catch (PDOException $e) {
    echo "<p>Connection failed: " . $e->getMessage() . "</p>";
}

