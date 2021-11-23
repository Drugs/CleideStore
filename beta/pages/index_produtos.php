<?php 
Define ('TITLE' , 'Dashboard Produtos');
Define('CSSFILE' , '../');
include "../includes/header_dash_p.php";
 ?>

  <div class="container m-auto">
    <div class="mb-5 mt-4">
    
      <h1 class="text-center h1 mb-4">Lista de produtos</h1>
     
        <?php if (isset($_REQUEST['confirmacao'])  and $_GET['confirmacao']=="0" ) {
                
                echo "<div class='alert alert-success' role='alert'>
                Produto adicionado com sucesso
                     </div>";
            }

            if (isset($_REQUEST['confirmacao'])  and $_GET['confirmacao']=="1" ) {
            
                echo "<div class='alert alert-danger' role='alert'>
                Produto excluído com sucesso
                </div>";
            
            }?>
    <div class= "row d-flex justify-content-center">
      <div class= "col-sm-3">
        <a class='btn btn-green' href='form_add_produto.php'>Adicionar produto</a>
    </div>
          </div>
    </div>
     <div class= "row d-flex justify-content-center">
       <?php include '../functions/tabela_index_produto.php';?>
   </div>
</div>
<?php include "../includes/footer_dash.php"; ?>
  <script src="bootstrap.min.js"></script>
