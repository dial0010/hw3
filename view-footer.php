</div>

<script>
// Initialize Notyf.js for Toast Notifications
const notyf = new Notyf({
    duration: 3000,
    position: { x: 'right', y: 'top' }
});

// Example toast notification
setTimeout(function() {
    notyf.success('Welcome to Parking HW3!');
}, 2000);

// Initialize Parsley.js for form validation
$(document).ready(function() {
    // Example: Validate a form with Parsley
    $('form').parsley();
});

// jQuery code for Dynamic Active Navbar Link Highlighting
$('#navbarNav .nav-link').on('click', function() {
    $('#navbarNav .nav-link').removeClass('active');
    $(this).addClass('active');
});

// ECharts Chart Initialization (Car Brand and Violation Type)
function initCharts() {
    var carBrandChart = echarts.init(document.getElementById('carBrandChart'));
    var violationChart = echarts.init(document.getElementById('violationChart'));

    // Bar chart for Car Brands
    var carBrandOption = {
        title: {
            text: 'Car Brands Used by Drivers'
        },
        tooltip: {},
        xAxis: {
            type: 'category',
            data: ['Toyota', 'Honda', 'BMW', 'Ford', 'Chevrolet']
        },
        yAxis: {
            type: 'value'
        },
        series: [{
            data: [10, 15, 5, 20, 8],
            type: 'bar'
        }]
    };

    carBrandChart.setOption(carBrandOption);

    // Pie chart for Violation Types
    var violationOption = {
        title: {
            text: 'Violation Types',
            subtext: 'Types of Violations',
            left: 'center'
        },
        tooltip: {
            trigger: 'item',
            formatter: '{a} <br/>{b}: {c} ({d}%)'
        },
        series: [{
            name: 'Violation Type',
            type: 'pie',
            radius: '50%',
            data: [
                { value: 40, name: 'Speeding' },
                { value: 25, name: 'Parking' },
                { value: 15, name: 'Signal Violation' },
                { value: 10, name: 'Drunk Driving' },
                { value: 10, name: 'Other' }
            ]
        }]
    };

    violationChart.setOption(violationOption);
}

// Initialize charts on page load
window.onload = initCharts;
</script>
</body>
</html>
