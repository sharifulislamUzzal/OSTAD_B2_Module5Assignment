<?php
session_start();

$email = $_POST['email']??'';
$password = $_POST['password'] ??'';

$errorMessage = '';


if ($email == 'admin@gmail.com' && $password == '123') {
    $_SESSION['username'] = 'admin';
    header('Location: role_management.php');
} else if ($email == 'manager@gmail.com' && $password == '123') {
    $_SESSION['username'] = 'manager';
    header('Location: dashboard_manager.php');
} else if ($email == 'user@gmail.com' && $password == '123') {
    $_SESSION['username'] = 'user';
    header('Location: dashboard_user.php');
} else if ($email != '' || $password != '') {
    $errorMessage = 'eamil or password is blank !';
}else if ($email != 'admin@gmail.com' ||$email != 'manager@gmail.com'||$email != 'user@gmail.com') {
    echo 'email does not matchs';
    header('Location: login.php');
}else{
    echo 'Invalid email or password ';
}
