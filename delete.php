<?php

$userN  = $_GET["thisUser"];




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

$sql = "delete from studentInfo  where studentName = '".$userN."'";

if ($conn->query($sql) === TRUE) {
  echo " <h2>Record deleted successfully!</h2>";
  include("display.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  
$conn->close();   
}

?>