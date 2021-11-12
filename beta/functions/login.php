<?php

define('TITLE', 'Login');
define('CSSFILE', '../');
include '../includes/header.php';
include_once "../database/Connection.php";

include"conexao.php";

?>
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

<main>
    
  <div class="container">
    <div class="row  text-center">
      <h2 class="h2 bold">Bem vindo!</h2>
    </div>

    <div class="row g-3 ">
  
      <h4 class="h4 mb-3 text-center">FAÇA LOGIN</h4>
 
      <form method="post" class="needs-validation d-flex flex-wrap flex-column align-content-center align-items-center">
  
        <div class="row w-50">
          <div class="col-12">
  
            <label name="email" for="email" class="form-label">Email <span class="text-muted"></span></label>
            <input name="email" type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
            <div class="invalid-feedback">
              Por favor insira um email válido.
            </div>
          </div>

          <div class="col-12">
            <label name="senha" for="password" class="form-label">Senha <span class="text-muted"></span></label>
            <input name="senha" type="password" class="form-control" id="email" placeholder="">
            <div class="invalid-feedback">
              Por favor insira um email válido.
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-green btn-lg mt-3 mb-4">Logar</button>
   
      </form>
<?php
 
 if(isset($_POST['email']) || isset($_POST['senha'])){
     if(strlen($_POST['email']) == 0){
         echo "<p class='text-center text-danger'>Preencha seu E-mail!</p>";
     } else if(strlen($_POST['senha']) == 0){
         echo "<p class='text-center text-danger'>Preencha sua senha!</p>";
     }else{
        $email = mysqli_real_escape_string($Connection, $_POST['email']);
        $senha = mysqli_real_escape_string($Connection, $_POST['senha']);
    
    $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $sql_query = mysqli_query($Connection, $sql_code);
    
    $quantidade = mysqli_num_rows($sql_query);
    
    if($quantidade == 1){
        
        $usuario = mysqli_fetch_assoc($sql_query);
        
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        
        echo "<script> window.location.replace('../index.php') </script>";
    }
    
    
     }
}
?>

    </div>
  </div>
</main>

<script src="../js/form-validation.js"></script>

<?php include_once '../includes/footer.php'; ?>