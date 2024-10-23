<h1>Drivers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
      <th>Name</th>
      <th>Brand</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($Driver = $Drivers->fetch_assoc()) {
?>
<tr>
  <td><?php echo $Driver['Drivers_id']; ?></td>
    <td><?php echo $Driver['Drivers_name']; ?></td>
    <td><?php echo $Driver['Car_brand']; ?></td>
  <td><a href ="Violation-by-Drivers.php?id=<?php echo $Driver['Drivers_id']; ?>">Violation</a></td>
</tr>
      <?php
}
?>
    </tbody>
  </table>
</div>
