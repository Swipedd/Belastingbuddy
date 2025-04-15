<?php
$host = 'localhost'; // Of jouw databasehost
$dbname = 'belastingbuddy';
$username = 'root'; // Jouw databasegebruikersnaam
$password = ''; // Jouw databasewachtwoord

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Verbinding mislukt: " . $e->getMessage());
}
?>
