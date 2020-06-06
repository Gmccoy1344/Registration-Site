<?php

session_start();
require_once "db_connection.php";

$user = 'root';
$password = 'root';
$db = 'petlog';
$host = 'localhost';
$port = 3309;

$conn = new mysqli($host, $user, $password, $db, $port);
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

if($conn){
    
    $email = mysqli_escape_string($conn,$_POST['uname']);
    $password = mysqli_escape_string($conn,$_POST['psw']);
    
    $sql_statement = "SELECT * FROM `login` WHERE `email` LIKE '%" .$email. "%'";
    $result = mysqli_query($conn, $sql_statement);
    
    $sql_ad = "SELECT * FROM `login`WHERE `email`='".$email."' AND `authority`= 'admin'";
    $results = mysqli_query($conn, $sql_ad);
    
    
    
    if($result){
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            
            if(password_verify($password, $row['password'])){
            $_SESSION['uname'] = $row['email'];
            echo"success";
            
            header('Location: check.php');
            }else{
                echo "Password is incorrect";
            }
        }
        else{
            echo "Login unsuccessful<br>";
            //header('Location: login.php');
            exit;
        }
    }
    else{
        echo "Error" . mysqli_error($conn);
    }
    
    if($results){
        if(mysqli_num_rows($results) === 1){
            $row = mysqli_fetch_assoc($results);
            $_SESSION['admin'] = $row['authority'];
            echo $_SESSION['admin'];
        }
    }else{
        echo"Not admin";
    }
    
}else{
    echo "Error connecting" . mysqli_connect_error();
}


?>