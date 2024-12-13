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
        <img src="images/spot1.jpg" alt="Spot 1" class="img-fluid">
        <h3>Spot 1</h3>
        <p>Location: Downtown Area</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="parking-spot">
        <img src="images/spot2.jpg" alt="Spot 2" class="img-fluid">
        <h3>Spot 2</h3>
        <p>Location: Near City Hall</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="parking-spot">
        <img src="images/spot3.jpg" alt="Spot 3" class="img-fluid">
        <h3>Spot 3</h3>
        <p>Location: Close to University</p>
      </div>
    </div>
  </div>
</div>

<?php
include "view-footer.php";
?>
