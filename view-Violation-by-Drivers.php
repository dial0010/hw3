<h1>Violations by Drivers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
      <th>Number</th>
      <th>Reason</th>
         <th>Month</th>
         <th>Day</th>
         <th>Day/ Time</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($Violations = $Violations->fetch_assoc()) {
?>
<tr>
  <td><?php echo $Violation['Violation_id']; ?></td>
    <td><?php echo $Violation['Violation_number']; ?></td>
    <td><?php echo $Violation['Violation_reason']; ?></td>
  <td><?php echo $Violation['Month']; ?></td>
  <td><?php echo $Violation['Day']; ?></td>
  <td><?php echo $Violation['Day_time']; ?></td>
</tr>
      <?php
}
?>
    </tbody>
  </table>
</div>
