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
  <link href="./css/cadastro.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class=" d-flex justify-content-center container">
  <main>

  <div >
     
    <div class="col-md-7 col-lg-12">
      </br>
      </br>
      <center>  <h4 class="mb-3">Adicinar Produto</h4> </center>
      </br>
    
      <form action="cod_add_produto.php" method="post" enctype="multipart/form-data" >
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome</label>
              <input type="text" class="form-control" name="nome" id="firstName" placeholder="Nome do Produto"  required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
             </div>

            <div class="col-6">
              <label for="address" class="form-label">Valor</label>
              <input type="number" step=".01" class="form-control"  name="preco" id="address" placeholder="Valor do Produto" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-6">
              <label for="address2" class="form-label"> Tamanho </label>
              <input type="text" class="form-control"  name="tamanho" id="address2" placeholder="Tamanho do Produto">
            </div> 
			
			      <div class="col-6">
              <label for="address2" class="form-label">Cor </label>
              <input type="text" class="form-control"  name="cor"  id="address2" placeholder="Cor do Produto">
            </div>
          </div>
          
          <div class="col-12">
              <label for="email" class="form-label">Descrição</label>
              <textarea class="form-control"name= "descricao" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>    
        </div>
            
            <label for="img" class= "form-label ">Imagem do Produto </label>
            </br>
            <input type="file" accept= "imaage" name= "img" id="file">
            <hr class="my-4 col-lg-12">
          <div class= col-lg-12>
            <button class="w-100 btn btn-primary btn-lg " type="submit">Adicionar produto</button>
          </div>

        </form>
      </div>
    </div>
  </main>

 
</div>


    <script src="./bootstrap.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
