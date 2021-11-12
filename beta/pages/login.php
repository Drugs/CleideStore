<?php

define('TITLE', 'Login');
define('CSSFILE', '../');
include '../includes/header.php';

?>


<main>
  <div class="container">
    <div class="row  text-center">
      <h2 class="h2 bold">Bem vindo!</h2>
    </div>

    <div class="row g-3 ">

      <h4 class="h4 mb-3 text-center text-muted">Faça login</h4>

      <form class="needs-validation d-flex flex-wrap flex-column align-content-center align-items-center" action="../functions/logged.php" method="POST">

        <div class="row">
          <?php
          if (isset($_GET['status'])) {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Opaa!</strong> preencha os dados corretamente amigão.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
          </div>";
          }


          ?>

          <div class="col-12">
            <label for="email" class="form-label mb-0">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com">
            <div class="invalid-feedback">
              Por favor insira um email válido.
            </div>
          </div>

          <div class="col-12 mt-3">
            <label for="password" class="form-label mb-0">Senha:</label>
            <input type="password" class="form-control" id="password" name="password">
            <div class="invalid-feedback">
              Por favor insira uma senha válida.
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-green btn-lg mt-3 mb-4">Logar</button>

      </form>
    </div>
  </div>
</main>




<?php include '../includes/footer.php'; ?>