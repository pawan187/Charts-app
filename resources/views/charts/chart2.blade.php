<div class="carousel-container">
    <!-- Pie charts -->
    <div class="text-center">
        <h3>Donut Chart 1</h3> <!-- Title of the first chart -->
    </div>
    <div class="chart-slide">
        <canvas id="pieChart1"></canvas>
    </div>
    <div class="chart-slide">
        <canvas id="pieChart2"></canvas>
    </div>
    <div class="chart-slide">
        <canvas id="pieChart3"></canvas>
    </div>

    <!-- Navigation dots -->
    <div class="carousel-dots">
        <span class="dot" data-slide="0"></span>
        <span class="dot" data-slide="1"></span>
        <span class="dot" data-slide="2"></span>
    </div>
</div>

<style>
    .carousel-container {
        position: relative;
        width: 100%;
        height: 400px; /* Adjust as needed */
    }

    .chart-slide {
        display: none; /* Hide all slides initially */
        position: absolute;
        width: 100%;
        height: 100%;
    }

    /* Show the first slide by default */
    .chart-slide:first-of-type {
        display: block;
    }

    /* Navigation dots */
    .carousel-dots {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
    }

    .dot {
        height: 6px;
        width: 6px;
        margin: 0 5px;
        background-color: #bbb;
        border-radius: 50%;
        cursor: pointer;
    }

    .dot.active {
        background-color: #717171;
    }
</style>

<script>
    // Function to create a pie chart
    function createPieChart(canvasId, chartData) {
        const ctx = document.getElementById(canvasId).getContext('2d');
        return new Chart(ctx, {
            type: 'doughnut',
            data: chartData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                        position: 'bottom',
                    }
                }
            }
        });
    }

    // Define data for the pie charts
    const chartData1 = {
        labels: ['Red', 'Blue', 'Yellow'],
        datasets: [{
            data: [30, 50, 20],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
        }]
    };

    const chartData2 = {
        labels: ['Green', 'Purple', 'Orange'],
        datasets: [{
            data: [40, 30, 30],
            backgroundColor: ['#4BC0C0', '#9966FF', '#FF9F40'],
        }]
    };

    const chartData3 = {
        labels: ['Grey', 'Pink', 'Brown'],
        datasets: [{
            data: [35, 45, 20],
            backgroundColor: ['#C0C0C0', '#FF6384', '#8B4513'],
        }]
    };

    // Create the three pie charts
    const pieChart1 = createPieChart('pieChart1', chartData1);
    const pieChart2 = createPieChart('pieChart2', chartData2);
    const pieChart3 = createPieChart('pieChart3', chartData3);

    // Function to hide all slides except the one specified
    function hideAllSlidesExcept(index) {
        const slides = document.querySelectorAll('.chart-slide');
        slides.forEach((slide, i) => {
            slide.style.display = i === index ? 'block' : 'none';
        });
    }

    // Event listeners for the navigation dots
    const dots = document.querySelectorAll('.dot');
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            // Hide all slides except the one clicked
            hideAllSlidesExcept(index);
            
            // Update active dot
            dots.forEach(d => d.classList.remove('active'));
            dot.classList.add('active');
        });
    });

    // Initially, show the first slide and activate the first dot
    hideAllSlidesExcept(0);
    dots[0].classList.add('active');
</script>
