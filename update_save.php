<?php

$userN  = $_GET["thisUser"];
$passW  = $_GET["thisPass"];



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

$sql = "update  studentInfo set studentPassword= '".$passW."' where studentName = '".$userN."'";

if ($conn->query($sql) === TRUE) {
  echo " record  successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>