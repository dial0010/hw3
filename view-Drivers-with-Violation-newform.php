<!-- Modal for adding new Driver Violation -->
<div class="modal fade" id="newDriverViolationModal" tabindex="-1" aria-labelledby="newDriverViolationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newDriverViolationModalLabel">New Driver Violation</h1>
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
              $drivers = selectDrivers();
              while ($driver = $drivers->fetch_assoc()) {
              ?>
                <option value="<?php echo $driver['Drivers_id']; ?>"><?php echo $driver['Drivers_name']; ?></option>
              <?php } ?>
            </select>
          </div>

          <!-- Car Brand -->
          <div class="mb-3">
            <label for="dBrand" class="form-label">Car Brand</label>
            <input type="text" class="form-control" id="dBrand" name="dBrand">
          </div>

          <!-- Violation Number -->
          <div class="mb-3">
            <label for="vNumber" class="form-label">Violation Number</label>
            <input type="text" class="form-control" id="vNumber" name="vNumber">
          </div>

          <!-- Violation Reason -->
          <div class="mb-3">
            <label for="vReason" class="form-label">Violation Reason</label>
            <input type="text" class="form-control" id="vReason" name="vReason">
          </div>

          <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
