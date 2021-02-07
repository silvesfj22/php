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

echo "<table border='1'>

<tr>
<th>id</th>
<th>data</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['data'] . "</td>";
echo "</tr>";
}

echo "</table>";

$conn->close();

?>