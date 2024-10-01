<script src="https://www.gstatic.com/charts/loader.js"></script>

<body>
    <div class="container" id="myChart" style="width:100%; max-width:600px; height:500px;">
    </div>

    <script>
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            // Set Data
            const data = google.visualization.arrayToDataTable([
                ['Danh Mục', 'Số Lượng Sản Phẩm'],
                <?php
                $tongDM = count($listthongKe);
                $i = 1;
                foreach ($listthongKe as $key => $value) {
                    if ($i == $tongDM)
                        $dauPhay = "";
                    else
                        $dauPhay = ",";
                    echo "[ '" . $value['tenDanhMuc'] . "', " . $value['countSP'] . "]$dauPhay";
                    $i++;
                }
                ?>
            ]);

            // Set Options
            const options = {
                title: 'Biểu đồ thống kê Danh mục'
            };

            // Draw
            const chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);

        }
    </script>