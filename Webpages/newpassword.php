<?php

$user = 'root';
$password = 'root';
$db = 'petlog';
$host = 'localhost';
$port = 3309;

$conn = new mysqli($host, $user, $password, $db, $port);
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
$psw = mysqli_escape_string($conn,$_POST['psw']);
$uname = mysqli_escape_string($conn,$_POST['uname']);
$hash = password_hash($psw, PASSWORD_BCRYPT);

$sql = "UPDATE login SET password='$hash' WHERE email = '$uname'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header('Location: login.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>