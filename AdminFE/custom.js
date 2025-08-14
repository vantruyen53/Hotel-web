document.addEventListener('DOMContentLoaded', () => {

    const textSecondaryColor = '#9ca3af';
    const gridColor = 'rgba(255, 255, 255, 0.1)';
    const primaryAccent = '#8b5cf6';

    // Common Chart.js options for dark theme
    const chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    color: textSecondaryColor,
                    font: {
                        family: "'Be Vietnam Pro', sans-serif"
                    }
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    color: textSecondaryColor,
                    font: { family: "'Be Vietnam Pro', sans-serif" }
                },
                grid: {
                    color: gridColor
                }
            },
            x: {
                ticks: {
                    color: textSecondaryColor,
                    font: { family: "'Be Vietnam Pro', sans-serif" }
                },
                grid: {
                    color: gridColor
                }
            }
        }
    };
    
    // --- DASHBOARD CHARTS ---

    // 1. Monthly Revenue Chart
    const monthlyRevenueCtx = document.getElementById('monthlyRevenueChart').getContext('2d');
    new Chart(monthlyRevenueCtx, {
        type: 'bar',
        data: {
            labels: ['JUN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
            datasets: [{
                label: 'REVENUA ($)',
                data: [120, 190, 300, 500, 220, 350],
                backgroundColor: primaryAccent,
                borderColor: primaryAccent,
                borderWidth: 1,
                borderRadius: 5
            }]
        },
        options: chartOptions
    });

    // 2. Product Category Chart
    const productCategoryCtx = document.getElementById('type-of-room').getContext('2d');
    new Chart(productCategoryCtx, {
        type: 'doughnut',
        data: {
            labels: ['RO51', 'RO52', 'RO53', 'RO54',' RO65', 'RO62', 'RO63', 'RO64','RO71', 'RO22', 'RO73', 'RO74','RO81', 'RO82', 'RO53', 'RO54'],
            datasets: [{
                label: 'REVENUA',
                data: [300, 50, 100, 80, 300, 50, 100, 80,300, 50, 100, 80],
                backgroundColor: [
                    '#8b5cf6', // Purple
                    '#3b82f6', // Blue
                    '#10b981', // Emerald
                    '#f59e0b'  // Amber
                ],
                borderColor: '#1f2937', // Card background color for spacing
                hoverOffset: 4
            }]
        },
        options: { ...chartOptions, plugins: { legend: { position: 'right', labels: { color: textSecondaryColor } } }, scales: {} }
    });

    // 3. New Orders Chart
    const newOrdersCtx = document.getElementById('newOrdersChart').getContext('2d');
    new Chart(newOrdersCtx, {
        type: 'line',
        data: {
            labels: ['WEEK 1', 'WEEK 2', 'WEEK 3', 'WEEK 4', 'WEEK 5', 'WEEK 6', 'WEEK 7', 'WEEK 8'],
            datasets: [{
                label: 'NEW BOOKING',
                data: [65, 59, 80, 81, 56, 55, 40, 90],
                fill: true,
                borderColor: '#10b981',
                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                tension: 0.4
            }]
        },
        options: chartOptions
    });

    // 4. New Customers Chart
    const newCustomersCtx = document.getElementById('newCustomersChart').getContext('2d');
    new Chart(newCustomersCtx, {
        type: 'line',
        data: {
            labels: ['WEEK 1', 'WEEK 2', 'WEEK 3', 'WEEK 4', 'WEEK 5', 'WEEK 6', 'WEEK 7', 'WEEK 8'],
            datasets: [{
                label: 'NEW CUSTOMER',
                data: [20, 25, 30, 41, 26, 35, 22, 45],
                fill: true,
                borderColor: '#f59e0b',
                backgroundColor: 'rgba(245, 158, 11, 0.1)',
                tension: 0.4
            }]
        },
        options: chartOptions
    });
});
