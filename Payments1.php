<?php include('inc/header.php'); ?>
<?php include('inc/main.php'); ?>
<?php include("config.php");

$sql = "SELECT * FROM `vw_masterpayment`";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>
<div class="content-body">	
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Payments List</h4>
</div>
<div class="d-flex justify-content-between align-items-center flex-wrap">
<div class="mb-6"></div>
<div class="mb-6">
    <a href="PaymentsMtd.php" class="btn btn-primary btn-rounded fs-18">Payment Method</a>
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
<?php while ($r = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo isset($r['firstname']) ? $r['firstname'] : 'N/A'; ?></td>
    <td><?php echo isset($r['lastname']) ? $r['lastname'] : 'N/A'; ?></td>
    <td><?php echo isset($r['othername']) ? $r['othername'] : 'N/A'; ?></td>
    <td><?php echo isset($r['period']) ? $r['period'] : 'N/A'; ?></td>
    <td><?php echo isset($r['period_description']) ? $r['period_description'] : 'N/A'; ?></td>
    <td><?php echo isset($r['amount']) ? $r['amount'] : 'N/A'; ?></td>
    <td>
        <div class="d-flex">
            <button type="button" class="btn btn-danger shadow btn-xs sharp me-1" data-id="<?php echo $r['id']; ?>" data-bs-toggle="modal" data-bs-target="#editModalCenter" onclick="tenantsDetails(<?php echo $r['id']; ?>)">
                <i class="fa fa-money-bill"></i>
            </button>
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

<?php mysqli_close($conn); ?>
<?php include('inc/footer.php'); ?>
