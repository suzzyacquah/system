
<?php
  include "config.php";
   $tenant_id =$_POST['fullname'];
   $period =$_POST['period'];
   $room =$_POST['room_name'];
   $amount = $period*$room;



  

  $sql = "INSERT INTO `tbl_payments`(`tenant_id`,`period`,`amount`) VALUES ('$tenant_id', '$period', '$amount')";
  
  $result2 =$conn->query($sql);

  if($result== TRUE){
     echo 'New record created successfully';
    
  }

  else{
    echo "Error:" .$sql . "<br>". $conn->error;
  }
   $conn->close();
   header('location:payments2.php');

?>



