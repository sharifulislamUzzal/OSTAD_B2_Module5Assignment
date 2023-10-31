<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST["new_role"];
    

    // Saving process of user data to a file s
    $roleData = " $role\n";
    file_put_contents("role_create.txt", $roleData, FILE_APPEND);

    $_SESSION["username"] = $username; // Set the session
    header("Location: role_create_confirm.php");
} else {
    echo "Invalid request!";
}

