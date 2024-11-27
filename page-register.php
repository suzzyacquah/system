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
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="signup_page.php" method = "POST">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>First name</strong></label>
                                            <input type="text" name="fname"  id= "fname"class="form-control" placeholder="fname">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Last name</strong></label>
                                            <input type="text" name="lname"  id= "lname" class="form-control" placeholder="lname">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Number</strong></label>
                                            <input type="text"name="number"  id= "number" class="form-control" placeholder="02345678">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password"  id= "password" class="form-control" value="Password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Comfirm Password</strong></label>
                                            <input type="password" name="cpassword"  id= "cpassword" class="form-control" value="Password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="index.php">Sign in</a></p>
                                    </div>
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