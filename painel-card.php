<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #sombra {
            -webkit-box-shadow: 7px 9px 23px 0px rgba(191,189,191,1);
            -moz-box-shadow: 7px 9px 23px 0px rgba(191,189,191,1);
            box-shadow: 7px 9px 23px 0px rgba(191,189,191,1);
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;" id="sombra">
                <div class="card-header">Total Clientes / Ano</div>
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center; font-size: 40px;">
                        <?php
                        include "conexao/conexao.php";
                        require_once 'vendor/autoload.php';

                        $sql = "SELECT SUM(quantidade) AS total FROM clientes";
                        $consulta = mysqli_query($conexao, $sql);
                        $dados = mysqli_fetch_array($consulta);
                        echo $dados['total'];

                        ?>
                    <span style="font-size: 10px;"> / unid</span>
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;" id="sombra">
                <div class="card-header">Faturamento / Ano</div>
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center; font-size: 40px;">
                        <?php
                        include "conexao/conexao.php";
                        include "connection.php";
                        require_once 'vendor/autoload.php';

                        $sql = "SELECT SUM(valor) AS total_venda FROM vendas";
                        $consulta = mysqli_query($conexao, $sql);
                        $dados = mysqli_fetch_array($consulta);
                        $valor = $dados['total_venda'];
                        echo 'R$ ' . number_format($valor, 2,',', '.');
                        ?>
                        <span style="font-size: 10px;"> / BRL</span>
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;" id="sombra">
                <div class="card-header">Total Vendas</div>
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center; font-size: 40px;">
                        <?php
                        include "conexao/conexao.php";
                        require_once 'connection.php';
                        require_once 'vendor/autoload.php';

                        $sql = "SELECT SUM(quantidade) AS total_quantidade FROM vendas";
                        $consulta = mysqli_query($conexao, $sql);
                        $dados = mysqli_fetch_array($consulta);
                        echo $dados['total_quantidade'];

                        ?>
                        <span style="font-size: 10px;"> / qnd</span>
                    </h5>

                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>