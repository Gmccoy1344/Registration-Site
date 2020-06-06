<?php 
session_start();
if(!isset($_SESSION['uname'])){
    echo "Please login first <a href='login.php'> here </a>";
    exit;
}

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

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $name = $row['owner_name'];
        $id = $row['pet_Id'];
        $rid = $row['dogr_Id'];
    }
}else{
    echo "0 results";
}

$sql = "SELECT * FROM `pet` WHERE `id` LIKE '". $id. "' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $pname = $row['name'];
        
    }
}else{
    echo "0 results";
}

$sqlr = "SELECT * FROM `dog records` WHERE `dogr_Id` LIKE '" .$rid. "' ";
$results = mysqli_query($conn, $sqlr);

if (mysqli_num_rows($results) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($results)) {
        $rabies = $row['rabies'];
        $given = $row['date_g'];
        $expire = $row['date_e'];
        $parvo = $row['parvo'];
        $given1 = $row['date_g1'];
        $expire1 = $row['date_e1'];
        $bordetella = $row['bordetella'];
        $given2 = $row['date_g2'];
        $expire2 = $row['date_e2'];
        $civ = $row['civ'];
        $given3 = $row['date_g3'];
        $expire3 = $row['date_e3'];
        $lepto = $row['lepto'];
        $given4 = $row['date_g4'];
        $expire4 = $row['date_e4'];
        $neutered = $row['neutered'];
    }
}else{
     echo "error";
}


?>

<html>
<head>

<style>

form {
    background: tan;
    width:1000px;
    border:1px solid black;
    margin:10px;
    padding:10px;
}

/* Style navbar*/
 ul {
  list-style-type: none;
  margin: 8px;
  padding: 0;
  overflow: hidden;
  background-color: tan;
}

li {
  float: left;
  border-right: 1px solid #bbb;
}

li:last-child {
border-right: none;
}


li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

h1 {
font-size: 35px;
font-family:helvetica;
}

body {
    font-family:helvetica;
    background-image:url('https://images.fineartamerica.com/images/artworkimages/mediumlarge/2/summer-landscape-with-grass-field-and-billnoll.jpg');
    background-size: cover;
}

p{
    font-size: 16px;
 }
</style>

</head>

<body>

<h1><?php echo $name; ?></h1>
<br>
<ul>
	<li><a href="welcome-page.php">Welcome Page</a></li>
    <li><a href="pet-form.php">Dog Registration Form</a></li>
    <li><a href="catpet-form.php">Cat Registration Form</a></li>
    <li><a href="check.php">Personal Information</a></li>
    <li><a href="animal.php">Search</a></li>
    <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
</ul>


<form >
<h2>Here you will be able to see and update your current information about your pet.</h2>
<p>
Dog Name: <?php echo $pname; ?><br>
<br>
Rabies: <?php echo $rabies; ?><br>
<br>
Rabies: <?php echo $rabies; ?><br>
<br>
Date Given: <?php echo $given; ?><br>
<br>
Date Expires: <?php echo $expire; ?><br>
<br>
Parvo: <?php echo $parvo; ?><br>
<br>
Date Given: <?php echo $given1; ?><br>
<br>
Date Expires: <?php echo $expire1; ?><br>
<br>
Bordetella: <?php echo $bordetella; ?><br>
<br>
Date Given: <?php echo $given2; ?><br>
<br>
Date Expires: <?php echo $expire2; ?><br>
<br>
CIV: <?php echo $civ; ?><br>
<br>
Date Given: <?php echo $given3; ?><br>
<br>
Date Expires: <?php echo $expire3; ?><br>
<br>
Leptospirosis: <?php echo $lepto; ?><br>
<br>
Date Given: <?php echo $given4; ?><br>
<br>
Date Expires: <?php echo $expire4; ?><br>
<br>
Neutered: <?php echo $neutered; ?><br>
<br>

</p>
</form>
</body>

</html>





