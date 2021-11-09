<?php 
Define ('TITLE' , 'Dashboard Produtos');
Define('CSSFILE' , '../');
include "../includes/header_dash.php";
include '../functions/tabela_index_produto.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<body>
  <div class="container m-auto">
    <div class="mb-5 mt-4">
      <h1 class="h1 mb-2">Lista de produtos</h1>
     
        <?php if (isset($_REQUEST['confirmacao'])  and $_GET['confirmacao']=="0" ) {
                
                echo "<div class='alert alert-success' role='alert'>
                Produto adicionado com sucesso
                     </div>";
            }

            if (isset($_REQUEST['confirmacao'])  and $_GET['confirmacao']=="1" ) {
            
                echo "<div class='alert alert-danger' role='alert'>
                Produto excluído com sucesso
                </div>";
            
            } else {
             
              echo "<h5> Olá, seja bem-vindo! </h5> </br>";
             
             };?>

        <a class='btn btn-success' href='form_add_produto.php'>Adicionar produto</a>
        <a class='btn btn-success' href='form_busca_produto.php'>Busca </a>
    </div>
    <table class="table table-light table-striped table-bordered table-hover">
    <thead class="text-center text-uppercase">
    <tr>
      <th>Nome</th>
      <th>Descrição</th>
      <th>valor</th>
      <th>Tamanho</th>
      <th>Cor</th>
      <th>Ação</th>
   </tr>
   </thead>
   <tbody class="text-center">
      <?php Select("produto"); ?>
    </tbody>
    </table>
</div>
<?php include "../includes/footer_dash.php"; ?>
  <script src="bootstrap.min.js"></script>
</body>

</html>