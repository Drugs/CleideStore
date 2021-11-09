<?php
 include "../database/Connection.php";
  
  define('CSSFILE', '../');
 
  include '../includes/header.php';

 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $cpf = $_POST['cpf'];
 $endereco = $_POST['endereco'];
 if($nome != 0 || $email != 0 || $cpf != 0 || $endereco != 0){
 $up = "UPDATE `cliente` SET nome='$nome', email='$email', cpf='$cpf', endereco='$endereco' WHERE cliente_id= 4 ";
 
 $update = mysqli_query($connection, $up);
echo "<script>location.href='index_editar.php?removido=true';</script>";
}if($nome == 0 || $email == 0 || $cpf == 0 || $endereco == 0){
    echo "<h2 class='text-center fw-bold mb-0'>Por favor preencha o formulário.</h2>
      ";
}

$sql = "SELECT * FROM `cliente` where cliente_id= 4";
$query = mysqli_query($connection, $sql);
$consult = mysqli_fetch_assoc($query);

?>
<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--ESTILO CSS BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    
      <!--EDITAR DADOS NOME EMAIL ENDEREÇO-->
      <div class="incial-none modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
     <div class="incial-none modal-dialog" role="document">
    <div class="incial-none modal-content rounded-5 shadow">
      <div class="incial-none modal-header p-5 pb-4 border-bottom-0">
        <!-- <h5 class="modal-title">Modal title</h5> -->
       <h2 class="fw-bold mb-0">Dados pessoais</h2>
      
      </div>

      <div class="modal-body p-5 pt-0">
        <form method="POST" class="">
          <div class="form-floating mb-3">
            <input name="nome" type="text" class="form-control rounded-4" id="floatingInput" placeholder="">
            <label for="nome"><?php echo $consult['nome']; ?></label>
          </div>
          <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control rounded-4" id="" placeholder="">
            <label for="email"><?php echo $consult['email']; ?></label>
          </div>
             <div class="form-floating mb-3">
            <input name="cpf" type="number" class="form-control rounded-4" id="" placeholder="">
            <label for="cpf"><?php echo $consult['cpf']; ?></label>
          </div>
          <div class="form-floating mb-3">
            <input name="endereco" type="text" class="form-control rounded-4" id="" placeholder="">
            <label for="endereco"><?php echo $consult['endereco']; ?></label>
          </div>
           
          <button name="enviar" class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Confirmar</button>
        
        </form>
      </div>
    </div>
  </div>
</div>
  </body>
</html>

<?php include '../includes/footer.php'; ?>