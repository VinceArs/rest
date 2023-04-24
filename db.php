<?php

$host = 'localhost';

$db  = 'restaurant';

$user = 'root';

$pass = '';

$charset = 'utf8mb4';

try {

$pdo = new PDO("mysql:host=$host;dbname=restaurant", $user, $pass);


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

echo "Connection failed: " . $e->getMessage();

}

?>