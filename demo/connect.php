<?php 
$host = 'localhost';
$user = 'root';
$pass = 'goodtime';
 
try {
    $conn = new PDO("mysql:host=host.docker.internal;", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>