<html>
<head>
<style type="text/css">

body {
    font-family:helvetica;
    
}

/* Bordered form */
form {
  border: 3px solid #f1f1f1;
  background-image:url('https://images.fineartamerica.com/images/artworkimages/mediumlarge/2/summer-landscape-with-grass-field-and-billnoll.jpg');
  background-size: cover;
 
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 15px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: tan;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 80%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 30%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 12px;
  text-align: center;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}
/* The "Sign Up" text */
span.sup {
  float: left;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>

<body>

<form action="login2.php" method="post">


  <div class="imgcontainer">
    <img src="https://live.staticflickr.com/754/21616753858_086bd43ee2_b.jpg" alt="Avatar" class="avatar">
  </div>
  
  <div class= "container">
<h1>Hello! Please login!</h1>
</div>

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="uname" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button><br>
    
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:grey">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"><a href="newpassword1.php">Forgot Password?</a></span>
    <span class="sup"><a href="signup.php">Sign Up?</a></span>
  </div>
</form>

</body>
</head>
</html>


