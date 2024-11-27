<!-- <?php 
define ("HOSTNAME", "localhost");
define ("USERNAME", "root");
define ("PASSWORD", "");
define ("DATABASE", "tenants");

$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

IF(!$connection){
    die("connection failed");
}

else{
echo "added successfully";
}


?> -->
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "company";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

