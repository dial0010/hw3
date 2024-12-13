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
        <img src="https://jmthompson.com/wp-content/uploads/2018/10/parkingdeck_conrad-104-scaled.jpg" alt="Spot 1" class="img-fluid">
        <h3>Spot 1</h3>
        <p>Location: Downtown Area</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="parking-spot">
        <img src="https://www.embarkok.com/assets/images/Parking/Sheridan_Walker.jpg" alt="Spot 2" class="img-fluid">
        <h3>Spot 2</h3>
        <p>Location: Near City Hall</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="parking-spot">
        <img src="https://bloximages.newyork1.vip.townnews.com/oudaily.com/content/tncms/assets/v3/editorial/f/0a/f0a2778e-99f5-11e4-893e-d7abb268b478/54b31cd1ee9ad.image.jpg" alt="Spot 3" class="img-fluid">
        <h3>Spot 3</h3>
        <p>Location: Close to University</p>
      </div>
    </div>
  </div>
</div>

<?php
include "view-footer.php";
?>
