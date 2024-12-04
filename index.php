<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>Parking Oklahoma</h1>

<!-- Search bar section -->
<div class="container mt-4">
  <form action="search-results.php" method="get">
    <div class="row">
      <div class="col-12 col-md-8">
        <input type="text" class="form-control" placeholder="Search for parking violations..." name="query" id="query">
      </div>
      <div class="col-12 col-md-4">
        <button type="submit" class="btn btn-primary w-100">Search</button>
      </div>
    </div>
  </form>
</div>

<?php
include "view-footer.php";
?>
