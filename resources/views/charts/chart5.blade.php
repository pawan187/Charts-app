
<div>
    <div class="text-center">
        <h3>Line Chart 5</h3> <!-- Title of the first chart -->
    </div>
    <canvas id="myChart5"></canvas>
</div>


<script>
    var ctx = document.getElementById('myChart5').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
                {
                    label: 'Point 1',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: true,
                },
                {
                    label: 'Point 2',
                    data: [28, 48, 40, 19, 86, 27, 90],
                    borderColor: 'rgba(153, 102, 255, 1)',
                    fill: true,
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom',
                    onClick: function() {
                        // Do nothing when legend items are clicked, making them unclickable
                        return false;
                    }
                },
            }
        }
    });
</script>
