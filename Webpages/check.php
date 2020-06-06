<?php
session_start();

$user = 'root';
$password = 'root';
$db = 'petlog';
$host = 'localhost';
$port = 3309;

$conn = new mysqli($host, $user, $password, $db, $port);
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

$sql_statement = "SELECT * FROM `owner` WHERE `email` LIKE '". $_SESSION['uname']. "' ";
$result = mysqli_query($conn, $sql_statement);

//$sql_statements = "SELECT `dogr_Id` FROM `owner` WHERE `email` LIKE '". $_SESSION['uname']. "' ";
//$results = mysqli_query($conn, $sql_statements);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($row['catr_Id'] == 0){
            header('Location: personal2.php');
        }
        else{
            header('Location: personal.php');
        }
      
    }
}
    
?>