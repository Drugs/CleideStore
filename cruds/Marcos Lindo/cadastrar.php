<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "test";
$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$data_n = $_POST["data_n"];
$endereco = $_POST["endereco"];

// Cria a conexão
$mysqli = mysqli_connect($servername, $username, $password, $bd);

$query = "INSERT INTO cliente (nome,email,cpf,data_n,endereco) VALUES (‘$nome’,’$email’,’$cpf’,’$data_n’,’$endereco’)";
mysqli_query($mysqli, $query);
header('Location: tabela.php');
?>