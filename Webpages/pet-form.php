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
<h1>Register Your Dog Here</h1>
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
<form action= "owner-dog.php">
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
<label for="breed">What is your Dog's breed?:</label>
  <select id="breed" name="breed">
                      	<option value="N/A">N/A</option>
                        <option value="Affenpinscher"  >Affenpinscher</option>
                        <option value="Afghan Hound"  >Afghan Hound</option>
                        <option value="Airedale Terrier"  >Airedale Terrier</option>
                        <option value="Akita"  >Akita</option>
                        <option value="Alaskan Malamute"  >Alaskan Malamute</option>
                        <option value="American Bulldog"  >American Bulldog</option>
                        <option value="American English Coonhound"  >American English Coonhound</option>
                        <option value="American Eskimo Dog"  >American Eskimo Dog</option>
                        <option value="American Foxhound"  >American Foxhound</option>
                        <option value="American Hairless Terrie"  >American Hairless Terrier</option>
                        <option value="American Leopard Hound"  >American Leopard Hound</option>
                        <option value="American Staffordshire Terrier"  >American Staffordshire Terrier</option>
                        <option value="American Water Spaniel"  >American Water Spaniel</option>
                        <option value="Anatolian Shepherd Dog"  >Anatolian Shepherd Dog</option>
                        <option value="Appenzeller Sennenhund"  >Appenzeller Sennenhund</option>
                        <option value="Australian Cattle Dog"  >Australian Cattle Dog</option>
                        <option value="Australian Kelpie"  >Australian Kelpie</option>
                        <option value="Australian Shepherd"  >Australian Shepherd</option>
                        <option value="Australian Stumpy Tail Cattle Dog"  >Australian Stumpy Tail Cattle Dog</option>
                        <option value="Australian Terrier"  >Australian Terrier</option>
                        <option value="Azawakh"  >Azawakh</option>
                        <option value="Barbet"  >Barbet</option>
                        <option value="Basenji"  >Basenji</option>
                        <option value="Basset Fauve de Bretagne"  >Basset Fauve de Bretagne</option>
                        <option value="Basset Hound"  >Basset Hound</option>
                        <option value="Bavarian Mountain Scent Hound"  >Bavarian Mountain Scent Hound</option>
                        <option value="Beagle"  >Beagle</option>
                        <option value="Bearded Collie"  >Bearded Collie</option>
                        <option value="Beauceron"  >Beauceron</option>
                        <option value="Bedlington Terrier"  >Bedlington Terrier</option>
                        <option value="Belgian Laekenois"  >Belgian Laekenois</option>
                        <option value="Belgian Malinois"  >Belgian Malinois</option>
                        <option value="Belgian Sheepdog"  >Belgian Sheepdog</option>
                        <option value="Belgian Tervuren"  >Belgian Tervuren</option>
                        <option value="Bergamasco Sheepdog"  >Bergamasco Sheepdog</option>
                        <option value="Berger Picard"  >Berger Picard</option>
                        <option value="Bernese Mountain Dog"  >Bernese Mountain Dog</option>
                        <option value="Bichon Frise"  >Bichon Frise</option>
                        <option value="Biewer Terrier"  >Biewer Terrier</option>
                        <option value="Black and Tan Coonhound"  >Black and Tan Coonhound</option>
                        <option value="Black Russian Terrier"  >Black Russian Terrier</option>
                        <option value="Bloodhound"  >Bloodhound</option>
                        <option value="Bluetick Coonhound"  >Bluetick Coonhound</option>
                        <option value="Boerboel"  >Boerboel</option>
                        <option value="Bohemian Shepherd"  >Bohemian Shepherd</option>
                        <option value="Bolognese"  >Bolognese</option>
                        <option value="Border Collie"  >Border Collie</option>
                        <option value="Border Terrier"  >Border Terrier</option>
                        <option value="Borzoi"  >Borzoi</option>
                        <option value="Boston Terrier"  >Boston Terrier</option>
                        <option value="Bouvier des Flandres"  >Bouvier des Flandres</option>
                        <option value="Boxer"  >Boxer</option>
                        <option value="Boykin Spaniel"  >Boykin Spaniel</option>
                        <option value="Bracco Italiano"  >Bracco Italiano</option>
                        <option value="Braque du Bourbonnais"  >Braque du Bourbonnais</option>
                        <option value="Braque Francais Pyrenean"  >Braque Francais Pyrenean</option>
                        <option value="Briard"  >Briard</option>
                        <option value="Brittany"  >Brittany</option>
                        <option value="Broholmer"  >Broholmer</option>
                        <option value="Brussels Griffon"  >Brussels Griffon</option>
                        <option value="Bull Terrier"  >Bull Terrier</option>
                        <option value="Bulldog"  >Bulldog</option>
                        <option value="Bullmastiff"  >Bullmastiff</option>
                        <option value="Cairn Terrier"  >Cairn Terrier</option>
                        <option value="Canaan Dog"  >Canaan Dog</option>
                        <option value="Cane Corso"  >Cane Corso</option>
                        <option value="Cardigan Welsh Corgi"  >Cardigan Welsh Corgi</option>
                        <option value="Carolina Dog"  >Carolina Dog</option>
                        <option value="Catahoula Leopard Dog"  >Catahoula Leopard Dog</option>
                        <option value="Caucasian Shepherd Dog"  >Caucasian Shepherd Dog</option>
                        <option value="Cavalier King Charles Spaniel"  >Cavalier King Charles Spaniel</option>
                        <option value="Central Asian Shepherd Dog"  >Central Asian Shepherd Dog</option>
                        <option value="Cesky Terrier"  >Cesky Terrier</option>
                        <option value="Chesapeake Bay Retriever"  >Chesapeake Bay Retriever</option>
                        <option value="Chihuahua"  >Chihuahua</option>
                        <option value="Chinese Crested"  >Chinese Crested</option>
                        <option value="Chinese Shar-Pei"  >Chinese Shar-Pei</option>
                        <option value="Chinook"  >Chinook</option>
                        <option value="Chow Chow"  >Chow Chow</option>
                        <option value="Cirneco dell Etna"  >Cirneco dell Etna</option>
                        <option value="Clumber Spaniel"  >Clumber Spaniel</option>
                        <option value="Cocker Spaniel"  >Cocker Spaniel</option>
                        <option value="Collie"  >Collie</option>
                        <option value="Coton de Tulear"  >Coton de Tulear</option>
                        <option value="Croatian Sheepdog"  >Croatian Sheepdog</option>
                        <option value="Curly-Coated Retriever"  >Curly-Coated Retriever</option>
                        <option value="Czechoslovakian Vlcak"  >Czechoslovakian Vlcak</option>
                        <option value="Dachshund"  >Dachshund</option>
                        <option value="Dalmatian"  >Dalmatian</option>
                        <option value="Dandie Dinmont Terrier"  >Dandie Dinmont Terrier</option>
                        <option value="Danish-Swedish Farmdog"  >Danish-Swedish Farmdog</option>
                        <option value="Deutscher Wachtelhund"  >Deutscher Wachtelhund</option>
                        <option value="Doberman Pinscher"  >Doberman Pinscher</option>
                        <option value="Dogo Argentino"  >Dogo Argentino</option>
                        <option value="Dogue de Bordeaux"  >Dogue de Bordeaux</option>
                        <option value="Drentsche Patrijshond"  >Drentsche Patrijshond</option>
                        <option value="Drever"  >Drever</option>
                        <option value="Dutch Shepherd"  >Dutch Shepherd</option>
                        <option value="English Cocker Spaniel"  >English Cocker Spaniel</option>
                        <option value="English Foxhound"  >English Foxhound</option>
                        <option value="English Setter"  >English Setter</option>
                        <option value="English Springer Spaniel"  >English Springer Spaniel</option>
                        <option value="English Toy Spaniel"  >English Toy Spaniel</option>
                        <option value="Entlebucher Mountain Dog"  >Entlebucher Mountain Dog</option>
                        <option value="Estrela Mountain Dog"  >Estrela Mountain Dog</option>
                        <option value="Eurasier"  >Eurasier</option>
                        <option value="Field Spaniel"  >Field Spaniel</option>
                        <option value="Finnish Lapphund"  >Finnish Lapphund</option>
                        <option value="Finnish Spitz"  >Finnish Spitz</option>
                        <option value="Flat-Coated Retriever"  >Flat-Coated Retriever</option>
                        <option value="French Bulldog"  >French Bulldog</option>
                        <option value="French Spaniel"  >French Spaniel</option>
                        <option value="German Longhaired Pointer"  >German Longhaired Pointer</option>
                        <option value="German Pinscher"  >German Pinscher</option>
                        <option value="German Shepherd Dog"  >German Shepherd Dog</option>
                        <option value="German Shorthaired Pointer"  >German Shorthaired Pointer</option>
                        <option value="German Spitz"  >German Spitz</option>
                        <option value="German Wirehaired Pointer"  >German Wirehaired Pointer</option>
                        <option value="Giant Schnauzer"  >Giant Schnauzer</option>
                        <option value="Glen of Imaal Terrier"  >Glen of Imaal Terrier</option>
                        <option value="Golden Retriever"  >Golden Retriever</option>
                        <option value="Gordon Setter"  >Gordon Setter</option>
                        <option value="Grand Basset Griffon Vendeen"  >Grand Basset Griffon Vendeen</option>
                        <option value="Great Dane"  >Great Dane</option>
                        <option value="Great Pyrenees"  >Great Pyrenees</option>
                        <option value="Greater Swiss Mountain Dog"  >Greater Swiss Mountain Dog</option>
                        <option value="Greyhound"  >Greyhound</option>
                        <option value="Hamiltonstovare"  >Hamiltonstovare</option>
                        <option value="Hanoverian Scenthound"  >Hanoverian Scenthound</option>
                        <option value="Harrier"  >Harrier</option>
                        <option value="Havanese"  >Havanese</option>
                        <option value="Hokkaido"  >Hokkaido</option>
                        <option value="Hovawart"  >Hovawart</option>
                        <option value="Ibizan Hound"  >Ibizan Hound</option>
                        <option value="Icelandic Sheepdog"  >Icelandic Sheepdog</option>
                        <option value="Irish Red and White Setter"  >Irish Red and White Setter</option>
                        <option value="Irish Setter"  >Irish Setter</option>
                        <option value="Irish Terrier"  >Irish Terrier</option>
                        <option value="Irish Water Spaniel"  >Irish Water Spaniel</option>
                        <option value="Irish Wolfhound"  >Irish Wolfhound</option>
                        <option value="Italian Greyhound"  >Italian Greyhound</option>
                        <option value="Jagdterrier"  >Jagdterrier</option>
                        <option value="Japanese Chin"  >Japanese Chin</option>
                        <option value="Japanese Spitz"  >Japanese Spitz</option>
                        <option value="Jindo"  >Jindo</option>
                        <option value="Kai Ken"  >Kai Ken</option>
                        <option value="Karelian Bear Dog"  >Karelian Bear Dog</option>
                        <option value="Keeshond"  >Keeshond</option>
                        <option value="Kerry Blue Terrier"  >Kerry Blue Terrier</option>
                        <option value="Kishu Ken"  >Kishu Ken</option>
                        <option value="Komondor"  >Komondor</option>
                        <option value="Kromfohrlander"  >Kromfohrlander</option>
                        <option value="Kuvasz"  >Kuvasz</option>
                        <option value="Labrador Retriever"  >Labrador Retriever</option>
                        <option value="Lagotto Romagnolo"  >Lagotto Romagnolo</option>
                        <option value="Lakeland Terrier"  >Lakeland Terrier</option>
                        <option value="Lancashire Heeler"  >Lancashire Heeler</option>
                        <option value="Lapponian Herder"  >Lapponian Herder</option>
                        <option value="Leonberger"  >Leonberger</option>
                        <option value="Lhasa Apso"  >Lhasa Apso</option>
                        <option value="Lowchen"  >Lowchen</option>
                        <option value="Maltese"  >Maltese</option>
                        <option value="Manchester Terrier (Standard)"  >Manchester Terrier (Standard)</option>
                        <option value="Manchester Terrier (Toy)"  >Manchester Terrier (Toy)</option>
                        <option value="Mastiff"  >Mastiff</option>
                        <option value="Miniature American Shepherd"  >Miniature American Shepherd</option>
                        <option value="Miniature Bull Terrier"  >Miniature Bull Terrier</option>
                        <option value="Miniature-Pinscher"  >Miniature Pinscher</option>
                        <option value="Miniature Schnauzer"  >Miniature Schnauzer</option>
                        <option value="Mountain Cur"  >Mountain Cur</option>
                        <option value="Mudi"  >Mudi</option>
                        <option value="Neapolitan Mastiff"  >Neapolitan Mastiff</option>
                        <option value="Nederlandse Kooikerhondje"  >Nederlandse Kooikerhondje</option>
                        <option value="Newfoundland"  >Newfoundland</option>
                        <option value="Norfolk Terrier"  >Norfolk Terrier</option>
                        <option value="Norrbottenspets"  >Norrbottenspets</option>
                        <option value="Norwegian Buhund"  >Norwegian Buhund</option>
                        <option value="Norwegian Elkhound"  >Norwegian Elkhound</option>
                        <option value="Norwegian Lundehund"  >Norwegian Lundehund</option>
                        <option value="Norwich Terrier"  >Norwich Terrier</option>
                        <option value="Nova Scotia Duck Tolling Retriever"  >Nova Scotia Duck Tolling Retriever</option>
                        <option value="Old English Sheepdog"  >Old English Sheepdog</option>
                        <option value="Otterhound"  >Otterhound</option>
                        <option value="Papillon"  >Papillon</option>
                        <option value="Parson Russell Terrier"  >Parson Russell Terrier</option>
                        <option value="Pekingese"  >Pekingese</option>
                        <option value="Pembroke Welsh Corgi"  >Pembroke Welsh Corgi</option>
                        <option value="Perro de Presa Canario"  >Perro de Presa Canario</option>
                        <option value="Peruvian Inca Orchid"  >Peruvian Inca Orchid</option>
                        <option value="Petit Basset Griffon Vendeen"  >Petit Basset Griffon Vendeen</option>
                        <option value="Pharaoh Hound"  >Pharaoh Hound</option>
                        <option value="Plott Hound"  >Plott Hound</option>
                        <option value="Pointer"  >Pointer</option>
                        <option value="Polish Lowland Sheepdog"  >Polish Lowland Sheepdog</option>
                        <option value="Pomeranian"  >Pomeranian</option>
                        <option value="Poodle (Miniature)"  >Poodle (Miniature)</option>
                        <option value="Poodle (Standard)"  >Poodle (Standard)</option>
                        <option value="Poodle (Toy)"  >Poodle (Toy)</option>
                        <option value="Porcelaine"  >Porcelaine</option>
                        <option value="Portuguese Podengo"  >Portuguese Podengo</option>
                        <option value="Portuguese Podengo Pequeno"  >Portuguese Podengo Pequeno</option>
                        <option value="Portuguese Pointer"  >Portuguese Pointer</option>
                        <option value="Portuguese Sheepdog"  >Portuguese Sheepdog</option>
                        <option value="Portuguese Water Dog"  >Portuguese Water Dog</option>
                        <option value="Pudelpointer"  >Pudelpointer</option>
                        <option value="Pug"  >Pug</option>
                        <option value="Puli"  >Puli</option>
                        <option value="Pumi"  >Pumi</option>
                        <option value="Pyrenean Mastiff"  >Pyrenean Mastiff</option>
                        <option value="Pyrenean Shepherd"  >Pyrenean Shepherd</option>
                        <option value="Rafeiro do Alentejo"  >Rafeiro do Alentejo</option>
                        <option value="Rat Terrier"  >Rat Terrier</option>
                        <option value="Redbone Coonhound"  >Redbone Coonhound</option>
                        <option value="Rhodesian Ridgeback"  >Rhodesian Ridgeback</option>
                        <option value="Romanian Mioritic Shepherd Dog"  >Romanian Mioritic Shepherd Dog</option>
                        <option value="Rottweiler"  >Rottweiler</option>
                        <option value="Russell Terrier"  >Russell Terrier</option>
                        <option value="Russian Toy"  >Russian Toy</option>
                        <option value="Russian Tsvetnaya Bolonka"  >Russian Tsvetnaya Bolonka</option>
                        <option value="Saint Bernard"  >Saint Bernard</option>
                        <option value="Saluki"  >Saluki</option>
                        <option value="Samoyed"  >Samoyed</option>
                        <option value="Schapendoes"  >Schapendoes</option>
                        <option value="Schipperke"  >Schipperke</option>
                        <option value="Scottish Deerhound"  >Scottish Deerhound</option>
                        <option value="Scottish Terrier"  >Scottish Terrier</option>
                        <option value="Sealyham Terrier"  >Sealyham Terrier</option>
                        <option value="Segugio Italiano"  >Segugio Italiano</option>
                        <option value="Shetland Sheepdog"  >Shetland Sheepdog</option>
                        <option value="Shiba Inu"  >Shiba Inu</option>
                        <option value="Shih Tzu"  >Shih Tzu</option>
                        <option value="Shikoku"  >Shikoku</option>
                        <option value="Siberian Husky"  >Siberian Husky</option>
                        <option value="Silky Terrier"  >Silky Terrier</option>
                        <option value="Skye Terrier"  >Skye Terrier</option>
                        <option value="Sloughi"  >Sloughi</option>
                        <option value="Slovakian Wirehaired Pointer"  >Slovakian Wirehaired Pointer</option>
                        <option value="Slovensky Cuvac"  >Slovensky Cuvac</option>
                        <option value="Slovensky Kopov"  >Slovensky Kopov</option>
                        <option value="Small Munsterlander Pointer"  >Small Munsterlander Pointer</option>
                        <option value="Smooth Fox Terrier"  >Smooth Fox Terrier</option>
                        <option value="Soft Coated Wheaten Terrier"  >Soft Coated Wheaten Terrier</option>
                        <option value="Spanish Mastiff"  >Spanish Mastiff</option>
                        <option value="Spanish Water Dog"  >Spanish Water Dog</option>
                        <option value="Spinone Italiano"  >Spinone Italiano</option>
                        <option value="Stabyhoun"  >Stabyhoun</option>
                        <option value="Staffordshire Bull Terrier"  >Staffordshire Bull Terrier</option>
                        <option value="Standard Schnauzer"  >Standard Schnauzer</option>
                        <option value="Sussex Spaniel"  >Sussex Spaniel</option>
                        <option value="Swedish Lapphund"  >Swedish Lapphund</option>
                        <option value="Swedish Vallhund"  >Swedish Vallhund</option>
                        <option value="Taiwan Dog"  >Taiwan Dog</option>
                        <option value="Teddy Roosevelt Terrier"  >Teddy Roosevelt Terrier</option>
                        <option value="Thai Ridgeback"  >Thai Ridgeback</option>
                        <option value="Tibetan Mastiff"  >Tibetan Mastiff</option>
                        <option value="Tibetan Spaniel"  >Tibetan Spaniel</option>
                        <option value="Tibetan Terrier"  >Tibetan Terrier</option>
                        <option value="Tornjak"  >Tornjak</option>
                        <option value="Tosa"  >Tosa</option>
                        <option value="Toy Fox Terrier"  >Toy Fox Terrier</option>
                        <option value="Transylvanian Hound"  >Transylvanian Hound</option>
                        <option value="Treeing Tennessee Brindle"  >Treeing Tennessee Brindle</option>
                        <option value="Treeing Walker Coonhound"  >Treeing Walker Coonhound</option>
                        <option value="Vizsla"  >Vizsla</option>
                        <option value="Weimaraner"  >Weimaraner</option>
                        <option value="Welsh Springer Spaniel"  >Welsh Springer Spaniel</option>
                        <option value="Welsh Terrier"  >Welsh Terrier</option>
                        <option value="West Highland White Terrier"  >West Highland White Terrier</option>
                        <option value="Wetterhoun"  >Wetterhoun</option>
                        <option value="Whippet"  >Whippet</option>
                        <option value="Wire Fox Terrier"  >Wire Fox Terrier</option>
                        <option value="Wirehaired Pointing Griffon"  >Wirehaired Pointing Griffon</option>
                        <option value="Wirehaired Vizsla"  >Wirehaired Vizsla</option>
                        <option value="Working Kelpie"  >Working Kelpie</option>
                        <option value="Xoloitzcuintli"  >Xoloitzcuintli</option>
                        <option value="Yakutian Laika"  >Yakutian Laika</option>
                        <option value="Yorkshire Terrier"  >Yorkshire Terrier</option>
  </select>

<br>

  </fieldset>
Color <input type= "text" name= "colorinput"><br>
<br>


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
    <legend>Distemper/Parvo(DHPP or DA2PP)?</legend>
<input type= "radio" name= "Parvo" value= "yes"> Yes<br>
<input type="radio" name="Parvo" value="no"> No<br>
  </fieldset>
  <br>
  
    <br>
 Date Recieved:<input type= "date" name= "date_g1" ><br>
 <br>
 Date Expire:<input type= "date" name= "date_e1" ><br>
  
  <fieldset>
    <legend>Bordetella bronchiseptica?</legend>
<input type= "radio" name= "Bordetella" value= "yes"> Yes<br>
<input type="radio" name="Bordetella" value="no"> No<br>
  </fieldset>
  
    <br>
 Date Recieved:<input type= "date" name= "date_g2" ><br>
 <br>
 Date Expire:<input type= "date" name= "date_e2" ><br>
  
 <br>
  <fieldset>
    <legend>Canine Influenza(CIV)?</legend>
<input type= "radio" name= "CIV" value= "yes"> Yes<br>
<input type="radio" name="CIV" value="no"> No<br>
  </fieldset>
  
    <br>
 Date Recieved:<input type= "date" name= "date_g3" ><br>
 <br>
 Date Expire:<input type= "date" name= "date_e3" ><br>
  
 <br>
  <fieldset>
    <legend>Leptospirosis?</legend>
<input type= "radio" name= "Lepto" value= "yes"> Yes<br>
<input type="radio" name="Lepto" value="no"> No<br>
  </fieldset>
  
    <br>
 Date Recieved:<input type= "date" name= "date_g4" ><br>
 <br>
 Date Expire:<input type= "date" name= "date_e4" ><br>
  
   <br>
  <fieldset>
    <legend>Is your dog Neutered or Spayed?</legend>
<input type= "radio" name= "Neutered" value= "yes"> Yes<br>
<input type="radio" name="Neutered" value="no"> No<br>
  </fieldset>
  
<br>
<button type = "submit">Submit</button>
</form>
</div>



</body>
</html>