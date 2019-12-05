<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Cidade', 'População',  { role: 'annotation' }],
                <?php
                    include 'conexao/conexao.php';
                    include 'connection.php';
                    require_once 'vendor/autoload.php';

                $sql = 'SELECT * FROM cidades';
                    $buscar = mysqli_query($conexao, $sql);

                    while($data = mysqli_fetch_array($buscar)){
                        $cidade = $data['cidade'];
                        $populacao = $data['populacao'];


                ?>
                ['<?php echo $cidade?> ',  <?php echo $populacao?>, <?php echo $populacao?> ],

                <?php } ?>
            ]);

            var options = {
                title: 'População das Cidades',
                curveType: 'function',
                legend: { position: 'top' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('grafico_linha'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="grafico_linha" style="height: 400px; width: 1200px"></div>
</body>
</html>
