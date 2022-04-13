<?php
session_start();
session_destroy();

// if(isset($_COOKIE['roll']) && isset($_COOKIE['password'])){
//         $Roll = $_COOKIE['roll'];
//         $pass = $_COOKIE['password'];
//         setcookie('roll', $Roll, time()-1);   
//         setcookie('password', $password, time()-1);
//    }  


header('location: login.php');

?>