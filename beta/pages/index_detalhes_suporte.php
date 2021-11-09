<?php
Define ('TITLE' , 'Detalhes do Suporte');
Define('CSSFILE' , '../');
include "../includes/header_dash.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<body>
  <div class="container m-auto">
    <div class="mb-5 mt-4">
      <h1 class="h1 mb-2">Detalhes Suporte</h1>
            <?php
            if (isset($_REQUEST['confirmacao'])  and $_GET['confirmacao']=="2" ) {
              echo "<div class='alert alert-warning' role='alert'>
            Produto editado com sucesso </div>";
            }
            if (isset($_REQUEST['id'])) {
              $id = $_GET['id'];
            
            }
            else {
              echo "<h5> Olá, seja bem-vindo! </h5> </br>";
            }
            ?>
      
      <?php include "../functions/cod_index_detalhes.php"; ?>
    </div>
  </div>
    
  <?php include "../includes/footer_dash.php";?>
  <script src="bootstrap.min.js"></script>
</body>

</html>