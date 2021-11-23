<?php
include '../database/Connection.php';
$nome = $_POST["nome"];
$tamanho = $_POST["tamanho"];
$cor = $_POST["cor"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];


$query= "INSERT INTO `produto` (nome_produto, tamanho_produto, cor_produto, valor_produto, desc_produto)
VALUES ('{$nome}', '{$tamanho}','{$cor}',{$preco},'{$descricao}')";

mysqli_query($connection, $query);
$_GET['status'] = 0;

if (isset($_GET['status'])){
    
    header ("Location: ../pages/index_produtos.php?confirmacao={$_GET['status']}"); 
    
};
?>
