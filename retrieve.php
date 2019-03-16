<?php
header('Content-Type: application/json');
$con=mysqli_connect("localhost","root","","db");
$sqlQuery = "SELECT elec,maint,water,rent,other FROM expenses ORDER BY month"";

$result = mysqli_query($con,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($con);

echo json_encode($data);
?>