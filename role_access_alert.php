
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
                    <div class="col-md-3"></div>
                    <div class="col-md-5 reg ">
                    <div class="text-center text-light mt-2 text-align-middle accrole1 ">
                        <h3 class="accrole2" >ONLY Admin is allowed for Role Management Page!. <p> <a href="role_managementaccess.php">Login for Role Management Page</a></p></h3><br/><br/>
                       
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