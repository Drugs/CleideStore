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

<!DOCTYPE html>
<html lang="pt-br">

<body>
<div class="container m-auto">
  <div class="mb-5 mt-4">

      <h1>Lista de suportes </h1></br>
      
    <main>
      <div class= "">
        <div class="col-lg-4" >
        <a href="form_busca_suporte.php " class= "btn btn-success">Buscar por suporte</a> 
      </div>
  </div>
  </br>


  <table class="table table-light table-striped table-bordered table-hover">
    <tr>
      <td scope="col">Nome</td>
      <td scope="col">Id do pedido</td>
      <td scope="col">Data do suporte</td>
      <td scope="col">Status do suporte</td> 
      <td scope="col" >Ações</td>
    </tr>

    <?php
    $a = 0;
    $b = 10;
    while($dado = mysqli_fetch_array($consulta) and $a < $b){
          $parada [] = $dado;
    ?> 
    <?php 
    echo
    "<tr>     
      <td> {$dado['nome_cliente']} </td>
      <td> {$dado['fk_id_pedido']}</td>
      <td>  {$dado['data_suporte']} </td>
      <td>  {$dado['status_suporte']} </td>
      <td>
      <a type='button' class='btn btn-success' href=  'index_detalhes_suporte.php?id={$dado["id_suporte"]}&teste={$dado["fk_id_pedido"]}'> Detalhes</a>
      </td>
    </tr>";
    $a++;
    ?>
    <?php } ?>
  </table>
  </div>
</div>
<?php include "../includes/footer_dash.php";?>
 
</body>
</html>