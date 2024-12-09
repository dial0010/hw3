<!-- Modal for editing Driver Violation -->
<div class="modal fade" id="editDriverViolationModal<?php echo $Driver['Drivers_id']; ?>" tabindex="-1" aria-labelledby="editDriverViolationModalLabel<?php echo $Driver['Drivers_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editDriverViolationModalLabel<?php echo $Driver['Drivers_id']; ?>">Edit Driver Violation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <!-- Dropdown for Driver Name -->
          <div class="mb-3">
            <label for="dName" class="form-label">Driver Name</label>
            <select class="form-select" id="dName" name="dName">
              <?php
              // Fetch all drivers for the dropdown
              $Drivers = selectDrivers();
              while ($Driver = $Drivers->fetch_assoc()) {
              ?>
                <option value="<?php echo $driver['Drivers_id']; ?>" <?php echo ($Driver['Drivers_id'] == $driver['Drivers_id']) ? 'selected' : ''; ?>>
                  <?php echo $driver['Drivers_name']; ?>
                </option>
              <?php } ?>
            </select>
          </div>

          <!-- Car Brand -->
          <div class="mb-3">
            <label for="dBrand" class="form-label">Car Brand</label>
            <input type="text" class="form-control" id="dBrand" name="dBrand" value="<?php echo $Driver['Car_brand']; ?>">
          </div>

          <!-- Violation Number -->
          <div class="mb-3">
            <label for="vNumber" class="form-label">Violation Number</label>
            <input type="text" class="form-control" id="vNumber" name="vNumber" value="<?php echo $Violation['Violation_number']; ?>">
          </div>

          <!-- Violation Reason -->
          <div class="mb-3">
            <label for="vReason" class="form-label">Violation Reason</label>
            <input type="text" class="form-control" id="vReason" name="vReason" value="<?php echo $Violation['Violation_reason']; ?>">
          </div>

          <input type="hidden" name="actionType" value="Edit">
          <input type="hidden" name="did" value="<?php echo $Driver['Drivers_id']; ?>">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
