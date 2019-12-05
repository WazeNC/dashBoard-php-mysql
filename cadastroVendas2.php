<?php
include "conexao/conexao.php";
include "connection.php";

$mes = $_POST['mes'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];

$sql = "INSERT INTO vendas (mes, quantidade, valor)
        VALUES ('$mes', $quantidade, $valor)";
$inserir = mysqli_query($conexao, $sql);

header('Location: index.php?pagina=vendas');
?>