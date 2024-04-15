<div class="text-center">
    <h3>line Chart 2</h3> <!-- Title of the first chart -->
</div>
<canvas id="myChart3"></canvas>

<script>
    // Define data for the chart
    const chartData = {
        labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6', 'Day 7'],
        datasets: [{
            label: 'Example Data',
            data: [10, 20, 15, 30, 25, 40, 35],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
        }]
    };

    // Initialize the chart
    var ctx = document.getElementById('myChart3').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: chartData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false,
                },
                tooltip: {
                    callbacks: {
                        // Customize tooltip content
                        label: function(context) {
                            const label = context.dataset.label || '';
                            const value = context.raw;

                            // Customize the hover text (tooltip text)
                            return `${label} - Day ${context.label}: Value = ${value}`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
