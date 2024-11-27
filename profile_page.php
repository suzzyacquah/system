
<?php
  include "config.php";
   $phone_number =$_POST['number'];
   $password =$_POST['password'];
   $cpassword = $_POST['cpassword'];


if ($password == $cpassword) {
    $sql = "SELECT * FROM tbl_users WHERE phone_number = '$phone_number'";
    $result = $conn->query($sql);

    $rows = $result->fetch_all();


$rowCount = count($rows);


if ($rowCount > 0) {
        echo "User already exists.";
        header("location: page-register.php");
    } else {
  

  $sql = "INSERT INTO `tbl_users`( `phone_number`, `password`) VALUES ('$phone_number', '$password')";

  $result =$conn->query($sql);

  if($result== TRUE){
     echo 'New record created successfully';
    
  }

  else{
    echo "Error:" .$sql . "<br>". $conn->error;
  }

  $conn->close();
  header('location: profile.php');
   }
} else {
    echo "Passwords do not match.";
    header("location: profile.php");
}


?>



