<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>

<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
<?php $ddffr='January' ?>
<?php $ddff='60' ?>
<script>
var xValues = ["<?php echo $ddffr ?>", "France", "Spain", "USA", "Argentina"];
var yValues = [55, <?php echo $ddff ?>, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});
</script>

</body>
</html>
