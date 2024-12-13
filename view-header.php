<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Chart.js CDN for creating charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
      /* Background Image CSS */
      body {
        background-image: url('https://i.pinimg.com/originals/0c/70/7a/0c707a0210628c527d14ab74ea6b842d.jpg'); /* Background image URL */
        background-size: cover; /* Make sure the background covers the whole page */
        background-position: center center; /* Center the image */
        background-attachment: fixed; /* Fix the background image while scrolling */
      }
      
      .container {
        margin-top: 20px; /* Add space from the top */
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.8); /* Optional: To make text easier to read */
        border-radius: 10px;
      }

      /* Navbar Customization */
      .navbar {
        background-color: rgba(0, 0, 0, 0.5); /* Transparent black for navbar */
      }
      .navbar-brand, .nav-link {
        color: white !important;
      }

      .navbar-nav .nav-link:hover {
        color: #f8f9fa !important; /* Lighter text color on hover */
      }

      /* Footer Styling */
      footer {
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 10px 0;
        text-align: center;
      }

      footer p {
        margin: 0;
      }

      /* Chart Style */
      .chart-container {
        max-width: 700px;
        margin: 20px auto;
      }

    </style>
  </head>
  <body>
    <div class="container">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Parking System</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Drivers.php">Drivers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Violation.php">Violation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Officer.php">Officers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Drivers-with-Violation.php">Drivers with Violation</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="TCourt.php">Trial Courts</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Add your content here -->

    </div> <!-- End of container -->

    <!-- Footer -->
    <footer>
      <p>&copy; 2024 Parking System. All Rights Reserved. | <a href="mailto:support@parkingsystem.com" style="color: white;">Contact Us</a></p>
    </footer>

    <!-- JavaScript and Chart.js Integration -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    
    <!-- Example Chart.js for Violation and Car Brand Data -->
    <script>
      // Violation Chart - Bar Chart Example
      var violationChartCtx = document.getElementById('violationChart').getContext('2d');
      var violationChart = new Chart(violationChartCtx, {
          type: 'bar',
          data: {
              labels: ['Parked without paying fee', 'Parked on handicap spot', 'Parked over line'],
              datasets: [{
                  label: 'Violation Frequency',
                  data: [10, 5, 3], // Example data (use dynamic data from PHP)
                  backgroundColor: ['#FF5733', '#33FF57', '#3357FF'],
                  borderColor: ['#FF5733', '#33FF57', '#3357FF'],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });

      // Car Brand Chart - Pie Chart Example
      var carBrandChartCtx = document.getElementById('carBrandChart').getContext('2d');
      var carBrandChart = new Chart(carBrandChartCtx, {
          type: 'pie',
          data: {
              labels: ['Nissan Sentra', 'Range Rover', 'Honda Accord', 'Ford Fiesta', 'Porsche Cayenne', 'Lamborghini', 'Hyundai Kona', 'Kia Soul'],
              datasets: [{
                  label: 'Car Brand Frequency',
                  data: [4, 2, 6, 5, 1, 1, 2, 3], // Example data (use dynamic data from PHP)
                  backgroundColor: ['#FF5733', '#33FF57', '#3357FF', '#FF5733', '#FFB533', '#B833FF', '#33B5FF', '#FF33B5'],
                  borderColor: ['#FF5733', '#33FF57', '#3357FF', '#FF5733', '#FFB533', '#B833FF', '#33B5FF', '#FF33B5'],
                  borderWidth: 1
              }]
          }
      });

      // Example of dynamically populating the chart data from PHP
      var violationData = <?php echo json_encode($violationData); ?>;
      violationChart.data.datasets[0].data = violationData;
      violationChart.update();

      var carBrandData = <?php echo json_encode($carBrandData); ?>;
      carBrandChart.data.datasets[0].data = carBrandData;
      carBrandChart.update();
    </script>
  </body>
</html>
