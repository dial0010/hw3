<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>Parking HW3</h1>

<!-- Car Brands and Violations Charts -->
<div class="container mt-5">
  <h2>Car Brands Distribution</h2>
  <div id="carBrandChart" style="height: 400px;"></div>
</div>

<div class="container mt-5">
  <h2>Violation Types Distribution</h2>
  <div id="violationChart" style="height: 400px;"></div>
</div>

<?php
include "view-footer.php";
?>

<script src="https://cdn.jsdelivr.net/npm/echarts@5.3.3/dist/echarts.min.js"></script>
<script>
  // Car Brands Data
  var carBrandData = {
    title: 'Car Brands Distribution',
    seriesData: [
      { name: 'Nissan Sentra SV', value: 10 },
      { name: 'Range Rover Sport', value: 5 },
      { name: 'Honda Accord', value: 8 },
      { name: 'Ford Fiesta', value: 7 },
      { name: 'Porsche Cayenne', value: 4 },
      { name: 'Lambo', value: 3 },
      { name: 'Hyundai Kona', value: 6 }
    ]
  };

  // Violation Types Data
  var violationData = {
    title: 'Violation Types Distribution',
    seriesData: [
      { name: 'Parked without paying fee', value: 15 },
      { name: 'Parked on handicap spot', value: 10 },
      { name: 'Parked over line', value: 5 }
    ]
  };

  // Car Brands Pie Chart
  var carBrandChart = echarts.init(document.getElementById('carBrandChart'));
  var carBrandOption = {
    title: {
      text: carBrandData.title,
      left: 'center'
    },
    tooltip: {
      trigger: 'item',
      formatter: '{b}: {c} ({d}%)'
    },
    series: [
      {
        type: 'pie',
        radius: '50%',
        data: carBrandData.seriesData,
        emphasis: {
          itemStyle: {
            shadowBlur: 10,
            shadowOffsetX: 0,
            shadowColor: 'rgba(0, 0, 0, 0.5)'
          }
        }
      }
    ]
  };
  carBrandChart.setOption(carBrandOption);

  // Violation Types Bar Chart
  var violationChart = echarts.init(document.getElementById('violationChart'));
  var violationOption = {
    title: {
      text: violationData.title,
      left: 'center'
    },
    tooltip: {},
    xAxis: {
      type: 'category',
      data: violationData.seriesData.map(item => item.name)
    },
    yAxis: {
      type: 'value'
    },
    series: [
      {
        data: violationData.seriesData.map(item => item.value),
        type: 'bar'
      }
    ]
  };
  violationChart.setOption(violationOption);
</script>

