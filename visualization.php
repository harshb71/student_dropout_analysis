<!-- dropout_analysis.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropout Analysis - Bar Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <h1>Dropout Analysis - Students</h1>
    <canvas id="dropoutChart" width="200" height="70"></canvas>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dropoutstudents";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query to get the count of students by dropout reason
    $query = "SELECT reason, COUNT(*) as count FROM students GROUP BY reason";
    $result = mysqli_query($conn, $query);

    $reasons = [];
    $student_counts = [];

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $reasons[] = $row['reason'];
            $student_counts[] = $row['count'];
        }
    }
    ?>

    <script>
        var ctx = document.getElementById('dropoutChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',  // Bar chart type
            data: {
                labels: <?php echo json_encode($reasons); ?>,  // X-axis: Dropout reasons
                datasets: [{
                    label: 'Number of Students',
                    data: <?php echo json_encode($student_counts); ?>,  // Y-axis: Student counts
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true  // Ensures Y-axis starts from 0
                    }
                },
                plugins: {
                    legend: {
                        display: true
                    }
                }
            }
        });
    </script>

</body>
</html>
