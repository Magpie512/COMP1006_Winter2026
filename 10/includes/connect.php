<?php 
// $host = "172.31.22.43"; //hostname
// $db = "Mars200561234"; //database name
// $user = "Mars200561234"; //username
// $password = "TrOH_Y_OI2"; //password

$host = "localhost"; //hostname
$db = "bitumi"; //database name
$user = "root"; //username
$password = ""; //password


//points to the database
$dsn = "mysql:host=$host;dbname=$db";

//try to connect, if connected echo a yay!
try {
   $pdo = new PDO ($dsn, $user, $password); 
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
//what happens if there is an error connecting 
catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage()); 
}
