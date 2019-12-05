<?php
include "conexao/conexao.php";
include 'connection.php';
require __DIR__ . 'vendor/autoload.php';


$mes = $_POST['mes'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO clientes (mes, quantidade)
        VALUES ('$mes', $quantidade)";
$inserir = mysqli_query($conexao, $sql);

header('Location: index.php?pagina=clientes');
?>