<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE 410Project";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
//Create Table Users
$sql_table1 = "CREATE TABLE Users (
    id INT(6) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    username VARCHAR(40) NOT NULL,
    pass VARCHAR(50) NOT NULL,
    trust DECIMAL NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    )";

if ($conn->query($sql_table1) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
//Create Table Transactions
$sql_table2 = "CREATE TABLE Transactions (
    trans_id INT(6) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    cust_id INT(6) UNSIGNED NOT NULL,
    amount DECIMAL NOT NULL,
    trans_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    )";

if ($conn->query($sql_table2) === TRUE) {
    echo "Table Transactions created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>