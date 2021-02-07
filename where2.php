<?php
$servername = "localhost";
$username = "admin";
$password = "sunset";
$dbname = "mydb22";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

//$sql = "SELECT id, data FROM data WHERE id='22'";
//$sql = "SELECT * FROM data WHERE data='virsh'";
$sql = "SELECT * FROM data WHERE data LIKE'%psql%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {
    echo  "id:" . $row["id"]. "data:" . $row["data"] .  "<br>" ;
  }
} else {
  echo "0 results";
 
}
$conn->close();
?>