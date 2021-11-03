<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Checkout example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>



    <!-- Custom styles for this template -->


  </head>
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
      <div class= "col-lg-12 justify-itens-center">
          <button class="w-100 btn btn-primary btn-lg " type="submit">Buscar</button>
      </div>

        </form>
   
  </div>
  </main>

 
</div>
</div>


    <script src="./bootstrap.min.js"></script>

    <script src="form-validation.js"></script>
  </body>
</html>
