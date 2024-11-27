<?php include('inc/header.php');?>
<?php include('inc/menu.php');?>
<?php include("config.php");
$sql = "SELECT  * FROM `tbl_tenants_original`";
  $result=mysqli_query($conn,$sql);


  ?>
<div class="content-body">
			<div class="container-fluid">
				
				<div class="d-flex justify-content-between align-items-center flex-wrap">
				<p><h1>Tenants Lists</h1></p>
					<div class="input-group contacts-search mb-4">
						<input type="text" class="form-control" placeholder="Search here...">
						<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
					</div>
					<div class="mb-4">
					    <button type="button" class="btn btn-primary btn-rounded fs-18" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">+ New Tenants List</button>
					</div>
					<!-- <div class="mb-4">
						<a href=" addname.php;" class="btn btn-primary btn-rounded fs-18">+ New Tenants List</a>
					</div> -->
				</div>	


	<div class="row">
	<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tenants List</h4>
                            </div>
	
	
	<div class="container-fluid">
				
				
                </div>
								<div class="card-body">
                            

                                <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="1234 Main St">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label>City</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">State</label>
                                                <select id="inputState" class="default-select form-control wide">
                                                    <option selected="">Choose...</option>
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label class="form-label">Zip</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
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
  </div>
</div>

<?php include('inc/footer.php');?>