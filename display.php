<?php



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
// echo "'".$userN."' ";
// $sql = "select studentName from  studentInfo  where studentName = '".$userN."'";

// if ($conn->query($sql) === TRUE) {
//   echo "'".$userN."' '".$passW."'";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
include("header.php");
include("footer.php");
$sql = "SELECT * FROM studentInfo";

echo '<table class="table" > 
<thead class="thead-dark">
  <tr > 
      <td scope="col"> <strong>Student ID </strong></td> 
      <td scope="col"> <strong>Student Names </strong></td> 
      <td scope="col"><strong> Student Passwords </strong></td> 
      <td scope="col"><strong> Student Status </strong></td> 
      </thead> 
  </tr>';
      
      if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            $field1name = $row["id"];
            $field2name = $row["studentName"];
            $field3name = $row["studentPassword"];
            $field4name = $row["studentStatus"];
     
            echo '<thead class="thead-dark"><tr "> 
                      <td>'.$field1name.'</td> 
                      <td>'.$field2name.'</td> 
                      <td>'.$field3name.'</td> 
                      <td>'.$field4name.'</td> 
                      
                  </tr>  </thead> ';
        }
        $result->free();
    } 
$conn->close();
?>