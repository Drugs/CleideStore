<?php
include '../database/Connection.php';
$a = 0;

$id = $_POST['cliente'];
$consulta = "SELECT * FROM suporte
left join cliente on suporte.fk_id_cliente = cliente.id_cliente
where `id_suporte` = '{$id}' or cliente.nome_cliente like '%{$id}%' or fK_id_pedido = '{$id}'";
$resultado= mysqli_query($connection, $consulta);
while ($dados = mysqli_fetch_array($resultado)) { 
      $row [] = $dados;
      $itens = count($row);
}
while ($a < $itens){
echo "
    
<div id='card'class='card mx-1 col-sm-3 mb-3 p-0'>
<div class='card-header'>{$row[$a]["nome_cliente"]}</div>
<div class='card-body'>
 <p class='card-text'>
 Id do pedido: {$row[$a]["fk_id_pedido"]}</br>
 Data do pedido: {$row[$a]["data_suporte"]}</br>
 Status do suporte: {$row[$a]["status_suporte"]}</br>
 </p>
 <div class= 'row  justify-content-center'>
 <a type='button' class='w-50 btn btn-green' href=  'index_detalhes_suporte.php?id={$row[$a]["id_suporte"]}&teste={$row[$a]["fk_id_pedido"]}'> Detalhes</a>
</div>
</div>
</div>

";
$a++;
}
?>