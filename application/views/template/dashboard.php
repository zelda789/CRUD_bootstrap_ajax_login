<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div style="margin-left: 150px; width: 500px; height: 500px;">
<canvas id="myChart" width="10" height="10"></canvas>
</div>
<script src="<?php echo base_url()?>assets/jquery/Chart.js"></script>
<!-- <?php

echo "<pre>";
print_r ($datajml);
echo "</pre>"; 

?>
 -->
</table>
<script>
var ctx = document.getElementById("myChart");
</script>
<script src="Chart.min.js"></script>
<script>


var data = {
    labels: ["Total Siswa", "Total Kelas"],
    datasets: [
        {
            label: "Data Smp 1 Karanggue",
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            data: [<?php echo count($datajml) ?>, <?php echo count($datakelas)?>],
        }
    ]
};

var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
        scales: {
            xAxes: [{
                stacked: true
            }],
            yAxes: [{
                stacked: true
            }]
        }
    }
});
</script>
</body>
</html>