<?php
$username = $_POST['user'];
$password = $_POST['pass'];
$con = mysqli_connect('localhost',"root","r987654321");
mysqli_select_db($con,"login");
$result = mysqli_query("select * from user where username = '$username' and password = '$password'")
or die(mysql_error());
$row = mysql_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password)
{
    echo "Welcome $username";
}
else
{
    echo "user not found";
}

?>