<?php
@session_start();
  $servername ="localhost";
  $username = "root";
  $password = "";
  $dbname = "rentsys";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("Connect Failed" . $conn->connect_error);
}
?>
