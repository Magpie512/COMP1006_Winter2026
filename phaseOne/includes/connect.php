<?php   
$host = "localhost"; //hostname
$db = "TrollPost"; //database name  
$user = "root"; //username
$password = ""; //password

//points to the database
$dsn = "mysql:host=$host;port=3307;dbname=$db;charset=utf8mb4";

//try to connect, if connected echo a yay!
try {
   $pdo = new PDO($dsn, $user, $password, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
   ]);
}
//what happens if there is an error connecting
catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}