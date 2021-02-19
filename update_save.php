<?php

$userN=$_GET["thisUser"];
$passW=$_GET["thisPass"];
$userId=$_GET["thisId"];
$userS=$_GET["thisStatus"];
////specifying the credentials for connection
//$servername = "192.168.254.100";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patrickDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "update  studentinfo set studentPassword= '".$passW."' ,studentName='".$userN."',studentStatus='".$userS."' where id='".$userId."'";

if ($conn->query($sql) === TRUE) {
  $query = "SELECT * FROM studentinfo";
  include("display.php");

echo"<h2>updated successfully</h2>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  $conn->close();
}


?>