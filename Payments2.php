<?php include('inc/header.php');?>
<?php include('inc/menu.php');?>
<?php include("config.php");
$sql = "SELECT  * FROM `vw_masterpayment`";
$result=mysqli_query($conn,$sql);


?>
<div class="content-body">	
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Payments List</h4>
</div>
<div class="d-flex justify-content-between align-items-center flex-wrap">
<div class="mb-6">
</div>
<div class="mb-6">
<button type="button" class="btn btn-primary btn-rounded fs-18"><a href="PaymentsMtd.php">payment Method</a></button>
</div>

</div>
<div class="card-body">
<div class="table-responsive">
<table id="example4" class="display" style="min-width: 845px">
<thead>
<tr>
<th>Tenant First Name</th>
<th>Tenant Last Name</th>
<th>Othername </th>
<th>Room Type</th>
<th>Period </th>
<th>Amount</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<?php 
while ($r = mysqli_fetch_assoc($result)) {?>
<tr>
<td><?php echo $r['firstname']; ?></td>
<td><?php echo $r['othername']; ?></td>
<td><?php echo $r['lastname']; ?></td>
<td><?php echo $r['period']; ?></td>
<td><?php echo $r['period_description']; ?></td>
<td><?php echo $r['amount']; ?></td>
<td>
<div class="d-flex">
<button type="button" class="btn btn-danger shadow btn-xs sharp me-1" data-id="<?php echo $r['id']; ?>" data-bs-toggle="modal" data-bs-target="#editModalCenter" onclick="tenantsDetails(<?php echo $r['id']; ?>)"><i class="fa fa-money-bill"></i></button>
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

<?php include('inc/footer.php');?>
