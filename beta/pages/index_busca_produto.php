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

  <div class="container m-auto ">
    <div class="mb-5 mt-4">
      <div class= 'row d-flex justify-content-center'>
     
  <?php include '../functions/cod_busca_produto.php'; ?>
 <h1 class="h1 text-center mb-4 order-first"><?= SEARCHRESULT ?></h1>
    </div>
      </div>
</div>
  <?php include "../includes/footer_dash.php";?>


  <script src="bootstrap.min.js"></script>


