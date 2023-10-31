
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();
    $email="admin@gmail.com";
    $StringData = $data;
    $PHPAsocArray = json_decode($StringData, true);  


    $inputUsername =$PHPAsocArray['username'];
    $inputPassword =$PHPAsocArray['password'];  

    foreach ($users as $user) {
        if ($user['username'] == $email) { 

            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
          //  $_SESSION['role'] = $user['role'];

            echo "Logged in successfully!";
            exit; 
        }
    }

    echo "Invalid username or password.";
}


include 'app_manage/header.php';
?>
<body>
    <div class="container-fluid shadow indexreg text-center ">
        <h3 class="mt-5" >User Authentication and Role Management System</h3>
    </div>
<div class="container-fluid">
    <div class="row">
        <?php
            include 'app_manage/menu.php';
        ?>
        <div class="col-md-10 text-center bodyarea relative">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-md-2"></div>
                    <div class="col-md-6 roleman ">
                        <h2 style="color:yellow" >Role Management Page!</h2>
                        <hr>
                        <form method="post" action="role_create_process.php">
                            <div class="row">
                                <div class="col-md-10 text-center">
                                    Create New Role <input type="text"  name="new_role" required>
                                    <input type="submit" class="btn-info" value="Create">
                                </div>
                                <div class="col-md-2"></div>
                            </div> 
                        </form>
                        <hr>
                        <form method="post" action="role_edit_process.php">
                       
                        Old Role :<select id="listField" style="width:100px" name="dataToEdit" id="dataToEdit">
                                <?php echo getFileData(); ?>
                            </select>
                        New Role :<input type="text" tyle="width:100px" name="newData" id="newData">

                            <input type="submit" class="btn-success" value="Edit">
                        </form>
                       
                        <?php
                            function getFileData() {
                                $textFilePath = 'role_create.txt';
                            
                                if (file_exists($textFilePath) && is_readable($textFilePath)) {
                                    $lines = file($textFilePath);
                            
                                    $optionsHtml = '';
                            
                                    foreach ($lines as $line) {
         
                                        $line = trim($line);
                                        $escapedData = htmlspecialchars($line, ENT_QUOTES, 'UTF-8');
                            
                                        $optionsHtml .= "<option value=\"$escapedData\">$escapedData</option>";
                                    }
                            
                                    return $optionsHtml;
                                } 
                            }
                        ?>


                        <hr>
                        <form method="post" action="role_delete_process.php">
                            
                        Choose Role :<select id="listField"  name="delete_role" id="dataToDelete">
                                <?php echo getFileData(); ?>
                            </select>
                            <input type="submit" class="btn-danger" value="Delete"><br/>
                            <?php 

                        ?>
                        </form>
                        
                        <div class="nev mt-3 mb-2 bg-light">
                            <a href="registration.php">New User!</a>
                            <a href="index.php">Home!</a>
                            <button class="btn-dark"><a href="login.php">Logout</a></button>
                        </div>
                      
                    </div>
                    <div class="col-md-4 bg-info shadow text-start">
                        <h4>Created Roles list :</h4>
                    <?php
                    $text = file_get_contents("./role_create.txt");
                    $lines = explode("\n", $text);

                     $serialNumber = 1;

                    $serialText = "";
                    foreach ($lines as $line) {
                        $serialText .=  $line . "<br>";
                        $serialNumber++;
                    }

                    // Convert newline characters to HTML line breaks
                    $convertedText = nl2br($serialText);

                    echo $convertedText;
                    ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include 'app_manage/footer.php';

?>