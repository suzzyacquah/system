<?php include('inc/header.php');?>
<?php include('inc/menu.php');?>
<?php include("config.php");
$sql = "SELECT  * FROM `tbl_users`";
$result=mysqli_query($conn,$sql);


?>
<div class="content-body">
<div class="container-fluid">
<div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.php"><img src="images/logo-full.png" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Forgot Password</h4>
                                    <form action="index.php">
                                        <div class="mb-3">
                                            <label><strong>Number</strong></label>
                                            <input type="text" class="form-control" value="023456678">
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" name="SUBMIT" class="btn btn-primary btn-block">
                            
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


</div>
</div>

<?php include('inc/footer.php');?>