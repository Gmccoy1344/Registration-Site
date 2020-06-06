<?php 
session_start();

if(!isset($_SESSION['uname'])){
    echo "Please login first <a href='login.php'> here </a>";
    exit;
}
    
?>

<html>
<head>

<style>



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
font-family:helvetica;
}

body {
    font-family:helvetica;
    background-image:url('https://images.fineartamerica.com/images/artworkimages/mediumlarge/2/summer-landscape-with-grass-field-and-billnoll.jpg');
    background-size: cover;
}

</style>

</head>

<body>
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


 $sql_statement = "SELECT * FROM `owner` WHERE `email` LIKE '". $_SESSION['uname']. "' ";
 $result = mysqli_query($conn, $sql_statement);
 
 if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $name = $row['owner_name'];
    }
}else{
    echo "0 results";
}
?>
<h1>Welcome <?php echo $name; ?></h1>
<br>
<ul>
	<li><a href="welcome-page.php">Welcome Page</a></li>
    <li><a href="pet-form.php">Dog Registration Form</a></li>
    <li><a href="catpet-form.php">Cat Registration Form</a></li>
    <li><a href="check.php">Personal Information</a></li>
    <li><a href="animal.php">Search</a></li>
    <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
</ul>

<?php 
$page= "pet-form.php";
$pages2= "catpet-form.php";


echo "Here you will be able to register your pet in the city.";
?>
<h2>First tell us what kind of pet do you have?</h2>

<button id="Dog">Dog</button>
  <script>
    var btn = document.getElementById('Dog');
    btn.addEventListener('click', function() {
      document.location.href = '<?php echo $page; ?>';
    });
  </script>
<br>
<button id="Cat">Cat</button>
  <script>
    var btn = document.getElementById('Cat');
    btn.addEventListener('click', function() {
      document.location.href = '<?php echo $pages2; ?>';
    });
  </script>
  

</body>

</html>

