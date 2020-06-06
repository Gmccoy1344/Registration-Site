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
echo "connected";


$email = mysqli_escape_string($conn,$_POST['email']);
$pass = mysqli_escape_string($conn,$_POST['psw']);
$hash = password_hash($pass, PASSWORD_BCRYPT);

$sql_in = "INSERT INTO `login` (`email`, `password`) VALUES ('$email', '$hash')";

if (mysqli_query($conn, $sql_in)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql_in . "<br>" . mysqli_connect_error($conn);
}
echo "Please login <a href='login.php'> here </a>";

$conn->close();