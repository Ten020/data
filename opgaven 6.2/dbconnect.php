<?php
function dbconnect() {
$servername = "localhost";
$dbname = "winkel";
$username = "root";
$password = "TenTalatsang020";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    return null;
}
 
// Sluit de databaseverbinding
//$conn = null;
}
?>