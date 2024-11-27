<?php include('inc/header.php'); ?>
<?php include('inc/menu.php'); ?>
<?php include("config.php"); 

// Fetch all tenants and payments for initial data population (if necessary)
$tenantsQuery = "SELECT * FROM `tbl_tenants`";
$tenantsResult = mysqli_query($conn, $tenantsQuery);

$paymentsQuery = "SELECT * FROM `vw_masterpayment`";
$paymentsResult = mysqli_query($conn, $paymentsQuery);

$roomsQuery = "SELECT * FROM `tbl_rooms`";
$roomsResult = mysqli_query($conn, $roomsQuery);
?>

<div class="content-body">
<div class="container-fluid">
<div class="d-flex justify-content-between align-items-center flex-wrap">
<h1>Generate Reports</h1>
</div>
<div class="row">
<div class="col-12">
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Reports</h4>
    </div>
    <div class="card-body">
        <form method="post" action="">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="startdate">Start Date</label>
                    <input type="date" name="startdate" class="form-control rounded-0" required>
                </div>
                <div class="col-md-4">
                    <label for="enddate">End Date</label>
                    <input type="date" name="enddate" class="form-control rounded-0" required>
                </div> 
                <div class="col-md-4">
                    <label for="category">Select Category</label>
                    <select class="form-control rounded-0" name="category" required>
                        <option value="">Select Category</option>
                        <option value="tenants">Tenants List</option>
                        <option value="payments">Payments List</option>   
                    </select>
                </div>
            </div>
            <button type="submit" name="contSubmit" class="btn btn-primary btn-block">Generate</button>
        </form>
    </div>
</div>

<?php
if (isset($_POST['contSubmit'])) {
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $category = $_POST['category'];

    if ($category == 'tenants') {
        $sql = "SELECT t.id, t.firstname, t.lastname, t.email, t.contact, r.room_name, t.date_time 
                FROM tbl_tenants t
                JOIN tbl_rooms r ON t.room_id = r.id
                WHERE t.date_time BETWEEN '$startdate' AND '$enddate'";
    } elseif ($category == 'payments') {
        $sql = "SELECT p.id, t.firstname, t.lastname, r.room_name, p.period_description, p.amount, p.payment_date 
                FROM vw_masterpayment p
                JOIN tbl_tenants t ON p.tenant_id = t.id
                JOIN tbl_rooms r ON t.room_id = r.id
                WHERE p.payment_date BETWEEN '$startdate' AND '$enddate'";
    }

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("SQL Error: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        echo "<div class="card mt-4">
            <div class="card-header">
                <h4 class="card-title">Generated Report</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="reportTable" class="display">
                        <thead>
                            <tr>';
                            if ($category == 'tenants') {
                                echo '
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Room Number</th>
                                <th>Date In</th>';
                            } elseif ($category == 'payments') {
                                echo '
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Room Type</th>
                                <th>Period</th>
                                <th>Amount Paid</th> 
                                <th>Date of Payment</th>';
                            }
                            echo '
                            </tr>
                        </thead>
                        <tbody>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            if ($category == 'tenants') {
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['firstname'] . " " . $row['lastname'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['contact'] . '</td>';
                echo '<td>' . $row['room_name'] . '</td>';
                echo '<td>' . $row['date_time'] . '</td>';
            } elseif ($category == 'payments') {
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['firstname'] . " " . $row['lastname'] . '</td>';
                echo '<td>' . $row['room_name'] . '</td>';
                echo '<td>' . $row['period_description'] . '</td>';
                echo '<td>' . $row['amount'] . '</td>';
                echo '<td>' . $row['payment_date'] . '</td>';
            }
            echo '</tr>';
        }
        echo '
                        </tbody>
                    </table>
                </div>
            </div>
        </div>';
    } else {
        echo '<div class="alert alert-warning mt-4" role="alert">No records found for the selected criteria.</div>';
    }
}
?>
</div>
</div>
</div>
</div>

<?php include('inc/footer.php'); ?>

<script>
$(document).ready(function () {
$('#reportTable').DataTable({
"lengthChange": false,
"autoWidth": false,
"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
}).buttons().container().appendTo('#reportTable_wrapper .col-md-6:eq(0)');
});
</script>
