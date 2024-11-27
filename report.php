<?php
include('inc/header.php');
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>View Attendance Report</title>

<style>
.content {
padding: 20px;
}
</style>
</head>
<body>
<div class="content">
<div class="card-body">
<div id="wrapper">
<div id="content-wrapper" class="d-flex flex-column">
<div id="content">
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Report</h1>
</div>

<div class="row">
<div class="col-lg-12">
<div class="card mb-4">
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
<h6 class="m-0 font-weight-bold text-primary">Report</h6>
</div>
<div class="card-body">
<form method="post">
<div class="form-group row mb-3">
<div class="col-xl-6">
<div class="example">
<p class="mb-1">Date Range Pick</p>
<input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015">
</div>
</div>
<div class="col-xl-6">
<label class="form-control-label">Select Category<span class="text-danger ml-2">*</span></label>
<select class="form-control" name="category" required>
<option value="1"></option>
<option value="1">Finance</option>
<option value="2">Current Tenant</option> 
<option value="3">Pervious Tenant</option>   
<option value="4">Maintenance</option>
</select>
</div>
</div>
<button type="submit" name="view" class="btn btn-primary">Generate</button>
</form>
</div>
</div>


<div class="row">
<div class="col-lg-12">
<div class="card mb-4">
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
<h6 class="m-0 font-weight-bold text-primary">Tenant Report</h6>
</div>
<div class="table-responsive p-3">
<table id="attendanceTable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
<thead>
<tr>
<th>copy</th>
<th>csv</th>
<th>excel</th>
<th>pdf</th>
<th>print</th>
<th>colvis</th>
<!-- <th>Year In</th>
<th>Money paid</th> -->
</thead>
<tbody>
<?php
if (isset($_POST['view'])) {
$dateTaken = $_POST['DatePicker'];
$category = $_POST['category'];
$sql = "INSERT INTO `tbl_tenants_original`(`Name`, `Status`, `Email`, `Phone_Number`, `Room_Number`, `Year_In`, `image`) VALUES ('$name', '$status','$Email', '$phone_number', ' $room_number', '$year_in','$attached_file')";

$query = "SELECT tbl_tenants_or.name, tbl_tenants_or.Email, tbl_tenants_or.Phone_Number, tbl_tenants_or.Status, tbl_tenants_or.Year_In
FROM tenants
INNER JOIN tenants ON tbl_tenants_or.fullname = tbl_tenants_or.fullname
WHERE tenants.Date = '$DatePiccker' AND tbl_tenants_or.categoryID = '$category'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
$counter = 1;
while ($row = mysqli_fetch_assoc($result)) {
$fullName = $row['fullname'];
$Email = $row['email'];
$Phone_Number = $row['contact'];
$status = $row['Status'];
$year_In = $row['dob'];
$tenantStatus = ($status == 1) ? "Current" : "Pervious";

echo "<tr>";
echo "<td>$id</td>";
echo "<td>$fullName</td>";
echo "<td>$Phone_Number</td>";
echo "<td>$Email</td>";
echo "<td>$attendanceStatus</td>";
echo "<td>$Year_In</td>";
echo "</tr>";
$counter++;
}
} else {
echo "<tr><td colspan='6'>No tenant records found for the selected date and department</td></tr>";
}
}
?>
</tbody>
</table>
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
<?php include "inc/footer.php"; ?>


<script>
$(document).ready(function () {
$('#attendanceTable').DataTable({
"lengthChange": false, 
"autoWidth": false,
"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
}).buttons().container().appendTo('#attendanceTable_wrapper .col-md-6:eq(0)');
});
</script>
</body>
</html>