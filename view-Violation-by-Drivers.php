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
  <td><?php echo $Violations['Violation_id']; ?></td>
    <td><?php echo $Violations['Violation_number']; ?></td>
    <td><?php echo $Violations['Violation_reason']; ?></td>
  <td><?php echo $Violations['Month']; ?></td>
  <td><?php echo $Violations['Day']; ?></td>
  <td><?php echo $Violations['Day_time']; ?></td>
</tr>
      <?php
}
?>
    </tbody>
  </table>
</div>
