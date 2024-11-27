<?php include('inc/header.php');?>
<?php include('inc/menu.php');?>
<?php include("config.php");
$sql = "SELECT  * FROM `tbl_tenants`";
$result=mysqli_query($conn,$sql);
$mysql = "SELECT  * FROM `tbl_rooms`";
$result2=mysqli_query($conn,$mysql);
$mysql = "SELECT  * FROM `tbl_period`";
$result23=mysqli_query($conn,$mysql);
$mysql = "SELECT  * FROM `tbl_payments`";
$result24=mysqli_query($conn,$mysql);

?>
<div class="content-body">
        
				
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 order-lg-2 mb-4">
                                       
                                    </div>
                                    <div class="col-lg-8 order-lg-1">
                                        <h4 class="mb-3">payment Method </h4>
                                        <form class="needs-validation" novalidate="" method="POST" action="paymentsprocess.php">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                
                                                    <label class="control-label">Full Name</label>
                                                    <select name="fullname" id="fullname" class="form-control rounded-0">
                                                    <option value="">Select Tanent Name</option>
                                                    <?php 
                                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                                    <option value="<?php echo $row['id'] ?>"><?php echo $row['firstname']." ".$row['lastname'] ?></option>
                                                    <?php } ?>
                                                    </select>
                                             
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="control-label">Room ID</label>
                                                    <select name="room_name" id="room_name" class="form-control rounded-0">
                                                    <option value="">Select Room</option>
                                                    <?php 
                                                    while ($row = mysqli_fetch_assoc($result2)) { ?>
                                                    <option value="<?php echo $row['price'] ?>"><?php echo $row['room_name'] ?></option>
                                                    <?php } ?>
                                                    </select>
                                             </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                
                                                    <label class="control-label">Period</label>
                                                    <select name="period" id="period" class="form-control rounded-0">
                                                    <option value="">Select period</option>
                                                    <?php 
                                                    while ($row = mysqli_fetch_assoc($result23)) { ?>
                                                    <option value="<?php echo $row['months'] ?>"><?php echo $row['period_description'] ?></option>
                                                    <?php } ?>
                                                    </select>
                                             
                                                </div>
                                                
                                            </div>
                                                <h4 class="mb-3">Payment</h4>

                                            <div class="d-block my-3">
                                                <div class="form-check custom-radio mb-2">
                                                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                                                    <label class="form-check-label" for="debit">Cash</label>
                                                </div>
                                                <div class="form-check custom-radio mb-2">
                                                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                                                    <label class="form-check-label" for="paypal">Check</label>
                                                </div>
                                                <div class="form-check custom-radio mb-2">
                                                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                                                    <label class="form-check-label" for="paypal">Momo</label>
                                                </div>
                                            </div>
                                            <hr class="mb-4">
                                            <button class="btn btn-primary btn-lg btn-block" type="submit">paid</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</div>
<?php include('inc/footer.php');?>