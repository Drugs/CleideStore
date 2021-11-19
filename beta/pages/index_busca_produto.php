<!DOCTYPE html>
<html lang="pt-br">
<style> 
#card {
  width: 22%;
}
</style>
<?php

Define ('TITLE' , 'Resultados da busca');
Define('CSSFILE' , '../');
include "../includes/header_dash_p.php";
include '../database/Connection.php';
?>

<body>
  <div class="container m-auto ">
    <div class="mb-5 mt-4">
      <h1 class="h1 text-center mb-5">Lista de produtos</h1>
      <div class= 'row d-flex justify-content-center'>
        <?php 
        if (isset($_REQUEST['confirmacao'])  and $_GET['o']=="0" ) {
         
         echo "<div class='alert alert-danger' role='alert'>
         Erro na busca, verifique se colocou o id correto ou clicou na opção errada </div>";
     
     } 
     ?>
  <?php include '../functions/cod_busca_produto.php'; ?>

    </div>
      </div>
</div>
  <?php include "../includes/footer_dash.php";?>


  <script src="bootstrap.min.js"></script>
</body>

</html>