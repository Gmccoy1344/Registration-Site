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

.column {
  float: left;
  padding: 10px;
  width: 33.33%;
  
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
<h1>Register Your Cat Here</h1>
<br>

<ul>
	<li><a href="welcome-page.php">Welcome Page</a></li>
    <li><a href="pet-form.php">Dog Registration Form</a></li>
    <li><a href="catpet-form.php">Cat Registration Form</a></li>
    <li><a href="check.php">Personal Information</a></li>
    <li><a href="animal.php">Search</a></li>
    <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
</ul>


<div class="column">
<form action= "ownerform.php">
<fieldset>
<legend>Pet Information:</legend>
Name: <input type="text" name="nameInput"><br>
<br>
Age: <input type= "number" name= "ageInput"><br>
<br>
<fieldset>
    <legend>Gender:</legend>
<input type= "radio" name= "gender" value= "male"> Male<br>
<input type="radio" name="gender" value="female"> Female<br>
  </fieldset>
  
<br>

<label for="breed">What is your cat's breed?:</label>
  <select id="breed" name="breed">
  	<option value="N/A">N/A</option>
    <option value="Abyssinian Cat">Abyssinian Cat</option>
    <option value="American Bobtail Cat">American Bobtail Cat</option>
    <option value="American Curl Cat">American Curl Cat</option>
    <option value="American Shorthair Cat">American Shorthair Cat</option>
    <option value="American Wirehair Cat">American Wirehair Cat</option>
    <option value="Balinese-Javanese Cat">Balinese-Javanese Cat</option>
    <option value="Bengal Cat">Bengal Cat</option>
    <option value="Birman Cat">Birman Cat</option>
    <option value="Bombay Cat">Bombay Cat</option>
    <option value="British Shorthair Cat">British Shorthair Cat</option>
    <option value="Burmese Cat">Burmese Cat</option>
    <option value="Chartreux Cat">Chartreux Cat</option>
    <option value="Cornish Rex Cat">Cornish Rex Cat</option>
    <option value="Devon Rex Cat">Devon Rex Cat</option>
    <option value="Egyptian Mau Cat">Egyptian Mau Cat</option>
    <option value="European Burmese Cat">European Burmese Cat</option>
    <option value="Exotic Shorthair Cat">Exotic Shorthair Cat</option>
    <option value="Havana Brown Cat">Havana Brown Cat</option>
    <option value="Himalayan Cat">Himalayan Cat</option>
    <option value="Japanese Bobtail Cat">Japanese Bobtail Cat</option>
    <option value="Korat Cat">Korat Cat</option>
    <option value="Laperm Cat">Laperm Cat</option>
    <option value="Maine Coon Cat">Manx Cat</option>
    <option value="Norwegian Forest Cat">Norwegian Forest Cat</option>
    <option value="Ocicat Cat">Ocicat Cat</option>
    <option value="Oriental Cat">Oriental Cat</option>
    <option value="Persian Cat">Persian Cat</option>
    <option value="Peterbald Cat">Peterbald Cat</option>
    <option value="Pixiebob Cat">Pixiebob Cat</option>
    <option value="Ragamuffin Cat">Ragamuffin Cat</option>
    <option value="Ragdoll Cat">Ragdoll Cat</option>
    <option value="Russian Blue Cat">Russian Blue Cat</option>
    <option value="Savannah Cat">Savannah Cat</option>
    <option value="Scottish Fold Cat">Scottish Fold Cat</option>
    <option value="Selkirk Rex Cat">Selkirk Rex Cat</option>
    <option value="Siamese Cat">Siamese Cat</option>
    <option value="Siberian Cat">Siberian Cat</option>
    <option value="Singapura Cat">Singapura Cat</option>
    <option value="Somali Cat">Somlai Cat</option>
    <option value="Sphynx Cat">Sphynx Cat</option>
    <option value="Tonkinese Cat">Tonkinese Cat</option>
    <option value="Toyger Cat">Toyger Cat</option>
    <option value="Turkish Angora Cat">Turkish Angora Cat</option>
    <option value="Turkish Van Cat">Turkish Van Cat</option>
  </select>

<br>

  </fieldset>
  <br>
Color <input type= "text" name= "colorinput"><br>
<br>


<fieldset>
    <legend>Rabies?</legend>
<input type= "radio" name= "Rabies" value= "yes"> Yes<br>
<input type="radio" name="Rabies" value="no"> No<br>
  </fieldset>
  <br>
 Date Recieved:<input type= "date" name= "date_g" ><br>
 <br>
 Date Expire:<input type= "date" name= "date_e" ><br>
 
 <br>
  <fieldset>
    <legend>Calicivirus(C)?</legend>
<input type= "radio" name= "C" value= "yes"> Yes<br>
<input type="radio" name="C" value="no"> No<br>
  </fieldset>
  
  <br>
  Date Recieved:<input type= "date" name= "date_g1" ><br>
<br>
 Date Expire:<input type= "date" name= "date_e1" ><br>
  
  <br>
  <fieldset>
    <legend>Feline Viral Rhinotracheitis(FVR)?</legend>
<input type= "radio" name= "FVR" value= "yes"> Yes<br>
<input type="radio" name="FVR" value="no"> No<br>
  </fieldset>
  <br>
   Date Recieved:<input type= "date" name= "date_g2" ><br>
 <br>
 Date Expire:<input type= "date" name= "date_e2" ><br>
  
 <br>
  <fieldset>
    <legend>Feline Panleukopenia(P)?</legend>
<input type= "radio" name= "P" value= "yes"> Yes<br>
<input type="radio" name="P" value="no"> No<br>
  </fieldset>
  <br>
   Date Recieved:<input type= "date" name= "date_g3" ><br>
 <br>
 Date Expire:<input type= "date" name= "date_e3" ><br>
  
 <br>
  <fieldset>
    <legend>Feline Infectious Peritonitis(FIP)?</legend>
<input type= "radio" name= "FIP" value= "yes"> Yes<br>
<input type="radio" name="FIP" value="no"> No<br>
  </fieldset>
  <br>
   Date Recieved:<input type= "date" name= "date_g4" ><br>
 <br>
 Date Expire:<input type= "date" name= "date_e4" ><br>
  
  <br>
  <fieldset>
    <legend>Feline Leukemia?</legend>
<input type= "radio" name= "Leukemia" value= "yes"> Yes<br>
<input type="radio" name="Leukemia" value="no"> No<br>
  </fieldset>
  <br>
   Date Recieved:<input type= "date" name= "date_g5" ><br>
 <br>
 Date Expire:<input type= "date" name= "date_e5" ><br>
  
  <br>
  <fieldset>
    <legend>Feline Immunodeficiency Virus(FIV)?</legend>
<input type= "radio" name= "FIV" value= "yes"> Yes<br>
<input type="radio" name="FIV" value="no"> No<br>
  </fieldset>
  <br>
   Date Recieved:<input type= "date" name= "date_g6" ><br>
 <br>
 Date Expire:<input type= "date" name= "date_e6" ><br>
  
  <br>
  <fieldset>
    <legend>Is your cat Neutered?</legend>
<input type= "radio" name= "Neutered" value= "yes"> Yes<br>
<input type="radio" name="Neutered" value="no"> No<br>
  </fieldset>
  
<br>
    
<button type = "submit">Submit</button>
</form>

  </div>
  


</body>
</html>
