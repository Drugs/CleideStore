<?php
var_dump ($_POST);
$server = "localhost";
$user = "root";
$password = "";
$database = "test";
$nome = $_POST["nome"];
$tamanho = $_POST["tamanho"];
$cor = $_POST["cor"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$connection = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "Falha ao conectar " . mysqli_connect_error();
    exit();
}



$querry= "INSERT INTO `lista_produtos` (nome_prod, tamanho_prod, cor_prod, valor_prod, descricao_prod)
VALUES ('{$nome}', '{$tamanho}','{$cor}',{$preco},'{$descricao}')";

mysqli_query($connection, $querry);

$_GET['status'] = 0;

if (isset($_GET['status'])){
    
    header ("Location: index.php?confirmacao={$_GET['status']}"); 
};




?>