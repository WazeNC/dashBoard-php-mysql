<?php
include "conexao/conexao.php";

$mes = $_POST['mes'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO clientes (mes, quantidade)
        VALUES ('$mes', $quantidade)";
$inserir = mysqli_query($conexao, $sql);

header('Location: dashboardTemplate.php?pagina=clientes');
?>