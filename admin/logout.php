<?php
session_start();
session_destroy();

// if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
//         $Roll = $_COOKIE['username'];
//         $pass = $_COOKIE['password'];
//         setcookie('username', $username, time()-1);   
//         setcookie('password', $password, time()-1);
//    }  


header('location: login.php');

?>