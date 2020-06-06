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


form {
    align: center;
    background: tan;
    width:500px;
    border:1px solid black;
    margin:10px;
    padding:10px;
}

h1 {
font-family:helvetica;
}

body {
    font-family:helvetica;
    background-image:url('https://images.fineartamerica.com/images/artworkimages/mediumlarge/2/summer-landscape-with-grass-field-and-billnoll.jpg');
    background-size: cover;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 40%;
}

/* Middle column */
.column.middle {
  width: 55%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}



</style>

</head>
<body>
<h1>Owner Information</h1>
<br>

<ul>
	<li><a href="welcome-page.php">Welcome Page</a></li>
    <li><a href="pet-form.php">Dog Registration Form</a></li>
    <li><a href="catpet-form.php">Cat Registration Form</a></li>
    <li><a href="check.php">Personal Information</a></li>
    <li><a href="animal.php">Search</a></li>
    <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
</ul>


<div class="column middle">
<form action= "processForm2.php">


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


$dogName = $_GET['nameInput'];
$dogAge = $_GET['ageInput'];
$dogBreed = $_GET['breed'];
$dogColor = $_GET['colorinput'];
$dogGender = $_GET['gender'];

/*Rabies*/
$rabies = $_GET['Rabies'];
$dateg = $_GET['date_g'];
$datee = $_GET['date_e'];

/*Parvo*/
$parvo = $_GET['Parvo'];
$dateg1 = $_GET['date_g1'];
$datee1 = $_GET['date_e1'];

/*Bordetella*/
$bordetella = $_GET['Bordetella'];
$dateg2 = $_GET['date_g2'];
$datee2 = $_GET['date_e2'];

/*CIV*/
$civ = $_GET['CIV'];
$dateg3 = $_GET['date_g3'];
$datee3 = $_GET['date_e3'];

/*Lepto*/
$lepto = $_GET['Lepto'];
$dateg4 = $_GET['date_g4'];
$datee4 = $_GET['date_e4'];

/*Neutered*/
$neuter = $_GET['Neutered'];





$sql_in = "INSERT INTO `pet` (`id`, `name`, `age`, `color`, `gender`, `breed`) VALUES (NULL, '$dogName', '$dogAge', '$dogColor', '$dogGender', '$dogBreed')";

if (mysqli_query($conn, $sql_in)) {
    echo "Your dog's information has been saved! Now tell us more about the owner.";
} else {
    
}



$sql = "SELECT id FROM pet WHERE name LIKE '%" .$dogName. "%' ";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
    }
}else{
    echo "0 results";
}

        
$sql_d = "INSERT INTO `dog records` (`dogr_id`, `name`, `rabies`, `date_g`, `date_e`, `parvo`, `date_g1`, `date_e1`, `bordetella`, `date_g2`, `date_e2`, `civ`, `date_g3`, `date_e3`, `lepto`, `date_g4`, `date_e4`, `neutered`) VALUES (NULL, '$dogName', '$rabies', '$dateg', '$datee', '$parvo', '$dateg1', '$datee1', '$bordetella', '$dateg2', '$datee2', '$civ', '$dateg3', '$datee3', '$lepto', '$dateg4', '$datee4', '$neuter')";
        
        if (mysqli_query($conn, $sql_d)) {
            $last_id = mysqli_insert_id($conn);
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }






?>
<fieldset>
<legend>Owner Information:</legend>
<br>
Owner's Name: <input type="text" name="nameinput"><br>
<br>
This is your Pet-Id(Please do not change the Id): <input type="number" name="idInput" value= <?php echo $id; $conn->close();?> ><br>
<br>
This is your Record-Id(Please to not change the Id: <input type="number" name="ridInput" value= <?php echo $last_id; $conn->close();?> ><br>
<br>
<fieldset>
    <legend>Gender:</legend>
<input type= "radio" name= "genderinput" value= "male"> Male<br>
<input type="radio" name="genderinput" value="female"> Female<br>
<input type="radio" name="genderinput" value="other"> Other<br>

  </fieldset>
  
<br>

Phone: <input type="number" name="PhoneInput"><br>
<br>
Email: <input type="text" name="EmailInput"><br>
<br>
<fieldset>
    <legend>Address:</legend>
Street: <input type= "text" name= "streetinput"> <br>
<br>
City: <input type="text" name="cityinput"> <br>
<br>


<label for="state">State?:</label>
  <select id="state" name="state">
  	<option value="AL">AL</option>
    <option value="AK">AK</option>
    <option value="AZ">AZ</option>
    <option value="AR">AR</option>
    <option value="CA">CA</option>
    <option value="CO">CO</option>
    <option value="CT">CT</option>
    <option value="DE">DE</option>
    <option value="FL">FL</option>
    <option value="GA">GA</option>
    <option value="HI">HI</option>
    <option value="ID">ID</option>
    <option value="IL">IL</option>
    <option value="IN">IN</option>
    <option value="IA">IA</option>
    <option value="KS">KS</option>
    <option value="KY">KY</option>
    <option value="LA">LA</option>
    <option value="ME">ME</option>
    <option value="MD">MD</option>
    <option value="MA">MA</option>
    <option value="MI">MI</option>
    <option value="MN">MN</option>
    <option value="MS">MS</option>
    <option value="MO">MO</option>
    <option value="MT">MT</option>
    <option value="NE">NE</option>
    <option value="NV">NV</option>
    <option value="NH">NH</option>
    <option value="NJ">NJ</option>
    <option value="NM">NM</option>
    <option value="NY">NY</option>
    <option value="NC">NC</option>
    <option value="ND">ND</option>
    <option value="OH">OH</option>
    <option value="OK">OK</option>
    <option value="OR">OR</option>
    <option value="PA">PA</option>
    <option value="RI">RI</option>
    <option value="SC">SC</option>
    <option value="SD">SD</option>
    <option value="TN">TN</option>
    <option value="TX">TX</option>
    <option value="UT">UT</option>
    <option value="VT">VT</option>
    <option value="VA">VA</option>
    <option value="WA">WA</option>
    <option value="WV">WV</option>
    <option value="WI">WI</option>
    <option value="WY">WY</option>
  </select>

<br>
<br>
Zip: <input type="number" name="zip"><br>
<br>
</fieldset>
  </fieldset>

<br>
    
<button type = "submit">Submit</button>
</form>
</div>


  
  


</body>
</html>


