<?php include('inc/header.php');?>
<?php include('inc/menu.php');?>
<?php include("config.php");
$sql = "SELECT  * FROM `vw_masterroom`";
$sql28 = "SELECT  * FROM `tbl_room_type`";
// $sql3 = "SELECT * FROM `tbl_rooms`";
$result2=mysqli_query($conn,$sql);
$result28=mysqli_query($conn,$sql28);




?>
<div class="content-body">
<div class="container-fluid">
<div class="d-flex justify-content-between align-items-center flex-wrap">
<p><h1>Rooms</h1></p>
<div class="mb-4">
<button type="button" class="btn btn-primary btn-rounded fs-18" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">+ Room List</button>
</div>
</div>	
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Room List</h4>
</div>
<div class="container-fluid">
</div>
<div class="card-body">
<div class="table-responsive">
<table id="example5" class="display" style="min-width: 845px">
<thead>
<tr>


<th>Room Name</th>
<th>Room Type</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
while ($r = mysqli_fetch_assoc($result2)) {?>
<tr>
<td><?php echo $r['room_name']; ?></td>
<td><?php echo $r['room_description']; ?></td>
<td>
<div class="dropdown ms-auto text-end">
<div class="d-flex">
<button type="button" class="btn btn-primary shadow btn-xs sharp me-1" data-id="<?php echo $r['id']; ?>" data-bs-toggle="modal" data-bs-target="#editModalCenter" onclick="roomsDetails(<?php echo $r['id']; ?>)"><i class="fas fa-pencil-alt"></i></button>
<button type="button" class="btn btn-danger shadow btn-xs sharp" onclick="confirmDelete(<?php echo $r['id']; ?>)"><i class="fa fa-trash"></i></button>
</div>
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

<section>
<div class="modal fade" id="exampleModalCenter">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<form action="roomcreate.php" method = "POST" enctype="multipart/form-data">
<div class="modal-header">
<h5 class="modal-title">Modal title</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal">
</button>
</div>
<div class="modal-body">

<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Room Name </label>
<input type="text" name="apartment" id="apartment" class="form-control rounded-0" required>
</div>
<div class="form-group">
<div class="form-group">
<label class="control-label">Room Type</label>
<select name="room_type" id="room_type" class="form-control rounded-0">
<option value="">Select Room</option>
<?php 
while ($row = mysqli_fetch_assoc($result28)) { ?>
<option value="<?php echo $row['id'] ?>"><?php echo $row['room_description'] ?></option>
<?php } ?>
</select>
</div>

</div>
</div>
<!-- <div class="col-md-6">
<div class="form-group">
<label class="control-label">Price</label>
<input type="text" name="price" id="price" class="form-control rounded-0">
</div>
</div> -->


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


<!-------- Edit modals here------>
<section>
<div class="modal fade" id="editModalCenter"tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<form action="roomupdate_process.php" method = "POST" enctype="multipart/form-data">
<div class="modal-header">
<h5 class="modal-title">Modal title</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal">
</button>
</div>
<div class="modal-body">

<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Room Name </label>
<input type="hidden" name="hidden_id" id="hidden_id" class="form-control rounded-0" required>
<input type="text" name="edit_apartment" id="edit_apartment" class="form-control rounded-0"required>
</div>
<div class="form-group">
<div class="form-group">
<label class="control-label">Room Type</label>
<select name="edit_room_type" id="edit_room_type" class="form-control rounded-0">
<option value="">Select Room</option>
<?php 
while ($row = mysqli_fetch_assoc($result28)) { ?>
<option value="<?php echo $row['id'] ?>"><?php echo $row['room_name'] ?></option>
<?php } ?>
</select>
</div>

</div>
</div>
<!-- <div class="col-md-6">
<div class="form-group">
<label class="control-label">Price</label>
<input type="text" name="edit_price" id="edit_price" class="form-control rounded-0">
</div>
</div> -->


</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Update</button>
</div>
</div>
</form>
</div>
</div>
</div>
</section>
<script>
function roomsDetails(id) {

fetch(`roomupdate_process.php?id=${id}`)
.then(response => response.json())
.then(data => {
if (data.success) { 
document.getElementById('hidden_id').value = data.room.id;
document.getElementById('edit_apartment').value = data.room.room_name;
document.getElementById('edit_room_type').value = data.room.room_type;
// document.getElementById('edit_price').value = data.room.price;

} else {
swal("Error!", "Unable to fetch room details.", "error");
}
})
.catch(error => {
console.error('Error fetching room details:', error);

});
}
</script>

<script>
let roomIdToDelete = null;

function confirmDelete(id) {
roomIdToDelete = id
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

fetch(`delete_room.php?id=${roomIdToDelete}`, { method: 'GET' })

.then(response => response.json())
.then(data => {
if (data.success) {
swal("Success!", "room has been deleted!", "success")
.then(() => {
location.reload();
});
} else {
swal("Error!", "Unable to delete room.", "error");
}
})
// .catch(error => {
//     console.error('Error deleting tenant:', error);
//     swal("Error!", "There was a problem deleting tenant.", "error");
// });
}else{
	swal("error!", "Cancelled", "error");
}
});
}

// 
</script>

<?php include('inc/footer.php');?>