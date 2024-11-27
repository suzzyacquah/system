if (isset($_POST['update_rate']))
{
$approve = 1;
$tbl_specie_id = $_POST['tbl_specie_id'];
$rate = $_POST['rate'];
$count = $_POST['count'];
// echo $count;

for ($i=0; $i < $count; $i++) { 
$rate = $_POST['rate'][$i];
$tbl_specie_id = $_POST['tbl_specie_id'][$i];
$approved_date = date('Y-m-d');
// echo $rec;
// echo $specie_id;

$sql = "UPDATE tbl_specie_list SET rate='$rate' WHERE tbl_specie_id='$tbl_specie_id' AND voucher='$voucher'";
$result = mysqli_query($conn, $sql);
}

$objComplaint = new Complaint();
$resultcomp = $objComplaint->dbApproveUpdateQuery($approve,$voucher,$approved_date);

if ($resultcomp) {
$_SESSION['formreg'] = 6;
header("Location:../routes.php?page=ed_approve");
}
}