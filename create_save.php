<?php
$userN  = $_GET["thisUser"];
$passW  = $_GET["thisPass"];

////specifying the credentials for connection
//$servername = "192.168.254.100";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patrickdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO studentinfo(studentName, studentPassword, studentStatus)   
VALUES ('".$userN."', '".$passW."', 'Active')";

if ($conn->query($sql) === TRUE) {
  echo " <script> alert('New record successfully added')</script>";
  include("display.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  $conn->close();
}


?>