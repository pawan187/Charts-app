<canvas id="barLineChart"></canvas>

<script>
    // Define data for the chart
    const chartData4 = {
        labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6', 'Day 7'],
        datasets: [
            {
                type: 'bar', // Bar chart dataset
                label: 'Bar Data',
                data: [10, 20, 15, 30, 25, 40, 35],
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
            },
            {
                type: 'line', // Line chart dataset
                label: 'Line Data',
                data: [5, 15, 20, 25, 30, 35, 40],
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 2,
                fill: false, // Line chart should not be filled
            }
        ]
    };

    // Initialize the chart
    var ctx = document.getElementById('barLineChart').getContext('2d');
    const barLineChart = new Chart(ctx, {
        type: 'bar', // Set the chart type to 'bar' for mixed type charts
        data: chartData4,
        options: {
            responsive: true,
            plugins: {
                tooltip: {
                    callbacks: {
                        // Customize tooltip content
                        label: function(context) {
                            // Get the dataset label and the value for the hovered day
                            const datasetLabel = context.dataset.label || '';
                            const value = context.raw;

                            // Return the tooltip text for the hovered day
                            return `${datasetLabel} - Day ${context.label}: Value = ${value}`;
                        }
                    }   
                },
                legend: {
                    display: true,
                    position: 'bottom',
                }
            },
            scales: {
                x: {
                    beginAtZero: true,
                    type: 'category', // Use 'category' type for x-axis
                    title: {
                        display: true,
                        text: 'Days'
                    }
                },
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Values'
                    }
                }
            }
        }
    });
</script>
