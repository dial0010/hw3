<div class="row">
  <div class="col">
    <h1>Officers</h1>
  </div>
  <div class="col-auto">
    <?php
  include "view-Officer-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Rank</th>
        <th></th>
        <th></th> 
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($Officer = $Officers->fetch_assoc()) {
?>
<tr>
    <td><?php echo $Officer['Officer_id']; ?></td>
    <td><?php echo $Officer['Office_name']; ?></td>
    <td><?php echo $Officer['Officer_rank']; ?></td>
  <td>
    <?php
  include "view-Officer-editform.php";
  ?>
  
  </td>
    <td>
       <form method="post" action="">
  <input type="hidden" name="oid" value="<?php echo $Officer['Officer_id']; ?>">
         <input type="hidden" name="actionType" value="Delete">
  <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 
  </svg>
  </button>
</form>
  </td>
     <td>
    <form method="post" action="City-by-Violation.php">
  <input type="hidden" name="did" value="<?php echo $Violations['Drivers_id']; ?>">
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