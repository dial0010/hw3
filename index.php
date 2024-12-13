<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Welcome to the Parking System</h1>

        <!-- Search Bar & Filters -->
        <div class="search-section">
            <input type="text" class="form-control mb-3" id="search-bar" placeholder="Search parking spots...">
            <button class="btn btn-primary" onclick="searchParking()">Search</button>

            <!-- Filters -->
            <div class="filters mt-3">
                <select class="form-select" id="location-filter">
                    <option value="any">Any Location</option>
                    <option value="downtown">Downtown</option>
                    <option value="airport">Airport</option>
                </select>
                <select class="form-select" id="price-filter">
                    <option value="any">Any Price</option>
                    <option value="hourly">Hourly</option>
                    <option value="daily">Daily</option>
                    <option value="monthly">Monthly</option>
                </select>
            </div>
        </div>

        <!-- Parking Locations -->
        <h3>Available Parking Locations</h3>
        <div class="row">
            <!-- Example parking spot -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Parking Spot">
                    <div class="card-body">
                        <h5 class="card-title">Downtown Parking</h5>
                        <p class="card-text">Location: Downtown | Price: $10/hour</p>
                        <p><strong>Nearby Landmarks:</strong> City Mall, Central Park</p>
                        <p><strong>Availability:</strong> Available</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookParkingModal">Book Now</button>
                    </div>
                </div>
            </div>
            <!-- More parking spots can go here -->
        </div>

        <!-- Parking Modal -->
        <div class="modal fade" id="bookParkingModal" tabindex="-1" aria-labelledby="bookParkingModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bookParkingModalLabel">Book Parking</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="book-parking.php">
                            <div class="mb-3">
                                <label for="payment-method" class="form-label">Payment Method</label>
                                <select class="form-select" id="payment-method" name="payment-method">
                                    <option value="credit-card">Credit Card</option>
                                    <option value="paypal">PayPal</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Confirm Booking</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Inline JavaScript for search functionality -->
    <script>
        function searchParking() {
            var searchQuery = document.getElementById('search-bar').value;
            var locationFilter = document.getElementById('location-filter').value;
            var priceFilter = document.getElementById('price-filter').value;

            // Implement search logic here (e.g., AJAX request to filter parking spots)
            alert("Searching for: " + searchQuery + ", Location: " + locationFilter + ", Price: " + priceFilter);
        }
    </script>
</body>
</html>
