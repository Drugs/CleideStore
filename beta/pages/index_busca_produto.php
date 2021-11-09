<!DOCTYPE html>
<html lang="pt-br">
<?php 

Define ('TITLE' , 'Resultados da busca');
Define('CSSFILE' , '../');
include "../includes/header_dash.php";
include '../database/Connection.php';
?>

<body>
  <div class="container m-auto">
    <div class="mb-5 mt-4">
      <h1 class="h1 mb-2">Lista de produtos</h1>
  <?php include '../functions/cod_busca_produto.php'; ?>

    </div>
      </div>
  <?php include "../includes/footer_dash.php";?>


  <script src="bootstrap.min.js"></script>
</body>

</html>