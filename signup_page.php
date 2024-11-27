
<?php
  include "config.php";
   $firstname =$_POST['fname'];
   $lastname =$_POST['lname'];
   $phone_number =$_POST['number'];
   $password =$_POST['password'];
   $cpassword = $_POST['cpassword'];


if ($password == $cpassword) {
    $sql = "SELECT * FROM tbl_users WHERE first_name = '$firstname' AND last_name = '$lastname' AND phone_number = '$phone_number'";
    $result = $conn->query($sql);

    $rows = $result->fetch_all();


$rowCount = count($rows);


if ($rowCount > 0) {
        echo "User already exists.";
        header("location: page-register.php");
    } else {
  

  $sql = "INSERT INTO `tbl_users`(`first_name`, `last_name`, `phone_number`, `password`) VALUES ('$firstname','$lastname','$phone_number', '$password')";

  $result =$conn->query($sql);

  if($result== TRUE){
     echo 'New record created successfully';
    
  }

  else{
    echo "Error:" .$sql . "<br>". $conn->error;
  }

  $conn->close();
  header('location:index.php');
   }
} else {
    echo "Passwords do not match.";
    header("location: page-register.php");
}


?>



