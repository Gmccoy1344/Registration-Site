<?php
session_start();

$animal = $_GET['animal'];


        if($animal == 1){
            header('Location: search2.php');
        }
        else{
            header('Location: search.php');
        }
        

?>
