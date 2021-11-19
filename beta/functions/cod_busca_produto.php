<?php
include '../database/Connection.php';
$a = 0;
$id = $_POST['busca'];
$consulta = "SELECT * FROM `produto` WHERE `id_produto` = '{$id}' or `nome_produto` LIKE '%{$id}%';"; 
$resultado_consulta = mysqli_query($connection, $consulta);
while ($resultado = mysqli_fetch_array($resultado_consulta)){
      $dados [] = $resultado;
      $itens = count($dados);
}
  while ($a < $itens){
    echo "
    <div id='card'class='card mx-1 col-sm-3 mb-3 p-0'>
    <div class='card-header'>{$dados[$a]["nome_produto"]}</div>
    <div class='card-body'>
    <p class='card-text'>
    Valor: {$dados[$a]["valor_produto"]}</br>
    Tamanho: {$dados[$a]["tamanho_produto"]}</br>
    Cor: {$dados[$a]["cor_produto"]}</br>
    </p>
    <div class= 'row  justify-content-center'>
    <a type='button' class='w-50 btn btn-green' href=  'index_detalhes_produto.php?id={$dados[$a]["id_produto"]}'> Detalhes</a>
    </div>
    </div>
    </div>";
    $a++;
    
  }?>