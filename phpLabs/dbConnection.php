<?php
// Database credentials
$host = 'localhost';
$dbname = 'test';
$username = 'root';
$password = '';

// Function to connect using PDO
function connectPDO() {
    global $host, $dbname, $username, $password;
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully using PDO";
        return $pdo;
    } catch (PDOException $e) {
        echo "Connection failed using PDO: " . $e->getMessage();
        return null;
    }
}

// Function to connect using MySQLi
function connectMySQLi() {
    global $host, $dbname, $username, $password;
    $mysqli = new mysqli($host, $username, $password, $dbname);

    if ($mysqli->connect_error) {
        die("Connection failed using MySQLi: " . $mysqli->connect_error);
    } else {
        echo "Connected successfully using MySQLi";
        return $mysqli;
    }
}

// Example usage
$connectionMethod = 'pdo'; // Change to 'mysqli' to use MySQLi

if ($connectionMethod === 'pdo') {
    $connection = connectPDO();
} else {
    $connection = connectMySQLi();
}
?>