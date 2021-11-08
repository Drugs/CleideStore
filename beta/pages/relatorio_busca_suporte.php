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
        <div class="mb-5 mt-4">
          <h1>Informações da Busca </h1></br>
          <?php include "../functions/cod_busca_suporte.php"; ?>
        </div>
      </div>
      
      <?php include "../includes/footer_dash.php";?> 

    </main>
  </body>

</html>
