
<?php
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
                    <div class="col-md-4"></div>
                    <div class="col-md-4 reg ">
                        <div class="h3 text-center text-light mt-5">Registration Form</div>
                        <form method="post" id="registrationForm" action="registration_process.php">
                                <div class="row">
                                    <div class="col-md-3 text-light"><label for="username">Username:</label></div>
                                    <div class="col-md-9">  
                                        <input type="text" class="form-control" id="username" name="username" placeholder="admin" required><br/>
                                    </div> 
                                    <div class="col-md-3 text-light"><label for="email">Email:</label></div>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" id="email" name="email" required><br/>
                                    </div>
                                    <div class="col-md-3 text-light"><label for="password">Password:</label></div>
                                    <div class="col-md-3"> <input type="password" class="form-control"       id="password" name="password" required>
                                    </div>
                            </div>
                            
                            <div class="nevigate text-center mt-3 text-light">
                                    <button type="submit" class="btn-primary" >Register</button>
                                    <button type="button" class="btn-light"><a href="login.php">Login!</a></button>
                                    <a href="index.php">Home!</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include 'app_manage/footer.php';
?>