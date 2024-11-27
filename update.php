<?php include("config.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_tenants WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $tenant = mysqli_fetch_assoc($result);
        echo json_encode(['success' => true, 'tenant' => $tenant]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Tenant not found']);
    }
} else {
}


?>

