<!doctype html>
<html lang="en">
<?php 
Define ('TITLE' , 'Atualizar informações do Produto');
Define('CSSFILE' , '../');
include "../includes/header_dash.php";
include '../database/Connection.php';
$consulta = "SELECT * FROM `produto` WHERE id_produto = {$_GET['id']}";
$resultado = mysqli_query ($connection, $consulta);
$dados = mysqli_fetch_assoc($resultado);
?>

<body class="bg-light">
    
<div class=" d-flex justify-content-center container">
  <main>

  <div>
     
    <div class="col-md-7 col-lg-12">
      </br>
      </br>
      <h4 class="text-center mb-3">Atualizar informações do produto</h4>
      </br>
    
      <form action="../functions/cod_att_produto.php" method="post" >
        <div class="row g-3">
          <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome</label>
              <input type="text" class="form-control" name="nome" value= "<?php echo $dados['nome_produto'];  ?>" id="firstName" placeholder="Nome do Produto"  required>
              <div class="invalid-feedback">
                  Valid first name is required.
              </div>
          </div>

          <div class="col-6">
              <label for="address" class="form-label">Valor</label>
              <input type="number" step=".01" class="form-control"  value= "<?php echo $dados['valor_produto'];  ?>"name="preco" id="address" placeholder="Valor do Produto" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
          </div>

          <div class="col-6">
              <label for="address2" class="form-label"> Tamanho </label>
              <input type="text" class="form-control"  name="tamanho" id="address2" value= "<?php echo $dados['tamanho_produto'];  ?>" placeholder="Tamanho do Produto">
          </div> 
			
			    <div class="col-6">
              <label for="address2" class="form-label">Cor </label>
              <input type="text" class="form-control"  name="cor" value= "<?php echo $dados['cor_produto'];  ?>" id="address2" placeholder="Cor do Produto">
          </div>
        </div>
          
        <div class="col-12">
              <label for="email" class="form-label">Descrição</label>
              <textarea class="form-control"name= "descricao" id="exampleFormControlTextarea1" placeholder="" rows="3"><?php echo $dados['desc_produto'];  ?></textarea>
        </div>    
        
      </div>
              <input type="hidden" id="custId" name="id" value=<?php echo $_GET['id']?>>
              <hr class="my-4 col-lg-12">
        <div class="row justify-content-center">
              <button class="w-100 btn btn-primary btn-lg " type="submit">Atualizar</button>
        </div>

        </form>
      </div>
    </div>
    <?php include "../includes/footer_dash.php"; ?>
  </main>

 
</div>


    <script src="./bootstrap.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
