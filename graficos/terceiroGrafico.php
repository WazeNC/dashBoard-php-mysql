<html>
<head>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Cidade', 'População'],
                <?php
                include 'conexao/conexao.php';
                include 'connection.php';
                require_once 'vendor/autoload.php';

                $sql = 'SELECT * FROM heroku_c8a87aadafff651.cidades';
                $buscar = mysqli_query($conexao, $sql);

                while($data = mysqli_fetch_array($buscar)){
                $cidade = $data['cidade'];
                $populacao = $data['populacao'];


                ?>
                ['<?php echo $cidade?> ',  <?php echo $populacao?> ],

                <?php } ?>
            ]);

            var options = {
                title: 'População de Cidades'
            };

            var chart = new google.visualization.PieChart(document.getElementById('grafico_pizza'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="grafico_pizza" style="height: 400px; width: 400px;"></div>
</body>
</html>
