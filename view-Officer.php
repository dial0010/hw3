<h1>Officers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
      <th>Name</th>
      <th>Rank</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($Officers = $Officer->fetch_assoc()) {
?>
<tr>
  <td><?php echo $Officer['Officer_id']; ?></td>
    <td><?php echo $Officer['Office_name']; ?></td>
    <td><?php echo $Officer['Officer_rank']; ?></td>
</tr>
      <?php
}
?>
    </tbody>
  </table>
</div>
