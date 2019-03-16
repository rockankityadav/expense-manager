<?php
$con=mysqli_connect("localhost","root","","db");

?>
<?php
$sql="select * from expense";
$run=mysqli_query($con,$sql);
while($num_row=(mysqli_fetch_array($run)))
{
    $water=$num_row['water'];
    $Elec=$num_row['Elec'];
        $Maint=$num_row['Maint'];
        $rent=$num_row['rent'];
        $other=$num_row['other'];
    
    ?>
<?php echo"water:";echo"$water";echo"<br>"; echo" Electricity:"; echo"$Elec"; echo"<br> Maintanance:";echo"$Maint";echo" <br>rent:";echo"$rent";echo"<br> other:";echo"$other"?>

<html>
<head>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">

window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		title:{
			text: "Expense  graph monthly"              
		},
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "column",
			dataPoints: [
				{ label: "January",  y: 43  },
				{ label: "february", y: 34 },
				{ label: "march", y: 12 },
				{ label: "april",  y: 55 }
			]
		}
		]
	});
	chart.render();
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
</body>
</html>
<?php
}
?>