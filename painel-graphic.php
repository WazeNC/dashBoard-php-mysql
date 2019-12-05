<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Mes', 'Quantidade'],

                <?php
                include "conexao/conexao.php";
                include 'connection.php';
                $sql = "SELECT * FROM clientes";
                $buscar = mysqli_query($conexao, $sql);

                while($dados = mysqli_fetch_array($buscar)){
                   $mes = $dados['mes'];
                   $quantidade = $dados['quantidade'];
                ?>
                ['<?php echo $mes?>', <?php echo $quantidade?>],
               <?php } ?>
            ]);

            var options = {
                title: '',
                // curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart2);

        function drawChart2() {

            var data = google.visualization.arrayToDataTable([
                ['Vendas', 'Quantidade'],
                <?php
                include "conexao/conexao.php";
                include 'connection.php';
                $sql = "SELECT * FROM vendas ORDER BY id_venda ASC";
                $buscar = mysqli_query($conexao, $sql);

                while($dados = mysqli_fetch_array($buscar)){
                $mes = $dados['mes'];
                $quantidade = $dados['quantidade'];
                ?>

                ['<?php echo $mes?>', <?php echo $quantidade?>],
                <?php } ?>
            ]);

            var options = {
                title: ''
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
    <style>
        .sombra {
            -webkit-box-shadow: 7px 9px 23px 0px rgba(191,189,191,1);
            -moz-box-shadow: 7px 9px 23px 0px rgba(191,189,191,1);
            box-shadow: 7px 9px 23px 0px rgba(191,189,191,1);
        }
    </style>
</head>
<body>

<div class="container-fluid" style="margin-top: 5px;">
    <div class="row">
        <div class="col-md-8">
            <h4>Gráfico de Clientes</h4>
            <div id="curve_chart" class="sombra"></div>
        </div>
        <div class="col-md-4">
            <h4>Quantidade de Venda</h4>
            <div id="piechart" style="width: 288px;" class="sombra"></div>
        </div>
    </div>

</div>
</body>
</html>
