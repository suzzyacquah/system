
<?php
  include "config.php";
   $firstname =$_POST['fname'];
   $othername =$_POST['oname'];
   $lastname =$_POST['lname'];
   $Email =$_POST['email'];
   $phone_number =$_POST['contact'];
   $room_id =$_POST['room_name'];
   $date_in =$_POST['dob'];


   
   $tmpFilePath = $_FILES['image']['tmp_name'];
    $attached_file = $_FILES['image']['name'];
    $shortname = basename("image/".$_FILES['image']['name']);

    $filePath = "image/".$_FILES['image']['name'];


    move_uploaded_file($tmpFilePath, $filePath);

  

  $sql = "INSERT INTO `tbl_tenants`(`firstname`, `othername`,`lastname`, `email`, `contact`, `room_id`, `date_time`,`image`) VALUES ('$firstname','$othername','$lastname','$Email', '$phone_number', ' $room_id', '$date_in','$attached_file')";

  $result =$conn->query($sql);

  if($result== TRUE){
     echo 'New record created successfully';
    
  }

  else{
    echo "Error:" .$sql . "<br>". $conn->error;
  }

  $conn->close();
  header('location:tenants.php');

?>



