<?php include('inc/header.php');?>
<?php include('inc/menu.php');?>
<?php include("config.php");
$sql = "SELECT  * FROM `tbl_tenants_original`";
$result=mysqli_query($conn,$sql);


?>

<?php 
while ($r = mysqli_fetch_assoc($result)) {?>
	<tr>
<td><img class="rounded-circle" width="35" src="image/<?php echo $r['image'] ?>"></td>
<td><?php echo $r['Name']; ?></td>
<td><?php echo $r['Status']; ?></td>
<td><?php echo $r['Email']; ?></td>
<td><?php echo $r['Phone_Number']; ?></td>
<!-- <td><a href="javascript:void(0);"><strong><?php echo $r['Phone_Number']; ?></strong></a></td> -->
<!-- <td><a href="javascript:void(0);"><strong><?php echo $r['Email']; ?></strong></a></td> -->
<td><?php echo $r['Year_in']; ?></td>
<td>
<div class="d-flex">
<a href="i.php" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-check"></i></a>
</div>												
</td>												
</tr>



<?php } ?>

	<section>
<div class="modal fade" id="exampleModalCenter">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<form action="create.php" method = "POST" enctype="multipart/form-data">
<div class="modal-header">
<h5 class="modal-title">Modal title</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal">
</button>
</div>
<div class="modal-body">

<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="control-label">FullName</label>
<input type="text" name="fullname" id="fullname" class="form-control rounded-0" required>
</div>
<div class="form-group">
<label for="status" class="control-label">Status</label>
<select name="status" id="status" class="form-control rounded-0" required>
<option value="Married">Married</option>
<option value="Single">Single</option>
</select>
</div>
<div class ="form-group">
<label class="control-label">Email</label>
<input type="email" name="email" id="email" class="form-control rounded-0"  required>
</div>
<div class="form-group">
<label class="control-label">Contact</label>
<input type="text" name="contact" id="contact" class="form-control rounded-0"  required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Room Number</label>
<input type="number" name="number" id="number" class="form-control rounded-0" min='0'>
</div>
<div class="form-group">
<label  class="control-label">Emergency Name</label>
<input type="text" name="name" id="name" class="form-control rounded-0"  required>
</div>
<div class="form-group">
<label  class="control-label">Emergency Contact</label>
<input type="text" name="number_form" id="number_form" class="form-control rounded-0" required>
</div>
<div class="form-group">
<label for="dob" class="control-label">year in</label>
<input type="date" name="dob" id="dob" class="form-control rounded-0" required>
</div>

<div class="card-body">
<div class="basic-form custom_file_input">

<div class="input-group mb-3">
<span class="input-group-text">Upload</span>
<div class="form-file">
<input type="file" name ="image" class="form-file-input form-control">
</div>
</div>


</div>
</div>

</div>


</div>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
</div>
</div>
</div>
</section>


<?php include('inc/footer.php');?>