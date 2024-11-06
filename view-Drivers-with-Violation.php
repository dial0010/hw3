<h1>Drivers with Violation</h1>
  <div class="card-group">
<?php
while ($Driver = $Drivers->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $Driver['Drivers_name']; ?></h5>
      <p class="card-text">
        <ul class="list-group">
        <?php
  $Violations = selectViolationbyDrivers($Driver['Drivers_id']);
  while($Violation = $Violations->fetch_assoc()) {
    ?>
      <li class="list-group-item"><?php echo $Violation['Violation_number']; ?> - <?php echo $Violation['Month']; ?> - <?php echo $Violation['Day']; ?> - <?php echo $Violation['Day_time']; ?></li>
  <?php
  }
  ?>
        </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Car Brand: <?php echo $Driver['Car_brand']; ?></small></p>
    </div>
  </div>
      <?php
}
?>
</div>
