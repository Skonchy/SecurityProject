<?php
$servername = "69.30.199.234";
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
//if button stop clicked
if(isset($_POST['transaction'])){
    $logedinUser=$_SESSION['user']['Username'];
    $query=("SELECT id FROM Users WHERE username='$logedinUser'");
    $result=mysql_query($query);

    $trans_id="hash";
    $cust_id=$result;
    $amount=$_POST['amount'];
    $trans_date=CURRENT_TIMESTAMP;


    $query=("INSERT INTO Transactions (trans_id, cust_id, amount, trans_date) VALUES ('$trans_id','$cust_id','$amount','$trans_date')");

    if(mysql_query($query)){
        echo "Insert into Transactions successful";
    } else {
        echo "Insert into Transactions failed";
    }
}
?>