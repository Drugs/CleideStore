<?php
Define ('TITLE' , 'Pagina Suporte');
Define('CSSFILE' , '../');
include "../includes/header.php";
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cleide_store_beta";

$mysqli = mysqli_connect($servidor, $usuario, $senha, $banco);

$consulta2 = "SELECT * FROM `suporte`  JOIN cliente on cliente.id_cliente = suporte.fk_id_cliente WHERE 1";
$query = "SELECT * FROM `suporte` 
JOIN cliente on cliente.id_cliente = suporte.fk_id_cliente
WHERE 1"; //nessa linha foi adcionada a variável $query para puxar SELECT...
$consulta = mysqli_query($mysqli, $query); //foi adcionado a variável consulta para ser puxada no banco de dados os usuários

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
<h4>Suuportes mais antigos </h4>

    <table class="table table-light table-striped table-bordered table-hover">
    <tr>
  
     
      <td scope="col">Nome</td>
      <td scope="col">Id do pedido</td>
      <td scope="col">Data do suporte</td>
      <td scope="col">Status do suporte</td> 
      <td scope="col" >Ações</td>
    </tr>

<!-- Button trigger modal -->
 
<!-- Modal -->

    <?php
    $a = 0;
    $b = 10;
    while($dado = mysqli_fetch_array($consulta) and $a < $b){
      $parada [] = $dado;
          //Nessa linha eu estava colocando o mysqli como variável junto com fetch, PS: corrigi?> 

      <?php 
    
      echo
      "<tr>     
      <td> {$dado['nome_cliente']} </td>
      <td> {$dado['fk_id_pedido']}</td>
      <td>  {$dado['data_suporte']} </td>
      <td>  {$dado['status_suporte']} </td>
      
<td>
      
      <a type='button' class='btn btn-success' href=  'index_detalhes_suporte.php?id={$dado["id_suporte"]}&teste={$dado["fk_id_pedido"]}'>
       Detalhes
    </a>

      </td>
    </tr>";
    $a++;
    ?>
    <?php } ?> 

</table>
    </div>
  </div>
  <?php include "../includes/footer.php";?>
 
</body>
</html>

<!--
<button type="button" class="btn btn-success" href='detalhes.php?id=0<?php // echo $dado["id_suporte"];  ?>' data-bs-toggle="modal" data-bs-target="#exampleModal">
  
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Você deseja realmente apagar esse usuário?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary"  value="" >Sim</button>
      </div>
    </div>
  </div>
</div>

-->