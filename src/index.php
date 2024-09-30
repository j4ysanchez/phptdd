<?php

$dbHost = "server-mysql";
$dbUsername = "root";
$dbPassword = "mypassword";
$dbName = "mysql";

try {
    $conn = new PDO("mysql:host=$dbHost; dbname=$dbName",
    $dbUsername, $dbPassword);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

phpinfo();
?>
