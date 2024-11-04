<h1>Violations</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
      <th>Number</th>
      <th>Reason</th>
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
</tr>
      <?php
}
?>
    </tbody>
  </table>
</div>
