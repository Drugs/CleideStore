<?php 
Define ('TITLE' , 'Dashboard');
Define('CSSFILE' , '../');
include "../includes/header_dash_p.php";
 ?>


 <div class="mb-5 mt-5">
    
      <h1 class="text-center">Selecione pra onde você quer seguir</h1>
  </div>

      <div class= "container">
        <div class= "row d-flex  justify-content-center">
          <div class= 'offset-md-1 mb-3 col-sm-2'>
            <a class= 'btn btn-green' href='index_suporte.php'> Suporte </a>
          </div>
          <div class= 'mb-3 col-sm-2'>
            <a class= 'btn btn-green' href='index_clientes.php'> Clientes </a>
          </div>
          <div class= 'mb-3 col-sm-2'>
          <a class= 'btn btn-green' href='index_produtos.php'> Produtos</a>
        </div>
        <div class= 'mb-5 col-sm-2'>
          <a class= 'btn btn-green' href='index_pedido.php'> Pedido </a>
        </div>
      </div>  
  </div>
</br>
<?php include "../includes/footer_dash.php"; ?>
  <script src="bootstrap.min.js"></script>
