<h1>City by Violation</h1>
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
    while ($City = $City->fetch_assoc()) {
?>
<tr>
  <td><?php echo $City['Violation_id']; ?></td>
    <td><?php echo $City['Violation_number']; ?></td>
    <td><?php echo $City['Violation_reason']; ?></td>
  <td><?php echo $City['Month']; ?></td>
  <td><?php echo $City['Day']; ?></td>
  <td><?php echo $City['Day_time']; ?></td>
</tr>
      <?php
}
?>
    </tbody>
  </table>
</div>
