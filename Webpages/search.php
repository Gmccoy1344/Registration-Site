<?php
session_start();

if(!isset($_SESSION['admin'])){
    echo "Not admin <a href='personal.php'> here </a>";
    exit;
}
else{
    
}
?>
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
<form action= "results.php">
<fieldset>
<legend>Owner Information:</legend>
<br>
Owner's Name: <input type="text" name="nameinput"><br>
<br>

Pet's Name: <input type="text" name="petinput"><br>
<br>


</fieldset>
<button type = "submit">Submit</button>
</form>
</div>


  
  


</body>
</html>