
<?php
  include "config.php";
   $room_name =$_POST['apartment'];
   $room_type =$_POST['room_type'];
   // $price =$_POST['price'];

  

  echo $sql = "INSERT INTO `tbl_rooms`(`room_name`,`room_type`) VALUES ('$room_name', '$room_type')";
  
  $result2 =$conn->query($sql);

  if($result== TRUE){
     echo 'New record created successfully';
    
  }

  else{
    echo "Error:" .$sql . "<br>". $conn->error;
  }

  $conn->close();
  header('location:room.php');

?>



