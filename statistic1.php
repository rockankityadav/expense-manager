<?php
$sel=mysqli_query($con,"select * from expense");
echo"registereed succesfully
<br>
Your values will be:";
while($row=mysqli_fetch_array($set))
{
$abcd=$row['water_d'];
}

?>
echo $abcd