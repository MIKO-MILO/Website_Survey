<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Survei Pemanasan Global</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            text-align: center;
            color: #4CAF50;
        }
        .container {
            width: 90%;
            margin: 0 auto;
        }
        .chart-container {
            width: 300px;
            margin: 0 auto;
            margin-bottom: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            background-color: #fff;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        @media (max-width: 600px) {
            .chart-container {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Survei Pemanasan Global</h1>

        <!-- Grafik Pie dan Tabel untuk Pertanyaan 1 -->
        <h2>1. Apakah Anda percaya bahwa pemanasan global itu nyata?</h2>
        <div class="chart-container">
            <canvas id="pieChart1"></canvas>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Jawaban</th>
                    <th>Jumlah Responden</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop untuk menampilkan data dari database -->
                <?php
                    foreach ($question1_data as $label => $count) {
                        echo "<tr><td>$label</td><td>$count</td></tr>";
                    }
                ?>
            </tbody>
        </table>

        <!-- Grafik Pie dan Tabel untuk Pertanyaan 2 -->
        <h2>2. Seberapa khawatir Anda tentang dampak pemanasan global?</h2>
        <div class="chart-container">
            <canvas id="pieChart2"></canvas>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Jawaban</th>
                    <th>Jumlah Responden</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($question2_data as $label => $count) {
                        echo "<tr><td>$label</td><td>$count</td></tr>";
                    }
                ?>
            </tbody>
        </table>

        <!-- Grafik Pie dan Tabel untuk Pertanyaan 3 -->
        <h2>3. Seberapa sering Anda mendengar tentang isu pemanasan global di media?</h2>
        <div class="chart-container">
            <canvas id="pieChart3"></canvas>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Jawaban</th>
                    <th>Jumlah Responden</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($question3_data as $label => $count) {
                        echo "<tr><td>$label</td><td>$count</td></tr>";
                    }
                ?>
            </tbody>
        </table>

        <!-- Grafik Pie dan Tabel untuk Pertanyaan 4 -->
        <h2>4. Apakah Anda merasa perlu melakukan sesuatu untuk mengurangi pemanasan global?</h2>
        <div class="chart-container">
            <canvas id="pieChart4"></canvas>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Jawaban</th>
                    <th>Jumlah Responden</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($question4_data as $label => $count) {
                        echo "<tr><td>$label</td><td>$count</td></tr>";
                    }
                ?>
            </tbody>
        </table>

        <!-- Grafik Pie dan Tabel untuk Pertanyaan 5 -->
        <h2>5. Apakah Anda bersedia mengubah kebiasaan untuk mengurangi pemanasan global?</h2>
        <div class="chart-container">
            <canvas id="pieChart5"></canvas>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Jawaban</th>
                    <th>Jumlah Responden</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($question5_data as $label => $count) {
                        echo "<tr><td>$label</td><td>$count</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        // Pie Chart untuk Pertanyaan 1
        var ctx1 = document.getElementById('pieChart1').getContext('2d');
        var pieChart1 = new Chart(ctx1, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($question1_labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($question1_data); ?>,
                    backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe', '#ffce56'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });

        // Pie Chart untuk Pertanyaan 2
        var ctx2 = document.getElementById('pieChart2').getContext('2d');
        var pieChart2 = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($question2_labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($question2_data); ?>,
                    backgroundColor: ['#4bc0c0', '#ff9f40', '#ffcd56', '#c9cbcf'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });

        // Pie Chart untuk Pertanyaan 3
        var ctx3 = document.getElementById('pieChart3').getContext('2d');
        var pieChart3 = new Chart(ctx3, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($question3_labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($question3_data); ?>,
                    backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe', '#ffce56'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });

        // Pie Chart untuk Pertanyaan 4
        var ctx4 = document.getElementById('pieChart4').getContext('2d');
        var pieChart4 = new Chart(ctx4, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($question4_labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($question4_data); ?>,
                    backgroundColor: ['#36a2eb', '#ff6384', '#ffce56', '#cc65fe'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });

        // Pie Chart untuk Pertanyaan 5
        var ctx5 = document.getElementById('pieChart5').getContext('2d');
        var pieChart5 = new Chart(ctx5, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($question5_labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($question5_data); ?>,
                    backgroundColor: ['#4bc0c0', '#ff9f40', '#ffcd56', '#c9cbcf'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });
    </script>
</body>
</html>
