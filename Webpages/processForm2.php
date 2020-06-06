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


$name = mysqli_escape_string($conn,$_GET['nameinput']);
$petid = mysqli_escape_string($conn,$_GET['idInput']);
$catrid = mysqli_escape_string($conn,$_GET['ridInput']);
$gender = mysqli_escape_string($conn,$_GET['genderinput']);
$phone = mysqli_escape_string($conn,$_GET['PhoneInput']);
$email = mysqli_escape_string($conn,$_GET['EmailInput']);
$street = mysqli_escape_string($conn,$_GET['streetinput']);
$city = mysqli_escape_string($conn,$_GET['cityinput']);
$state = mysqli_escape_string($conn,$_GET['state']);
$zip = mysqli_escape_string($conn,$_GET['zip']);




$sql_in = "INSERT INTO `owner` (`owner_id`, `catr_Id`, `dogr_Id`, `pet_Id`, `owner_name`, `owner_gender`, `email`, `phone`, `street`, `city`, `state`, `zip`) VALUES (NULL, '$catrid', NULL , '$petid', '$name', '$gender', '$email', '$phone', '$street', '$city', '$state', '$zip' )";

if (mysqli_query($conn, $sql_in)) {
    echo "New record created successfully";
    header('Location: personal.php');
} else {
    echo "Error: " . $sql_in . "<br>" . mysqli_connect_error($conn);
}



$conn->close();
?>