<?php

include '../database/Connection.php';
$consulta = "SELECT * FROM `produto`";
$busca = mysqli_query($connection, $consulta);
$a = 0;
while ($resultado = mysqli_fetch_assoc($busca) and $a < 30){
    $row [] = $resultado; 
    echo "
    <div id='card'class='card mx-1 col-sm-3 mb-3 p-0'>
    <div class='card-header'>{$row[$a]["nome_produto"]}</div>
    <div class='card-body'>
    <p class='card-text'>
    Valor: {$row[$a]["valor_produto"]}</br>
    Tamanho: {$row[$a]["tamanho_produto"]}</br>
    Cor: {$row[$a]["cor_produto"]}</br>
    </p>
    <div class= 'row  justify-content-center'>
    <a type='button' class='w-50 btn btn-green' href=  'index_detalhes_produto.php?id={$row[$a]["id_produto"]}'> Detalhes</a>
    </div>
    </div>
    </div>";
    $a++;
}
?>