<?php include('config.php');?>


<?php 

if(isset($_POST['uname']) && isset($_POST['password'])){
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

   $uname = validate($_POST['uname']);
   $password = validate($_POST['password']);

   if (empty($uname)) {
   	header("location: index.php?error=User Name is require");
   	exit();
   }else if (empty($password)){
    header("location: index.php?error=Password is require");
   	exit();
   }else{
   	$sql = "SELECT * FROM tbl_users WHERE phone_number= '$uname' AND password= '$password'";
   	$result = mysqli_query($conn, $sql); 
    $row = mysqli_fetch_assoc($result);
    if(empty($row)){
header("location: index.php");
    }else{
        @session_start();
        $_SESSION['DATA']=$row;

        $role =$row['role'];
        if ($role >= 1)
            switch ($role) {
                case 1:
                   header("location: dashboard.php");
                    break;
                case 2:
                header("location: dashboard2.php");
                    break;
            }
            else{
header("location: index.php?error=Access Denied");
    }

    exit();
    
   }
}
}
?>


