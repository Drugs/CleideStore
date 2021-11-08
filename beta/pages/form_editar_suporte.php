<!doctype html>
<html lang="en">
<?php 
Define ('TITLE' , 'Editar informações do suporte');
Define('CSSFILE' , '../');
include "../includes/header_dash.php";
include '../database/Connection.php';
$consulta = "SELECT * FROM `suporte` WHERE id_suporte = {$_GET['id']}";
$resultado = mysqli_query ($connection, $consulta);
$dados = mysqli_fetch_assoc($resultado);
?>
<body class="bg-light">

<div class="d-flex justify-content-center container">
  <main>
    <div>
     
      <div class=" r col-md-7 col-lg-12">
    </br>
    </br>
       <h4 class=" text-center mb-3">Atualizar informações do suporte</h4> 
    </br>
    
        <form action="../functions/cod_editar_suporte.php" method="post" >
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Id Cliente</label>
              <input type="number" class="form-control" name="cliente" value= "<?php echo $dados['fk_id_cliente'];  ?>" id="firstName" placeholder="Nome do Produto"  >
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
             </div>

            <div class="col-6">
              <label for="address" class="form-label">Id Pedido</label>
              <input type="number" class="form-control"  value= "<?php echo $dados['fk_id_pedido'];  ?>"name="pedido" id="address" placeholder="Valor do Produto">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
			
			<div class="col-12">
              <label for="address2" class="form-label">Status </label>
              <input type="text" class="form-control"  name="status" value= "<?php echo $dados['status_suporte'];  ?>" id="address2" placeholder="Cor do Produto">
            </div>
          </div>
          
          <div class="col-12">
              <label for="email" class="form-label">Descrição</label>
              <textarea class="form-control"name= "descricao" id="exampleFormControlTextarea1" placeholder="" rows="3"><?php echo $dados['informacoes_suporte'];  ?></textarea>
            </div>    
        
            </div>
            <input type="hidden" id="custId" name="id" value=<?php echo $_GET['id'];?>>
            
          
         
          <hr class="my-4 col-lg-12">
          <div class= "row justify-content-center">
            <button class="w-100 btn btn-primary btn-lg " type="submit">Atualizar</button>
          </div>

        </form>
      </div>
    </div>
  </main>

 
</div>
<?php include "../includes/footer_dash.php";?>

    <script src="./bootstrap.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
