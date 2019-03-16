<?php




//calling categories

function getcats()
{
	$con = mysqli_connect("127.0.0.1", "root", "r987654321", "ecommerce");
	$cat_query = "select * from category";
	$cat_run = mysqli_query($con, $cat_query);
	while ($row_table = mysqli_fetch_array($cat_run)) {
		$cat_id = $row_table['cat_id'];
		$cat_title = $row_table['cat_title'];

	echo "<a href='#'>$cat_title</a>";
	echo "<br>";
	}
}



?>