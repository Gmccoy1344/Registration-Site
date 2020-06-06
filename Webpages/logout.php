<?php
session_start();
$_SESSION = array();

session_destroy();
echo "You have been logged out";
echo "Please login first <a href='login.php'> here </a>";
header('Location: login.php');