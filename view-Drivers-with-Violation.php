<div class="row">
  <div class="col">
    <h1>Drivers with Violations</h1>
  </div>
  <div class="col-auto">
    <!-- Button to trigger modal for adding a driver violation -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newDriverViolationModal">
      Add Driver Violation
    </button>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Driver Name</th>
        <th>Car Brand</th>
        <th>Violation Number</th>
        <th>Violation Reason</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($Driver = $Drivers->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $Driver['Drivers_id']; ?></td>
          <td><img src="https://via.placeholder.com/20" alt="Driver Icon" class="me-2"><?php echo $Driver['Drivers_name']; ?></td>
          <td><img src="https://via.placeholder.com/20" alt="Car Icon" class="me-2"><?php echo $Driver['Car_brand']; ?></td>
          <td>
            <!-- List violations for this driver -->
            <?php
            $Violations = selectViolationbyDrivers($Driver['Drivers_id']);
            while ($Violation = $Violations->fetch_assoc()) {
            ?>
              <p><?php echo $Violation['Violation_number']; ?> - <?php echo $Violation['Violation_reason']; ?></p>
            <?php } ?>
          </td>
          <td>
            <!-- Edit Button to trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editDriverViolationModal<?php echo $Driver['Drivers_id']; ?>">
              Edit
            </button>

            <!-- Delete Button -->
            <form method="post" action="" style="display:inline;">
              <input type="hidden" name="did" value="<?php echo $Driver['Drivers_id']; ?>">
              <input type="hidden" name="actionType" value="Delete">
              <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
                Delete
              </button>
            </form>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<!-- Include modals for Add and Edit functionality -->
<?php include "view-Drivers-with-Violation-newform.php"; ?>
<?php include "view-Drivers-with-Violation-editform.php"; ?>
