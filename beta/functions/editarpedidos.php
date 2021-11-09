<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "cleide_store_beta";
$id_pedido = $_POST["id"];
$tipo = $_POST["tipo"];
$cep = $_POST["cep"];
$endereco = $_POST["endereco"];
$data = $_POST["data"];
$status = $_POST["status"];
$id = $_POST['id'];


// Cria a conexão
$mysqli = mysqli_connect($servername, $username, $password, $bd);

$query = "UPDATE pedido SET `id_pedido`='$id',`tipo_entrega`='$tipo',`CEP_pedido`='$cep', `endereco_pedido`='$endereco',`data_pedido`='$data', `status_pedido`='$status' WHERE id_pedido='$id'";
mysqli_query($mysqli, $query);
header('Location: pedidos.php');
?>