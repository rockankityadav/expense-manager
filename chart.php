<!DOCTYPE html>
<html>
<head>
<title>Creating Dynamic Data Graph using PHP and Chart.js</title>
<style type="text/css">
BODY {
    width: 550PX;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="Chart.min.js"></script>


</head>
<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("retrieve.php",
                function (data)
                {
                    console.log(data);
                    
                    var expenses = [];

                    for (var i in data) {
                        month.push(data[i].month_name);
                        expenses.push(data[i].expenses);
                    }

                    var chartdata = {
                        labels: month name,
                        datasets: [
                            {
                                label: 'monthly expenses',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: expenses
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>

</body>
</html>