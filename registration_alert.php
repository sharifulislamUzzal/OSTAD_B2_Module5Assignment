
<?php
session_start();
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
            <h1 class="" >Registration successfully Completed!<br/> <a href="registration.php"><h4>Back to Registration</h4> </a>
            </h1> <br/>
            <h5 class="text-center">Registered Users List: </h5>
            <p>Sequences as : User Name > User Email > Password</p>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-11">
            <div class="userlist text-right" style="text-align: left;" >
            <?php
                $text = file_get_contents("./users.txt");
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
 