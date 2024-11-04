<h1>Drivers with Violation</h1>
  <div class="card-group">
<?php
while ($Driver = $Drivers->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $Driver['Drivers_name']; ?></h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
<tr>
  <td><?php echo $Driver['Drivers_id']; ?></td>
    <td><?php echo $Driver['Drivers_name']; ?></td>
    <td><?php echo $Driver['Car_brand']; ?></td>
  <td><a href ="Violation-by-Drivers.php?id=<?php echo $Driver['Drivers_id']; ?>">Violation</a></td>
</tr>
      <?php
}
?>
</div>
