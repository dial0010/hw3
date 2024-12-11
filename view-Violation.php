<h1 class="animate__animated animate__fadeIn">Violations</h1>
<div class="table-responsive">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Number</th>
        <th>Reason</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
        while ($Violation = $Violations->fetch_assoc()) {
      ?>
      <tr data-aos="fade-up">
        <td><?php echo $Violation['Violation_id']; ?></td>
        <td><?php echo $Violation['Violation_number']; ?></td>
        <td><?php echo $Violation['Violation_reason']; ?></td>
        <td>
          <form method="post" action="City-by-Violation.php">
            <input type="hidden" name="cid" value="<?php echo $Violation['Violation_id']; ?>">
            <button type="submit" class="btn btn-primary">City</button>
          </form>
        </td>
      </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
</div>
