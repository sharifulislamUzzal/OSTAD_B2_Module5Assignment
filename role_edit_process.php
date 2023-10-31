<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dataToEdit = $_POST["dataToEdit"];
    $newData = $_POST["newData"];
    
    $file = "role_create.txt";
    $lines = file($file);

    $fileHandle = fopen($file, 'w');
    foreach ($lines as $line) {
        if (trim($line) == $dataToEdit) {
            fwrite($fileHandle, $newData . "\n");
        } else {
            fwrite($fileHandle, $line);
        }
    }

    fclose($fileHandle);
    header('Location: role_edited_confirm.php');
}
