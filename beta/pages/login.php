<?php

define('TITLE', 'Login');
define('CSSFILE', '../');
include '../includes/header.php';

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

      <form class="needs-validation d-flex flex-wrap flex-column align-content-center align-items-center" action="pagamento.php">

        <div class="row w-50">
          <div class="col-12">
            <label for="email" class="form-label">Email <span class="text-muted"></span></label>
            <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
            <div class="invalid-feedback">
              Por favor insira um email válido.
            </div>
          </div>

          <div class="col-12">
            <label for="password" class="form-label">Senha <span class="text-muted"></span></label>
            <input type="password" class="form-control" id="email" placeholder="">
            <div class="invalid-feedback">
              Por favor insira um email válido.
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-green btn-lg mt-3 mb-4">Logar</button>

      </form>
    </div>
  </div>
</main>


<script src="../js/form-validation.js"></script>

<?php include '../includes/footer.php'; ?>