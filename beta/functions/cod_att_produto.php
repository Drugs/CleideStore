<?php
include '../database/Connection.php';
$nome = $_POST["nome"];
$tamanho = $_POST["tamanho"];
$cor = $_POST["cor"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$id = $_POST["id"];


$query= "UPDATE produto SET nome_produto='{$nome}', tamanho_produto='{$tamanho}', cor_produto='{$cor}', valor_produto={$preco},desc_produto='{$descricao}' WHERE id_produto={$id}";

mysqli_query($connection, $query);

$_GET['status'] = 2;

if (isset($_GET['status'])){
    
    header ("Location: ../pages/index_detalhes_produto.php?confirmacao={$_GET['status']}&id={$_POST['id']}"); 
};
?>