<!DOCTYPE html>
<?php
include("admin/includes/db.php");
?>
<html>
<head>
<style>
select
{
	width: 70%;
	height: 85%;
}
select option
{
	size: 20px;
}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM countries WHERE country_id = '".$q."'";
$result = mysqli_query($con,$sql);
echo "<select >";
while($row = mysqli_fetch_array($result)) {
	
    
    echo "<option>". $row['State_name'] ."</option>";
   
}
echo "</select>";
mysqli_close($con);
?>
</body>
</html>