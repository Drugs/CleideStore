<!doctype html>
<html lang="pt-br">
<?php
Define ('TITLE' , 'Adicionar Produto');
Define('CSSFILE' , '../');
include "../includes/header_dash.php";
include '../database/Connection.php';
?>
  </head>
  <body class="bg-light">
    
<div class=" d-flex justify-content-center container">
  <main>

  <div >
     
    <div class="col-md-7 col-lg-12">
      </br>
      </br>
      <h4 class=" text-center mb-3">Adicinar Produto</h4>
      </br>
    
      <form action="../functions/cod_add_produto.php" method="post" enctype="multipart/form-data" >
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
          <div class= "row justify-content-center">
            <button class="w-100 btn btn-primary btn-lg " type="submit">Adicionar produto</button>
          </div>

        </form>
      </div>
    </div>
  </main>

 
</div>
<?php include "../includes/footer_dash.php"; ?>


    <script src="./bootstrap.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
