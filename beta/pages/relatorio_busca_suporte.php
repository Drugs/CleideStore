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
        <div class='row gx-5 justify-content-center'>
        
          <?php include "../functions/cod_busca_suporte.php"; ?>
          <h1 class="h1 text-center mb-5 order-first"><?= SEARCHRESULT ?></h1>
       
      </div>
    </div> 
      <?php include "../includes/footer_dash.php";?> 

    </main>
  </body>

</html>
