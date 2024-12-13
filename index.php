<?php
$pageTitle = "Home";
include "view-header.php";
?>

<!-- Add content for the home page -->
<div class="text-center text-white">
  <h1>Welcome to Parking Oklahoma</h1>
  <p>Your go-to source for managing parking information</p>
</div>

<!-- Parking spots section -->
<div class="container mt-5">
  <div class="row text-center">
    <div class="col-md-4">
      <div class="parking-spot">
        <img src="https://via.placeholder.com/400x300?text=Spot+1" alt="Spot 1" class="img-fluid">
        <h3>Spot 1</h3>
        <p>Location: Downtown Area</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="parking-spot">
        <img src="https://via.placeholder.com/400x300?text=Spot+2" alt="Spot 2" class="img-fluid">
        <h3>Spot 2</h3>
        <p>Location: Near City Hall</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="parking-spot">
        <img src="https://via.placeholder.com/400x300?text=Spot+3" alt="Spot 3" class="img-fluid">
        <h3>Spot 3</h3>
        <p>Location: Close to University</p>
      </div>
    </div>
  </div>
</div>

<?php
include "view-footer.php";
?>
