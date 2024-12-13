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

// Fetch car brand data for the chart
$carBrands = [];
$carBrandsCount = [];
while ($Driver = $Drivers->fetch_assoc()) {
    $carBrand = $Driver['Car_brand'];
    if (isset($carBrands[$carBrand])) {
        $carBrands[$carBrand]++;
    } else {
        $carBrands[$carBrand] = 1;
    }
}

// Convert the data to a format suitable for the chart
$carBrandNames = array_keys($carBrands);
$carBrandCounts = array_values($carBrands);
?>

<div class="container">
    <h1 class="my-4">Driver Management</h1>

    <!-- Chart for Car Brands -->
    <canvas id="carBrandChart"></canvas>

    <script>
    // Chart for grouping drivers by car brand
    var ctx = document.getElementById('carBrandChart').getContext('2d');
    var carBrandChart = new Chart(ctx, {
        type: 'bar', // Bar chart
        data: {
            labels: <?php echo json_encode($carBrandNames); ?>, // Car brand names
            datasets: [{
                label: 'Drivers per Car Brand',
                data: <?php echo json_encode($carBrandCounts); ?>, // Car brand counts
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>

    <!-- Driver Management Form and Table... (existing code for adding, deleting, and editing drivers) -->

</div>

<?php include "view-footer.php"; ?>
