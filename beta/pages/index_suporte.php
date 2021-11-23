<?php
Define ('TITLE' , 'Dashboard Suporte');
Define('CSSFILE' , '../');
include "../includes/header_dash.php";
include "../database/Connection.php";

$consulta2 = "SELECT * FROM `suporte`  JOIN cliente on cliente.id_cliente = suporte.fk_id_cliente WHERE 1";
$query = "SELECT * FROM `suporte` 
JOIN cliente on cliente.id_cliente = suporte.fk_id_cliente WHERE 1";
$consulta = mysqli_query($connection, $query);
?>

<div class="container">
  <div class="mb-5 mt-4">

      <h1 class= "text-center">Lista de suportes </h1></br>
      
    <main>
</br>
  <div class='row gx-5 justify-content-center'>
    <?php
    $a = 0;
    $b = 30;
    while($dado = mysqli_fetch_array($consulta) and $a < $b){
          $parada [] = $dado;
    ?> 
    <?php 
    echo
    "
        <div id='card'class='card mx-1 col-sm-12 col-md-4 mb-3 p-0'>
           <div class='card-header'>{$dado["nome_cliente"]}</div>
          <div class='card-body'>
            <p class='card-text'>
            Id do pedido: {$dado["fk_id_pedido"]}</br>
            Data do pedido: {$dado["data_suporte"]}</br>
            Status do suporte: {$dado["status_suporte"]}</br>
            </p>
            <div class= 'row  justify-content-center'>
            <a type='button' class='w-50 btn btn-green' href=  'index_detalhes_suporte.php?id={$dado["id_suporte"]}&teste={$dado["fk_id_pedido"]}'> Detalhes</a>
          </div>
        </div>
      </div>
    
   
        ";
     $a++;
        
    ?>
    <?php } ?>
 
 </div>
  </div>
</div>
<?php include "../includes/footer_dash.php";?>
 