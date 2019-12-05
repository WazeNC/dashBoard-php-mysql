<html>
<head>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Cidade', 'População',  { role: 'style' }],
                <?php
                include 'conexao/conexao.php';
                include 'connection.php';
                $sql = 'SELECT * FROM cidades';
                $buscar = mysqli_query($conexao, $sql);

                while($data = mysqli_fetch_array($buscar)){
                $cidade = $data['cidade'];
                $populacao = $data['populacao'];


                ?>
                ['<?php echo $cidade?> ',  <?php echo $populacao?>, '#8258FA' ],

                <?php } ?>
            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                { calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation" },
                2]);

            var options = {
                title: "População das Cidades",
                // width: 900,
                height: 400,
                bar: {groupWidth: "90%"},
                legend: { position: "top" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("grafico_coluna"));
            chart.draw(view, options);
        }
    </script>
</head>
<body>
<div id="grafico_coluna" style="height: 500px"></div>
</body>
</html>
