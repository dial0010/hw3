<?php
require_once("util-db.php");  
require_once("model-Drivers.php");

$pageTitle = "Drivers";
include "view-header.php";

// Handling form submissions
if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertDrivers($_POST['dName'], $_POST['dBrand'])) {
                echo '<div class="alert alert-success" role="alert">Driver added successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error adding driver.</div>';
            }
            break;
        case "Delete":
            if (deleteDrivers($_POST['did'])) {
                echo '<div class="alert alert-success" role="alert">Driver deleted successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error deleting driver.</div>';
            }
            break;
        case "Edit":
            if (updateDrivers($_POST['dName'], $_POST['dBrand'], $_POST['did'])) {
                echo '<div class="alert alert-success" role="alert">Driver updated successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error updating driver.</div>';
            }
            break;
    }
}

// Fetching all drivers
$Drivers = selectDrivers();

// Count car brands
$carBrands = ["Nissan", "Range Rover", "Honda", "Ford", "Porsche", "Lambo", "Hyundai", "KIA"];
$brandCounts = array_fill_keys($carBrands, 0); // Initialize counts to 0

// Count drivers by brand
foreach ($Drivers as $driver) {
    $brand = $driver['dBrand'];
    if (in_array($brand, $carBrands)) {
        $brandCounts[$brand]++;
    }
}

// Prepare data for the chart
$labels = array_keys($brandCounts);
$data = array_values($brandCounts);

?>

<!-- Bar chart displaying the car types -->
<div class="container mt-5">
  <h2>Car Brands Distribution</h2>
  <canvas id="carBrandChart" width="400" height="200"></canvas>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    var ctx = document.getElementById('carBrandChart').getContext('2d');
    var carBrandChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [{
          label: 'Number of Drivers',
          data: <?php echo json_encode($data); ?>,
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(100, 255, 218, 0.2)',
            'rgba(144, 238, 144, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(100, 255, 218, 1)',
            'rgba(144, 238, 144, 1)'
          ],
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
  </script>
</div>

<!-- Display all drivers -->
<div class="container mt-5">
  <h2>Drivers List</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Car Brand</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($Drivers as $driver): ?>
        <tr>
          <td><?php echo htmlspecialchars($driver['dName']); ?></td>
          <td><?php echo htmlspecialchars($driver['dBrand']); ?></td>
          <td>
            <form method="POST" action="drivers.php" style="display:inline;">
              <input type="hidden" name="did" value="<?php echo $driver['dID']; ?>" />
              <button type="submit" name="actionType" value="Delete" class="btn btn-danger">Delete</button>
            </form>
            <form method="POST" action="drivers.php" style="display:inline;">
              <input type="hidden" name="did" value="<?php echo $driver['dID']; ?>" />
              <button type="submit" name="actionType" value="Edit" class="btn btn-warning">Edit</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?php
include "view-footer.php";
?>
