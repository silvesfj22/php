<?php

$search = $_POST['search'];

$servername = "localhost";
$username = "admin";
$password = "sunset";
$db = "mydb22";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from data where data like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["id"]."  ".$row["data"].  "<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>