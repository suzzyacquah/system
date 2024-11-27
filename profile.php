<?php include('inc/header.php');?>
<?php include('inc/menu.php');?>
<?php include("config.php");
$sql = "SELECT  * FROM `tbl_users`";
  $result=mysqli_query($conn,$sql);


  ?>


<div class="content-body">
<div class="container-fluid">
	
	
	<div class="row page-titles">
		<ol class="breadcrumb">
			<!-- <li class="breadcrumb-item active"><a href="javascript:void(0)">App</a></li> -->
			<li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
		</ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                    <div class="photo-content">
                        <div class="cover-photo rounded"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <!-- <li class="nav-item"><a href="#my-posts" data-bs-toggle="tab" class="nav-link active show">Personal Info</a>
                                </li> -->
                                <li class="nav-item"><a href="#about-me" data-bs-toggle="tab" class="nav-link">Personal Info</a>
                                </li>
                                <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link">Change Password</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                    <!-- <div class="my-post-content pt-3">
                                    	<div class="rows">
                                    
                                </div>
                                </div> -->
                                <div id="about-me" class="tab-pane fade">
                                   
                                    <div class="profile-personal-info">
                                        <h4 class="text-primary mb-4">Personal Information</h4>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Name <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <?php echo $_SESSION['DATA']['first_name'] ?>
                                            <?php echo $_SESSION['DATA']['last_name'] ?>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Phone Number <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <?php echo $_SESSION['DATA']['phone_number'] ?>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Role <span class="pull-end">:</span></h5>
                                            </div>
                                            <?php if ($_SESSION['DATA']['role'] == 1) {
                                            	echo 'Admin';
                                            } else {
                                            	echo 'Caretaker';
                                            }

                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="profile-settings" class="tab-pane fade">
                                    <div class="pt-3">
                                        <div class="settings-form">
                                            <h4 class="text-primary">Change Password</h4>
                                            <form action="profile_page.php" method="POST">
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Number</label>
                                                        <input type="test" placeholder="023455678" class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Old Password</label>
                                                        <input type="password" placeholder="Password" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
													<div class="mb-3 col-md-6">
                                                        <label class="form-label">Current Password</label>
                                                        <input type="password" placeholder="Password" class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Repeat Current Password</label>
                                                        <input type="password" placeholder="Password" class="form-control">
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary" type="submit">Submit
                                                    </button>
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
