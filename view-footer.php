</div>

<!-- Initialize JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<!-- AOS Scroll Animations -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<!-- SweetAlert2 for Alerts -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.js"></script>

<!-- Flatpickr Date Picker -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>

<!-- Animate.css for Animations -->
<script src="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.js"></script>

<!-- ECharts for Chart Visualization -->
<script src="https://cdn.jsdelivr.net/npm/echarts@5.3.3/dist/echarts.min.js"></script>

<script>
// Initialize AOS (Animate On Scroll)
AOS.init();

// Example SweetAlert2 Toast Notifications
setTimeout(function() {
    Swal.fire({
        title: 'Welcome!',
        text: 'Thanks for visiting the Parking HW3 website.',
        icon: 'success',
        confirmButtonText: 'OK'
    });
}, 2000);

// Example Flatpickr Date Picker Initialization
flatpickr("#date-picker", {
    dateFormat: "Y-m-d",
    minDate: "today"
});

// Chart.js (Alternative to ECharts)
var ctx = document.getElementById('carBrandChart').getContext('2d');
var carBrandChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['2015 Nissan Sentra SV', '2025 Range Rover Sport', '2020 Honda Accord', 'Ford Fiesta', 'Porsche Cayenne', 'Lambo', 'Hyundai Kona'],
        datasets: [{
            label: 'Car Brands',
            data: [10, 15, 8, 12, 5, 4, 7],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    }
});
</script>

</body>
</html>
