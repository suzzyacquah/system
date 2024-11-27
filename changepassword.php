    <?php include("config.php");
$sql = "SELECT  * FROM `tbl_users`";
  $result=mysqli_query($conn,$sql);


  ?>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="images/logo-full.png" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Change Password</h4>
                                    <form action="changeprocess.php" method = "POST">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Number</strong></label>
                                            <input type="text"name="edit_number"  id= "edit_number" class="form-control" placeholder="02345678">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Old Password</strong></label>
                                            <input type="password" class="form-control" value="Password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>New Password</strong></label>
                                            <input type="password" name="edit_password"  id= "password" class="form-control" value="Password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Comfirm Password</strong></label>
                                            <input type="password" name="edit_cpassword"  id= "cpassword" class="form-control" value="Password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<?php include('inc/footer.php');?>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
	<script src="js/styleSwitcher.js"></script>
</body>
</html>