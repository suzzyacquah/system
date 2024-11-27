<?php include('inc/header.php'); ?>
<?php include('inc/menu.php'); ?>
<?php include("config.php"); ?>

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

<!-- Report Table -->

</div>
</div>

<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">


<div class="table-responsive">
            <table id="example" class="display" style="min-width: 845px">
                <thead>
                    <tr>
                        <?php
                        if (isset($_POST['contSubmit']) && $_POST['category'] == 'tenants') {
                            echo "<th>#</th>
                                  <th>Full Name</th>
                                  <th>Email</th>
                                  <th>Contact</th>
                                  <th>Room Number</th>
                                  <th>Date In</th>";
                        } elseif (isset($_POST['contSubmit']) && $_POST['category'] == 'payments') {
                            echo "<th>#</th>
                                  <th>Full Name</th>
                                  <th>Room Number</th>
                                  <th>Period Description</th>
                                  <th>Amount Paid</th>
                                  <th>Date of Payment</th>";
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_POST['contSubmit'])) {
                        $startdate = $_POST['startdate'];
                        $enddate = $_POST['enddate'];
                        $category = $_POST['category'];

                        // Construct SQL query based on selected category
                        if ($category == 'tenants') {
                            $sql = "SELECT t.id, t.firstname, t.lastname, t.email, t.contact, r.room_name, t.date_time 
                                    FROM tbl_tenants t
                                    JOIN tbl_rooms r ON t.room_id = r.id
                                    WHERE t.date_time BETWEEN '$startdate' AND '$enddate'";
                        } elseif ($category == 'payments') {
                            $sql = "SELECT p.id, t.firstname, t.lastname, r.room_name, p.period_description, p.amount, p.date_time 
                                    FROM vw_masterpayment p
                                    JOIN tbl_tenants t ON p.tenant_id = t.id
                                    JOIN tbl_rooms r ON t.room_id = r.id
                                    WHERE p.date_time BETWEEN '$startdate' AND '$enddate'";
                        }

                        // Execute SQL query
                        $result = mysqli_query($conn, $sql);

                        // Check if any records are found
                        if ($result && mysqli_num_rows($result) > 0) {
                            $counter = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>{$counter}</td>";
                                
                                if ($category == 'tenants') {
                                    echo "<td>{$row['firstname']} {$row['lastname']}</td>";
                                    echo "<td>{$row['email']}</td>";
                                    echo "<td>{$row['contact']}</td>";
                                    echo "<td>{$row['room_name']}</td>";
                                    echo "<td>{$row['date_time']}</td>";
                                } elseif ($category == 'payments') {
                                    echo "<td>{$row['firstname']} {$row['lastname']}</td>";
                                    echo "<td>{$row['room_name']}</td>";
                                    echo "<td>{$row['period_description']}</td>";
                                    echo "<td>{$row['amount']}</td>";
                                    echo "<td>{$row['date_time']}</td>";
                                }

                                echo "</tr>";
                                $counter++;
                            }
                        } else {
                            echo "<tr><td colspan='6'>No records found for the selected date range and category.</td></tr>";
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

<?php include('inc/footer.php'); ?>
<script src="/myapp/datatable/dataTables.button.min.js"></script>
<script src="/myapp/datatable/jquery.dataTables.min.js"></script>

<!-- Include jQuery and DataTables scripts -->
<!-- <script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.buttons.min.js"></script>
<script src="../assets/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/js/buttons.html5.min.js"></script>
<script src="../assets/js/buttons.print.min.js"></script>
<script src="../assets/js/buttons.colVis.min.js"></script> -->

<script>
$(document).ready(function () {
$('#exampleTable').DataTable({
"lengthChange": false,
"autoWidth": false,
"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
}).buttons().container().appendTo('#exampleTable_wrapper .col-md-6:eq(0)');
});
</script>
</body>
</html>
 