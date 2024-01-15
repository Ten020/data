<?php
$servername = "localhost";
$dbname = "jongeren kansrijker";
$username = "root";
$password = "TenTalatsang020";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
// Sluit de databaseverbinding
//$conn = null;
?>