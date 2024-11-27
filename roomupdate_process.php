
<?php
include "config.php";
   $room_name =$_POST['edit_apartment'];
   $room_type =$_POST['edit_room_type'];
   $id =$_POST['hidden_id'];
var_dump($_POST);



// $sql = "UPDATE `tbl_rooms` SET `room_name`='".$room_name."',`room_type`='".$room_type."' WHERE `id`='".$id."'";

$sql = "UPDATE `tbl_rooms` SET `room_name`='[value-2]',`room_type`='[value-4]' WHERE `id`='".$id."'";

$result =$conn->query($sql);


if($result== TRUE){
echo 'Record Updated successfully';
}

else{
echo "Error:" .$sql . "<br>". $conn->error;
}

$conn->close();
header('location:../room.php');

?>





