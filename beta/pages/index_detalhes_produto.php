<!DOCTYPE html>
<html lang="pt-br">
<?php 
Define ('TITLE' , 'Detalhes do Produto');
Define('CSSFILE' , '../');
include "../includes/header.php";
include '../database/Connection.php';
?>
<body>
  <div class="container m-auto">
    <div class="mb-5 mt-4">
      <h1 class="h1 mb-2">Detalhes Suporte</h1>
      <?php 
      if (isset($_REQUEST['confirmacao'])  and $_GET['confirmacao']=="2" ) {
         
          echo "<div class='alert alert-warning' role='alert'>
          Produto editado com sucesso </div>";
      
      } else {
            
            echo "<h5> Olá, seja bem-vindo! </h5> </br>";
        };
      ?>
    


<!-- Modal -->
<div class="modal fade" id="rapadura" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pera lá amigão</h5> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este produto ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Não</button>
        <a class="btn btn-danger"  href='../functions/cod_delete_produto.php?<?php echo "id={$_GET['id']}"?>'>Sim</a>
      </div>
    </div>
  </div>
</div>

  <?php include '../functions/cod_detalhes_produtos.php'; ?>
      </div>
    </div>
    <?php include "../includes/footer.php";?>

    <script src="bootstrap.min.js"></script>
    
</body>

</html>