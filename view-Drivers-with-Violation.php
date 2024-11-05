<h1>Drivers with Violation</h1>
  <div class="card-group">
<?php
while ($Driver = $Drivers->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $Driver['Drivers_name']; ?></h5>
      <p class="card-text">
        <?php
  $Violation = selectViolationbyDrivers($Driver['Drivers_id']);
  while($Violation = $Violation->fetchassoc()) {
    ?>
  <?php
  }
  ?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Car Brand: <?php echo $Driver['Car_brand']; ?></small></p>
    </div>
  </div>
      <?php
}
?>
</div>
