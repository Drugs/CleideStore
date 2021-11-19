<?php
Define ('TITLE' , 'Resultado da Busca');
Define('CSSFILE' , '../');
include "../includes/header_dash.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  
  <body>
    <main>
      
      <div class="container m-auto">
      <a class= "btn btn-green "href="../pages/index_suporte.php">Voltar</a></br></br>
         <h1 class= "text-center">Informações da Busca </h1></br>   
        <div class="mb-5 mt-4">
        <div class='row gx-5 justify-content-center'>
         <?php
          if (isset($_REQUEST['confirmacao'])  and $_GET['[o]']=="0" ) {
         
            echo "<div class='alert alert-danger' role='alert'>
            Erro na busca, verifique se colocou o id correto ou clicou na opção errada </div>";
        
        } ?>
          <?php include "../functions/cod_busca_suporte.php"; ?>
        </div>
      </div>
    </div> 
      <?php include "../includes/footer_dash.php";?> 

    </main>
  </body>

</html>
