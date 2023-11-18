<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>
<canvas id="myCharts" style="width:100%;max-width:600px"></canvas>

<script>
const xValue = [50,60,70,80,90,100,110,120,130,140,150];
const yValue = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myCharts", {
  type: "line",
  data: {
    labels: xValue,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValue
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
    
  }
});
</script>

</body>
</html>


