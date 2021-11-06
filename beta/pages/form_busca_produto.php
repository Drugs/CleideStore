<!doctype html>
<html lang="pt-br">
<?php 
Define ('TITLE' , 'Pagina Suporte');
Define('CSSFILE' , '../');
include "../includes/header.php";
include '../database/Connection.php';
?>
<body class="bg-light">
    
<div class="d-flex justify-content-center container">
  <main>
  <div>
     
    <div class= "col-md-7 col-lg-12">
      </br>
      </br>
      <h4 class="mb-3">Busca por Suporte</h4> 
      </br>
      <?php 
      if (isset($_REQUEST['confirmacao'])  and $_GET['confirmacao']=="3" ) {
         
          echo "<div class='alert alert-danger' role='alert'>
          Erro na busca, verifique se colocou o id correto ou clicou na opção errada </div>";
      
      } if (isset($_REQUEST['confirmacao'])  and $_GET['confirmacao']=="4" ) {
         
        echo "<div class='alert alert-danger' role='alert'>
        Erro na busca, verifique se colocou o nome corretamente ou clicou na opção errada </div>";
    
    } else {
            
            echo "<h5> Olá, seja bem-vindo a página de busca! </h5> </br>";
        };
      ?>
      <form action="index_busca_produto.php" method="post" >


      
        <div class="controls">
		      <label class="control-label">
			    <input type="radio" data-target="#authOpt" name="b" value="idp" data-toggle="collapse" > Id do Produto 
		      </label> 
          </br>
		      <label class="control-label">
					<input type="radio" data-target="#authOpt3" class="closeAllCollapse" name="b" value="nome"> Nome
				  </label>
          <label class="control-label">
          </br>
        </div>
      </div>
          </br>
  
          <input type="text" class="form-control" name="cliente" value= "" id="firstName" placeholder="Nome ou Id"  required>
       <div class="invalid-feedback">
          Valid first name is required.   

        </div>
      </div>
          </br>
          </br>
      <div class= "row justify-content-center">
          <button class="w-100 btn btn-primary btn-lg " type="submit">Buscar</button>
      </div>

        </form>
   
  </div>
  </main>

 
</div>
</div>

<?php 
include "../includes/footer.php";
?>

    <script src="./bootstrap.min.js"></script>

    <script src="form-validation.js"></script>
  </body>
</html>
