<?php include ('inc/header.php') ?>
<?php include ('inc/menu.php') ?>
<?php include ('config.php') ?>
<?php if (isset($_POST['contSubmit'])) {

$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];

@session_start();
@$sdate = explode('-',$startdate);
@$edate = explode('-',$enddate);
@$syxr = $sdate[0];
@$smxr = $sdate[1];
@$eyxr = $edate[0];
@$emxr = $edate[1];


@$speriod=$syxr.''.$smxr;
@$eperiod=$eyxr.''.$emxr;


$_SESSION['speriod']=$speriod;
$_SESSION['eperiod']=$eperiod;







} ?>




<main class="main-content">
<div class="app-loader"><i class="icofont-spinner-alt-4 rotate"></i></div>
<div class="main-content-wrap">


<div class="col-lg-8 offset-lg-2">
<div class="card card-block">
<div class="card-header">
<div style="text-align: center;">
<h3>TENANTS REPORT</h3>
</div>
</div>
<?php $url = $_SERVER['REQUEST_URI']; ?>
<div class="card-block">
<form action="<?php echo $url; ?>" method="POST">
<div class="row">
<div class="col-4">
<div class="form-group">
<span>Categories</span>
<select name="cites_type" id="cites_type" class="form-control" style="height: 35px">
<option value="">Perviours Tenant</option>
<option value="">Currents Tenant</option>
<option value="3">Maintenance</option>
<option value="4">Maintenance</option>
</select>
</div>
</div>
<div class="col-4">
<div class="form-group">
<span>Country of Export</span>
<select class="selectpicker" data-live-search="true" name="country">
<option value="">All Countries</option>
<?php 
$sql12 = "SELECT * FROM `country`";
$result12 = mysqli_query($conn, $sql12);
while ($row12 = mysqli_fetch_assoc($result12)) {
?>
<option data-tokens="ketchup mustard" value="<?php  echo $row12['name'] ?>"><?php echo $row12['name']; ?></option>
<?php } ?>
</select>
</div>
</div>
<div class="col-4">
<div class="form-group">
<span>Export Type</span>
<select name="export_type" id="export_type" class="form-control" style="height: 35px">
<option value="">All</option>
<option value="Export">Export</option>
<option value="Import">Import</option>
<option value="Re-Export">Re-Export</option>
</select>
</div>
</div>
</div>

<div style="" id="hideOne">
<div class="row">
<div class="col-6">
<!-- <div class="form-group"> -->
<label for="exampleSelect1">Start Date</label>
<input type="date" name="startdate" class="form-control" required>
<!-- </div> -->
</div>
<div class="col-6">
<!-- <div class="form-group"> -->
<label>End Date</label>
<input type="date" name="enddate" class="form-control" required>
<!-- </div> -->
</div>
</div>
</div>

<div class="row" style="border-bottom: 1px dashed grey;
    margin: 10px 2px 10px 2px;"></div>

<div class="row">
<div class="col-3 offset-9">
<!-- <div class="form-group  m-t-20"> -->
<button type="submit" name="contSubmit" class="btn btn-primary btn-block btn-xs">Submit</button>
<!-- </div> -->
</div>
</div>

</form>
</div>
</div>
</div>

<?php if (isset($_POST['contSubmit'])) {
   // $cites_type = $_POST['cites_type'];
   // $export_type = $_POST['export_type'];
   // $country = $_POST['country'];
   $startdate = $_POST['startdate'];
   $enddate = $_POST['enddate'];
   // echo $startdate;
   // echo $enddate;
   // echo $cites_type;
   // echo $export_type;
   // echo $country;
    
    if ($cites_type==1 AND empty($export_type) AND empty($country)) {
        $sql = "SELECT * FROM `tbl_cites` WHERE `application_type`='1' AND `app_date` BETWEEN '$startdate' AND '$enddate' ";
        $result = mysqli_query($conn, $sql);
        echo "1";
    }
    elseif ($cites_type==1 AND !empty($export_type) AND empty($country)) {
        $sql = "SELECT * FROM `tbl_cites` WHERE `application_type`='1' AND `export_type_id`='$export_type' AND `app_date` BETWEEN '$startdate' AND '$enddate' ";
        $result = mysqli_query($conn, $sql);
        echo "2";
    }
    elseif ($cites_type==1 AND empty($export_type) AND !empty($country)) {
        $sql = "SELECT * FROM `tbl_cites` WHERE `application_type`='1' AND `export_country`='$country' AND `app_date` BETWEEN '$startdate' AND '$enddate' ";
        $result = mysqli_query($conn, $sql);
        echo "8";
    }
    elseif ($cites_type==1 AND !empty($export_type) AND !empty($country)) {
        $sql = "SELECT * FROM `tbl_cites` WHERE `application_type`='1' AND `export_type_id`='$export_type' `export_country`='$country' AND `app_date` BETWEEN '$startdate' AND '$enddate' ";
        $result = mysqli_query($conn, $sql);
        echo "3";
    }
    elseif ($cites_type==2 AND empty($export_type) AND empty($country)) {
        $sql = "SELECT * FROM `tbl_cites` WHERE `application_type`='2' AND `app_date` BETWEEN '$startdate' AND '$enddate' ";
        $result = mysqli_query($conn, $sql);
        echo "4";
    }
    elseif ($cites_type==2 AND !empty($export_type) AND empty($country)) {
        $sql = "SELECT * FROM `tbl_cites` WHERE `application_type`='2' AND `export_type_id`='$export_type' AND `app_date` BETWEEN $startdate AND $enddate ";
        $result = mysqli_query($conn, $sql);
        echo "5";
    }
    elseif ($cites_type==2 AND empty($export_type) AND !empty($country)) {
        $sql = "SELECT * FROM `tbl_cites` WHERE `application_type`='2' AND `export_country`='$country' AND `app_date` BETWEEN $startdate AND $enddate ";
        $result = mysqli_query($conn, $sql);
        echo "9";
    }
    elseif ($cites_type==2 AND !empty($export_type) AND !empty($country)) {
        $sql = "SELECT * FROM `tbl_cites` WHERE `application_type`='2' AND `export_type_id`='$export_type' AND `export_country`='$country' AND `app_date` BETWEEN '$startdate' AND '$enddate' ";
        $result = mysqli_query($conn, $sql);
        echo "6";
    }
    else{
        $sql = "SELECT * FROM `tbl_cites` WHERE `app_date` BETWEEN '$startdate' AND '$enddate' ";
        $result = mysqli_query($conn, $sql);
        echo "7";
    }

    // var_dump($result);
 ?>

<div class="col-lg-12">
<div class="card card-block">
<div class="card-block">
<table
class="table data-table"                                        data-columns='[
{ "data": "name" },
{ "data": "position" },
{ "data": "office" },
{ "data": "age" },
{ "data": "start-date" },
{ "data": "salary" }
]'

>
<thead>
<tr>
<th>ID</th>
<th>Exporter Name</th>
<th>Exporter Address</th>
<th>Country</th>
<th>Export Type</th>
<th>Export Purpose</th>
</tr>
</thead>
<tbody>
<?php 
    while($row = mysqli_fetch_assoc($result)){
 ?>
<tr>
<td><?php echo ('<a href="routes.php?page=ed_approve_details&id=' . $row['cites_id'] .'">' . $row['cites_id'] . '</a>'); ?></td>
<td><?php echo $row['exporter_name'] ?></td>
<td><?php echo $row['exporter_address'] ?></td>
<td><?php echo $row['CountryCode'] ?></td>
<td><?php echo $row['export_type_id'] ?></td>
<td><?php echo $row['export_purpose_id'] ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<div class="col-lg-10">

</div>
<div class="col-lg-2">
<div class="form-group  m-t-20">
<?php if (isset($_POST['staffid'])) { ?>
<a href="printstatement.php?id=<?php echo @$staffid; ?>" class="btn btn-primary" target="_blank">Print</a>
<?php } ?>
</div>

</div>
</div>
</div>
<?php } ?>



</div>
</main>

<?php include 'includes/footer.php'; ?>

<script type="text/javascript">
$(document).ready(function(){



$('#generate').on('click', function(){
$.get("get_coupon.php", function(data){
$('#coupon').val(data);
});
});
});
</script>

<script type="text/javascript">
$(document).ready(function(){
$('#generate').on('click', function(){
$.get("get_coupon_pin.php", function(data){
$('#coupon_pin').val(data);
});
});
});
</script>
















<?php include('inc/header.php');?>
<?php include('inc/menu.php');?>
<?php include("config.php");


?>
<div class="content-body">
<div class="container-fluid">

<div class="d-flex justify-content-between align-items-center flex-wrap">
<p><h1>Report</h1></p>
</div>	
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
<th>#</th>
<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Status</th>
<th>Year In</th>
</tr>
</thead>
<tbody>

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
</div>
</div>
</div>
</div>
</div>

<?php include('inc/footer.php');?>

<script>
$(document).ready(function () {
$('#tbl_tenants_original').DataTable({
"lengthChange": false, 
"autoWidth": false,
"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
}).buttons().container().appendTo('#tbl_tenants_original .col-md-6:eq(0)');
});
</script>
<script>
$(document).ready(function () {
$('#tbl_tenants_original').DataTable({
"lengthChange": true,
"autoWidth": false,
"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
"dom": 'Bfrtip'
}).buttons().container().appendTo('#tbl_tenants_original .col-md-6:eq(0)');
});
</script>


<script>
$(document).ready(function () {
$('#attendanceTable').DataTable({
"lengthChange": false, 
"autoWidth": false,
"buttons": ["copy", "csv", "excel", "pdf", "print"]
}).buttons().container().appendTo('#attendanceTable_wrapper .col-md-6:eq(0)');
});
</script>