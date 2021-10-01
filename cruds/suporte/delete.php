<?php session_start();
include_once('conexao.php');
$id = $_GET['id'];

$consulta = "DELETE FROM `suporte` WHERE `id_suporte` = $id";

mysqli_query($mysqli, $consulta);

header('Location: relatorio.php');

?>