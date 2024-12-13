<!-- view-footer.php -->
    <div class="container mt-5">
        <footer class="footer bg-dark text-light text-center py-3">
            <p>&copy; 2024 Parking System. All Rights Reserved.</p>
            <p>Contact us: support@parkingsystem.com</p>
        </footer>
    </div>

    <script>
        // Function to render the Violation chart
        var violationChartCtx = document.getElementById('violationChart').getContext('2d');
        var violationChart = new Chart(violationChartCtx, {
            type: 'bar',
            data: {
                labels: ['Parked without paying fee', 'Parked on handicap spot', 'Parked over line'],
                datasets: [{
                    label: 'Violation Frequency',
                    data: [10, 5, 3], // Example data (You should dynamically fill this data from PHP)
                    backgroundColor: ['#FF5733', '#33FF57', '#3357FF'],
                    borderColor: ['#FF5733', '#33FF57', '#3357FF'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Function to render the Driver Car Brand chart
        var carBrandChartCtx = document.getElementById('carBrandChart').getContext('2d');
        var carBrandChart = new Chart(carBrandChartCtx, {
            type: 'pie',
            data: {
                labels: ['Nissan Sentra', 'Range Rover', 'Honda Accord', 'Ford Fiesta', 'Porsche Cayenne', 'Lamborghini', 'Hyundai Kona', 'Kia Soul'],
                datasets: [{
                    label: 'Car Brand Frequency',
                    data: [4, 2, 6, 5, 1, 1, 2, 3], // Example data (You should dynamically fill this data from PHP)
                    backgroundColor: ['#FF5733', '#33FF57', '#3357FF', '#FF5733', '#FFB533', '#B833FF', '#33B5FF', '#FF33B5'],
                    borderColor: ['#FF5733', '#33FF57', '#3357FF', '#FF5733', '#FFB533', '#B833FF', '#33B5FF', '#FF33B5'],
                    borderWidth: 1
                }]
            }
        });

        // Fetching dynamic violation data from PHP (Example)
        var violationData = <?php echo json_encode($violationData); ?>;
        violationChart.data.datasets[0].data = violationData;
        violationChart.update();

        // Fetching dynamic car brand data from PHP (Example)
        var carBrandData = <?php echo json_encode($carBrandData); ?>;
        carBrandChart.data.datasets[0].data = carBrandData;
        carBrandChart.update();
    </script>

    <!-- Bootstrap JS and other scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
