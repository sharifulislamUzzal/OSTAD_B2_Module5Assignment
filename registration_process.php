<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    // Saving process of user data to a file s
    $userData = "$username,$email,$password\n";
    file_put_contents("users.txt", $userData, FILE_APPEND);

    $_SESSION["username"] = $username; // Set the session
    header("Location: registration_alert.php");
} else {
    echo "Invalid request!";
}

