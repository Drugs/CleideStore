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
$id = $_POST['id'];


// Cria a conexão
$mysqli = mysqli_connect($servername, $username, $password, $bd);

$query = "UPDATE cliente SET nome='$nome',email='$email',cpf='$cpf', data_n='$data_n',endereco='$endereco' WHERE cliente_id='$id'";
mysqli_query($mysqli, $query);
header('Location: tabela.php');
?>