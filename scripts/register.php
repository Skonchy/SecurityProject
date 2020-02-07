<?php
$servername = "localhost";
$username = "root";
$pass="";
$db="410Project";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysql_select_db($db);

if(isset($_POST['register'])){
    $username=$_POST(['Username']);
    $pass=$_POST(['Password']);
    $trust='0.5';
    $reg_date=CURRENT_TIMESTAMP;

    $query=("INSERT INTO Users (username, pass, trust, reg_date) VALUES ('$username','$pass','$trust','$reg_date')");

    if(mysql_query($query)){
        echo "Insert into Users successful";
    } else {
        echo "Insert into Users failed";
    }
}

?>