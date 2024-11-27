
<?php
  include "config.php";
   $name =$_POST['fullname'];
   $status =$_POST['status'];
   $Email =$_POST['email'];
   $phone_number =$_POST['contact'];
   $room_number =$_POST['number'];
   $year_in =$_POST['dob'];
   $emergency_name =$_POST['name'];
   $emergency_contact =$_POST['number_form'];
   $emergency_contact =$_POST['tenancy_status'];


   
   $tmpFilePath = $_FILES['image']['tmp_name'];
    $attached_file = $_FILES['image']['name'];
    $shortname = basename("image/".$_FILES['image']['name']);

    $filePath = "image/".$_FILES['image']['name'];


    move_uploaded_file($tmpFilePath, $filePath);

  

  $sql = "INSERT INTO `tbl_tenants_original`(`tenancy_status`) VALUES ('tenancy_status')";
  $result =$conn->query($sql);

  // $sql = "INSERT INTO `tbl_rooms`( `Room_Number`, `Year_In`) VALUES (' $room_number', '$year_in')";
  // $result =$conn->query($sql);
  // $sql = "INSERT INTO `tbl_tenants`(`Name`, `Status`, `Email`, `image`) VALUES ('$name', '$status','$Email', '$attached_file')";
  // $result =$conn->query($sql);

  // $sql = "INSERT INTO `tbl_contact`(`Phone_Number`, `Emergency_Name`,`Emergency_Contact`) VALUES ('$phone_number','$emergency_name','$emergency_contact')";
  // $result =$conn->query($sql);

  if($result== TRUE){
     echo 'New record created successfully';
    
  }

  else{
    echo "Error:" .$sql . "<br>". $conn->error;
  }

  $conn->close();
  header('location:tenants.php');
?>