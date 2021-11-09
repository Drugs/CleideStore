
<?php
include '../database/Connection.php';
var_dump ($_POST);
$id = $_POST["id"];
$cliente = $_POST["cliente"];
$pedido = $_POST["pedido"];
$status= $_POST["status"];
$descricao = $_POST['descricao'];


$querry= "UPDATE suporte SET fk_id_cliente={$cliente}, status_suporte='{$status}', informacoes_suporte='{$descricao}' WHERE id_suporte={$id}";
echo $querry;
mysqli_query($connection, $querry);

$_GET['status'] = 2;

if (isset($_GET['status'])){
    
    header ("Location: ../pages/index_detalhes_suporte.php?confirmacao={$_GET['status']}&id={$_POST['id']}&teste={$_POST['pedido']}"); 
};

?>
