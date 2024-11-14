

// salary chart
var ctx = document.getElementById('salaryChart').getContext('2d');

var chart = new Chart(ctx, {
    type: 'bar',  // Define chart type as 'bar'
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'], // 12 months labels
        datasets: [{
            label: 'Dataset 1',   // First group of bars
            data: [20, 45, 80, 65, 90, 40, 85, 55, 60, 80, 70, 65],  // Data for first group
            backgroundColor: '#005AA7',  // Color for the bars
            borderWidth: 1
        },
        {
            label: 'Dataset 2',   // Second group of bars
            data: [50, 75, 60, 90, 110, 60, 95, 70, 80, 65, 90, 85],  // Data for second group
            backgroundColor: '#033D6E',  // Color for the bars
            borderWidth: 1
        },
        {
            label: 'Dataset 3',   // Third group of bars
            data: [30, 55, 70, 100, 80, 75, 90, 95, 70, 100, 85, 70],  // Data for third group
            backgroundColor: '#005AA7',  // Color for the bars
            borderWidth: 1
        }
        ]
    },
    options: {
        scales: {
            x: {
                stacked: false,  // Ensure bars are grouped, not stacked
                ticks: {
                    autoSkip: false,  // Display all month labels
                }
            },
            y: {
                beginAtZero: true,  // Start y-axis from 0
                ticks: {
                    stepSize: 30,  // Set the step size for y-axis (i.e., 0, 30, 60, 90, 120)
                    max: 120,  // Set maximum value for y-axis
                }
            }
        },
        responsive: true,
    }
});


// Revenue Donut Chart
var ctx = document.getElementById('revenueChart').getContext('2d');

// Dynamic revenue data (you can modify this based on your dynamic values)
var revenueData = [70, 30]; // 70% revenue and 30% remainder

// Create the chart
var revenueChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Revenue'],
        datasets: [{
            label: 'Revenue Distribution',
            data: revenueData,
            backgroundColor: ['#033D6E', '#e1e1e1'],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        cutout: '70%', // Makes the doughnut thinner (cutout to 70%)
        plugins: {
            legend: {
                position: 'top',
            },
            tooltip: {
                callbacks: {
                    label: function (tooltipItem) {
                        return tooltipItem.label + ': ' + tooltipItem.raw + '%';  // Show percentage in tooltip
                    }
                }
            },
            datalabels: {
                display: false, // Disable default data labels
            }
        }
    }
});

// Simulating an API call that returns the revenue percentage data
function fetchRevenueData() {
    return new Promise((resolve) => {
        // Simulate an API call with setTimeout (replace this with actual API call)
        setTimeout(function () {
            // For demo purposes, we are returning the following dynamic value
            // Replace this logic with actual API response (e.g., fetch/axios call)
            const revenue = Math.floor(Math.random() * 100);  // Random value between 0-100
            resolve(revenue);
        }, 1000); // Simulate delay (1 second)
    });
}

// Function to update the revenue chart and center text
function updateRevenueData(revenuePercentage) {
    // Update the doughnut chart data
    var revenueData = [revenuePercentage, 100 - revenuePercentage]; // New data
    revenueChart.data.datasets[0].data = revenueData;  // Update chart dataset
    revenueChart.update();  // Redraw chart with new data

    // Update the center text
    document.getElementById('revenueCenterText').textContent = revenuePercentage + '%';
}

// Function to simulate fetching the revenue data every 3 seconds and updating the chart
function updateRevenueEveryFewSeconds() {
    setInterval(function () {
        // Fetch revenue data from the API (or simulate API response)
        fetchRevenueData().then((revenuePercentage) => {
            // Update the chart and center text with the new revenue data
            updateRevenueData(revenuePercentage);
        });
    }, 10000);  // Update every 3 seconds
}

// Start updating the revenue data every few seconds
updateRevenueEveryFewSeconds();

// Employee Satisfaction Line Chart
var ctx3 = document.getElementById('employeeSatisfactionChart').getContext('2d');

// Create gradient for the background
var gradient = ctx3.createLinearGradient(0, 0, 0, 400); // Creates a vertical gradient
gradient.addColorStop(0, 'rgba(0, 90, 167, 1)');
gradient.addColorStop(1, 'rgba(106, 175, 235, 0.5)');
// Create the chart
var employeeSatisfactionChart = new Chart(ctx3, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Satisfaction (%)',
            data: [35, 68, 50, 85, 72, 78],
            fill: true, // Enable filling under the line
            backgroundColor: gradient, // Apply gradient as background
            borderColor: '#005AA7', // Line color
            borderWidth: 2,
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                max: 100
            }
        }
    }
});

// Get the context of the canvas element
var ctx4 = document.getElementById('growthChart').getContext('2d');

// Create the Doughnut Chart with three datasets
var growthChart = new Chart(ctx4, {
    type: 'doughnut', // Define chart type as doughnut
    data: {
        labels: ['Dataset 1', 'Dataset 2', 'Dataset 3'], // Labels for each dataset
        datasets: [{
            label: 'Growth Distribution',
            data: [40, 30, 30], // Values for each dataset (sum of 100% for a full doughnut)
            backgroundColor: ['#D21DB1', '#534FEB', '#F45C87'], // Different colors for each segment
            borderWidth: 1, // Border width of the segments
        }]
    },
    options: {
        responsive: true, // Makes the chart responsive
        cutout: '70%', // Makes the doughnut thinner (cutout to 70%)
        plugins: {
            legend: {
                position: 'top', // Position of the legend
            },
            tooltip: {
                callbacks: {
                    label: function (tooltipItem) {
                        return tooltipItem.label + ': ' + tooltipItem.raw + '%'; // Display percentage in tooltip
                    }
                }
            }
        }
    }
});
