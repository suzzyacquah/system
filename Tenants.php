<?php include('inc/header.php');?>
<?php include('inc/menu.php');?>
<?php include("config.php");
$sql = "SELECT  * FROM `tbl_tenants`";
$result=mysqli_query($conn,$sql);
$mysql = "SELECT  * FROM `tbl_rooms`";
$result2=mysqli_query($conn,$mysql);

?>
<div class="content-body">
<div class="container-fluid">
<div class="d-flex justify-content-between align-items-center flex-wrap">
<p><h1>Tenants Lists</h1></p>
<div class="mb-4">
<button type="button" class="btn btn-primary btn-rounded fs-18" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">+ New Tenants List</button>
</div>
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
<div class="table-responsive">
<table id="example3" class="display">
<thead>
<tr>
<th>FName</th>
<th>Other Name</th>
<th>LName</th>
<th>Email</th>
<th>Contact</th>
<th>Date In</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
while ($r = mysqli_fetch_assoc($result)) {?>
<tr>
<td><?php echo $r['firstname']; ?></td>
<td><?php echo $r['othername']; ?></td>
<td><?php echo $r['lastname']; ?></td>
<td><?php echo $r['email']; ?></td>
<td><?php echo $r['contact']; ?></td>
<td><?php echo $r['date_time']; ?></td>
<td>
<div class="d-flex">
<button type="button" class="btn btn-primary shadow btn-xs sharp me-1" data-id="<?php echo $r['id']; ?>" data-bs-toggle="modal" data-bs-target="#editModalCenter" onclick="tenantsDetails(<?php echo $r['id']; ?>)"><i class="fas fa-pencil-alt"></i></button>
<!-- <button type="button" class="btn btn-danger shadow btn-xs sharp" data-id="<?php echo $r['id']; ?>" data-bs-toggle="modal" data-bs-target="#deleteModalCenter" onclick="confirmDelete(<?php echo $r['id']; ?>)"><i class="fa fa-trash"></i></button> -->
<button type="button" class="btn btn-danger shadow btn-xs sharp" onclick="confirmDelete(<?php echo $r['id']; ?>)"><i class="fa fa-trash"></i></button>
</div>
</td>												
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>




<!---------------modals here----------------------->

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
<label class="control-label">First Name</label>
<input type="text" name="fname" id="fname" class="form-control rounded-0" required>
</div>
<div class="form-group">
<label class="control-label">Other Name</label>
<input type="text" name="oname" id="oname" class="form-control rounded-0" required>
</div>
<div class="form-group">
<label class="control-label">Last Name</label>
<input type="text" name="lname" id="lname" class="form-control rounded-0" required>
</div>
<div class ="form-group">
<label class="control-label">Email</label>
<input type="email" name="email" id="email" class="form-control rounded-0"  required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Contact</label>
<input type="text" name="contact" id="contact" class="form-control rounded-0"  required>
</div>
<div class="form-group">
<label class="control-label">Apartment</label>
<select name="room_name" id="room_name" class="form-control rounded-0" required>
<option value="">Select Room</option>
<?php 
while ($row = mysqli_fetch_assoc($result2)) { ?>
<option value="<?php echo $row['id'] ?>"><?php echo $row['room_name'] ?></option>
<?php } ?>
</select>
</div>
<div class="form-group">
<label for="dob" class="control-label">Date in</label>
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
<button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
</div>
</div>
</div>
</section>



<!---------------Edit modals here----------------------->

<section>
<div class="modal fade" id="editModalCenter"tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<form action="view/update_process.php" method = "POST" enctype="multipart/form-data">
<div class="modal-header">
<h5 class="modal-title">Update Tenant Details</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal">
</button>
</div>
<div class="modal-body">

<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="control-label">FName</label>
<input type="hidden" name="hidden_id" id="hidden_id" class="form-control rounded-0" required>
<input type="text" name="edit_fname" id="edit_fname" class="form-control rounded-0" required>
</div>
<div class="form-group">
<label class="control-label">Other Name</label>
<input type="text" name="edit_oname" id="edit_oname"  class="form-control rounded-0" required>

</div>
<div class="form-group">
<label class="control-label">LName</label>
<input type="text" name="edit_lname" id="edit_lname"  class="form-control rounded-0" required>

</div>
<div class ="form-group">
<label class="control-label">Email</label>
<input type="email" name="edit_email" id="edit_email" class="form-control rounded-0"  required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Contact</label>
<input type="text" name="edit_contact" id="edit_contact" class="form-control rounded-0"  required>
</div>
<div class="form-group">
<label class="control-label">Apartment</label>
<select name="edit_room_name" id="edit_room_name" class="form-control rounded-0">
<option value="">Select Room</option>
<?php 
while ($row = mysqli_fetch_assoc($result2)) { ?>
<option value="<?php echo $row['id'] ?>"><?php echo $row['room_name'] ?></option>
<?php } ?>
</select>
</div>


<div class="form-group">
<label for="dob" class="control-label">Date in</label>
<input type="date" name="edit_dob" id="edit_dob" class="form-control rounded-0" >
</div>

<div class="card-body">
<div class="basic-form custom_file_input">

<div class="input-group mb-3">
<span class="input-group-text">Upload</span>
<div class="form-file">
<input type="file" name ="edit_image" class="form-file-input form-control">
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

<section>
<div class="row page-titles">
<ol class="breadcrumb">
<li class="breadcrumb-item active"><a href="javascript:void(0)">Components</a></li>
<li class="breadcrumb-item"><a href="javascript:void(0)">Sweet Alert</a></li>
</ol>
</div>
<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
<div class="card">
<div class="card-body">
<h4 class="card-title">Sweet Confirm</h4>
<div class="card-content">
<div class="sweetalert mt-5">
<button class="btn btn-warning btn sweet-confirm">Sweet Confirm</button>
</div>
</div>
</div>
</div>
</div>
</section>

<script>
function tenantsDetails(id) {

fetch(`update.php?id=${id}`)
.then(response => response.json())
.then(data => {
if (data.success) { 
document.getElementById('hidden_id').value = data.tenant.id;
document.getElementById('edit_fname').value = data.tenant.firstname;
document.getElementById('edit_oname').value = data.tenant.othername;
document.getElementById('edit_lname').value = data.tenant.lastname;
document.getElementById('edit_email').value = data.tenant.email;
document.getElementById('edit_contact').value = data.tenant.contact;
document.getElementById('edit_room_name').value = data.tenant.room_id;
document.getElementById('edit_dob').value = data.tenant.date_in;

} else {
swal("Error!", "Unable to fetch tenant details.", "error");
}
})
.catch(error => {
console.error('Error fetching tenant details:', error);

});
}
</script>


<script>
let tenantIdToDelete = null;

function confirmDelete(id) {
tenantIdToDelete = id
swal({


title: "Are you sure?",
text: "You will not be able to recover this tenant!",
type: "warning",
showCancelButton: true,
confirmButtonClass: "btn-danger",
confirmButtonText: "Yes, delete it!",
cancelButtonText: "No, cancel!",
closeOnConfirm: false,
closeOnCancel: false



})
.then((willDelete) => {
if (!willDelete.isConfirmed) {
fetch(`delete.php?id=${tenantIdToDelete}`, { method: 'GET' })
.then(response => response.json())
.then(data => {
if (data.success) {
swal("Success!", "Tenant has been deleted!", "success")
.then(() => {
location.reload();
});
} else {
swal("Error!", "Unable to delete tenant.", "error");
}
})

}else{
	swal("error!", "Cancelled", "error");
}
});
}

</script>



<?php include('inc/footer.php');?>
