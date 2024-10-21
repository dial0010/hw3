<h1>Drivers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
      <h>Name</h>
      <h>Brand</h>
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
</tr>
      <?php
}
?>
    </tbody>
  </table>
</div>
