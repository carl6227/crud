<?php



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
// echo "'".$userN."' ";
// $sql = "select studentName from  studentInfo  where studentName = '".$userN."'";

// if ($conn->query($sql) === TRUE) {
//   echo "'".$userN."' '".$passW."'";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
include("header.php");
include("footer.php");
$queryStudentInfo = "SELECT * FROM studentInfo";

echo ' <div class="col-sm-8" style="margin-left:20px">
<table class="table" > 
<thead class="thead-dark">
  <tr > 
      <td scope="col"> <strong>Student ID </strong></td> 
      <td scope="col"> <strong>Student Names </strong></td> 
      <td scope="col"><strong> Student Passwords </strong></td> 
      <td scope="col"><strong> Student Status </strong></td> 
     
  </tr> </thead> 
   </div>';
      
      if ($result = $conn->query($queryStudentInfo)) {
        while ($row = $result->fetch_array()) {
            $id = $row["id"];
            $name = $row["studentName"];
            $password = $row["studentPassword"];
            $status = $row["studentStatus"];
     
            echo '<thead class="thead-dark"><tr "> 
                      <td>'.$id.'</td> 
                      <td>'.$name.'</td> 
                      <td>'.$password.'</td> 
                      <td>'.$status.'</td> 
                      
                  </tr>  </thead> ';
        }
        $result->free();
    } 
$conn->close();
?>