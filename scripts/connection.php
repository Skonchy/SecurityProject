<?php
$servername="localhost";
$username="root";
$password="";

$conn=new mysqli($servername,$username,$password);

if($conn->connect_error){
    die("Database connection failed: " . $conn->connect_error);
}

echo("Database connection established.");
?>