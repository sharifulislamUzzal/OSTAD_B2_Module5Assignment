<?php
session_start();

$email = $_POST['email']??'';
$password = $_POST['password'] ??'';

$errorMessage = '';

if(!isset($_SESSION['username'])){
    header('Location: login.php');
}

if ($email == 'admin@gmail.com' && $password == '123') {
    $_SESSION['username'] = 'admin';
    header('Location: role_management.php');
}else{
    header('Location: role_access_alert.php');
   // echo 'You have no access permission, ONLY Admin have Access ! ';
}
