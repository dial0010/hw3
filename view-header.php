<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
      /* Background Image CSS */
      body {
        background-image: url('https://i.pinimg.com/originals/0c/70/7a/0c707a0210628c527d14ab74ea6b842d.jpg'); /* Background image URL */
        background-size: cover; /* Make sure the background covers the whole page */
        background-position: center center; /* Center the image */
        background-attachment: fixed; /* Fix the background image while scrolling */
      }
      
      .container {
        margin-top: 20px; /* Add space from the top */
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.8); /* Optional: To make text easier to read */
        border-radius: 10px;
      }

      /* Navbar Customization */
      .navbar {
        background-color: rgba(0, 0, 0, 0.5); /* Transparent black for navbar */
      }
      .navbar-brand, .nav-link {
        color: white !important;
      }

      .navbar-nav .nav-link:hover {
        color: #f8f9fa !important; /* Lighter text color on hover */
      }
    </style>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
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
               <li class="nav-item">
                <a class="nav-link" href="TCourt.php">Trial Courts</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
