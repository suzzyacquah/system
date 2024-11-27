
<?php
include "../config.php";
$firstname =$_POST['edit_fname'];
$othername =$_POST['edit_oname'];
$lastname =$_POST['edit_lname'];
$Email =$_POST['edit_email'];
$phone_number =$_POST['edit_contact'];
$room_id =$_POST['room_name'];
// $year_in =$_POST['edit_dob'];
$id =$_POST['hidden_id'];

var_dump($_POST);
$tmpFilePath = $_FILES['edit_image']['tmp_name'];
$attached_file = $_FILES['edit_image']['name'];
$shortname = basename("../image/".$_FILES['edit_image']['name']);
$filePath = "../image/".$_FILES['edit_image']['name'];

move_uploaded_file($tmpFilePath, $filePath);

$sql = "UPDATE `tbl_tenants` SET `firstname`='".$firstname."',`othername`='".$othername."',`lastname`='".$lastname."', `email`='".$Email."', `contact`='".$phone_number."', `Room_id`='".$room_id."', `image`='".$attached_file."' WHERE `id`='".$id."'";
$result =$conn->query($sql);


if($result== TRUE){
echo 'Record Updated successfully';
}

else{
echo "Error:" .$sql . "<br>". $conn->error;
}

$conn->close();
header('location:../tenants.php');

?>



