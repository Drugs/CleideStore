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
$id = $_POST["id"];

$connection = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "Falha ao conectar " . mysqli_connect_error();
    exit();
}



$querry= "UPDATE lista_produtos SET nome_prod='{$nome}', tamanho_prod='{$tamanho}', cor_prod='{$cor}', valor_prod={$preco},descricao_prod='{$descricao}' WHERE id_prod={$id}";
mysqli_query($connection, $querry);

$_GET['status'] = 2;

if (isset($_GET['status'])){
    
    header ("Location: index.php?confirmacao={$_GET['status']}"); 
};
?>