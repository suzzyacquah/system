<?php
include "config.php";
if(isset($_GET['id'])) {
$id = $_GET['id'];
$query = "DELETE FROM tbl_rooms WHERE id='$id'";
$result = mysqli_query($conn, $query);
if($result) {
echo json_encode(['success' => true]);
} else {
echo json_encode(['success' => false, 'error' => 'Failed to delete tenant']);
}
} else {
echo json_encode(['success' => false, 'error' => 'No ID provided']);
}
?>