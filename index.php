
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
        <div class="col-md-10 text-center ">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                    <h1>Module 5 : Assignment</h1>
                    <h4 class="text-start">Project Description</h4>
                    <p class="text-start" >Our Crew Project is a web application that requires user authentication and role management using PHP. The project has multiple user roles such as admin, manager, and user. Each role has different access permissions to various parts of the application. </p>
                    <h4 class="text-start">Requirements</h4> 
                    <p class="text-start">Please create a PHP script that implements user authentication and role management for Our Crew Project. </p> 
                    <h4 class="text-start">Tasks</h4>
                    <p class="text-start">
                    Create a registration form with fields: username, email, and password.<br/><br/>

                    Implement a registration process that validates the form data and saves the new user's details.<br/><br/>

                    Create a login form with fields: email and password.<br/><br/>

                    Implement a login process that authenticates the user's credentials and sets a session.<br/><br/>

                    Create a role management page accessible only by admins.<br/><br/>

                    Implement access control to ensure only admins can access the role management page.<br/><br/>

                    On the role management page, add the functionality to create, edit, and delete user roles.<br/><br/>

                    Implement access control to ensure only admins can perform role management operations.<br/><br/>

                    Update the login process to redirect different roles to different pages upon successful login.</p><br/><br/>
                    <h5 class="text-start">How to work with data : </h5>
                    <p class="text-start" >1. Use  Session storage or Cookies </p>
                    <p class="text-start">2. Use File read,write,delete,append system using php</p>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>
</div>

 

<?php
include 'app_manage/footer.php';
?>