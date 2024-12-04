<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Parking Oklahoma</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Drivers.php">Drivers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Violation.php">Violation</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="Officer.php">Officers</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="Drivers-with-Violation.php">Drivers with Violation</a>
              </li>  
            </ul>
            <!-- Search form -->
            <form class="d-flex" action="search-results.php" method="get">
              <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search" name="query">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
