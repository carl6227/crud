<?php

$userN=$_POST["thisUser"];
$passW=$_POST["thisPass"];
$userId=$_POST["thisId"];
$userS=$_POST["thisStatus"];
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

$queryStudentInfo = "update  studentinfo set studentPassword= '".$passW."' ,studentName='".$userN."',studentStatus='".$userS."' where id='".$userId."'";

if ($conn->query($queryStudentInfo) === TRUE) {
echo"<script> alert('Record successfully updated')</script>";
include("display.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  $conn->close();
}


?>