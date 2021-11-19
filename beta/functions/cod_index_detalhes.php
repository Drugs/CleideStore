<?php
include '../database/Connection.php';
$id = $_GET["id"];
$teste = $_GET["teste"];

$consulta_detalhes = "SELECT * FROM cliente
join suporte on cliente.id_cliente = suporte.fk_id_cliente ";


if ($teste != NULL){
      $consulta_detalhes .= "join pedido on pedido.fk_id_cliente = cliente.id_cliente
      join item_pedido on item_pedido.fk_id_pedido = pedido.id_pedido 
      join produto on produto.id_produto = item_pedido.fk_id_produto
      JOIN cupom on cupom.id_cupom = pedido.fk_id_cupom ";
}
$consulta_detalhes .= "WHERE id_suporte = {$id};";
$resultado_detalhes = mysqli_query ($connection, $consulta_detalhes);
$dados_detalhes = mysqli_fetch_assoc($resultado_detalhes);
$row = $dados_detalhes;

include "tabela_detalhes_suporte.php";
?>