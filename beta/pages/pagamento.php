<?php 
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Checkout example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>PAGAMENTO</h2>
      <p class="lead">Essa é a etapa de pagamento.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <ul class="list-group mb-3">
          
        </ul>
          <div class="input-group">

          </div>
      </div>
      <div class="col-md-7 col-lg-8">
          
          <h4 class="mb-3">Pagamento</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Cartão de crédito</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Cartão de débito</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">Boleto</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nome do cartão</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Digite o mesmo nome do cartão corretamente</small>
              <div class="invalid-feedback">
                Nome do cartão é obrigatório
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Número do cartão</label>
              <input type="number" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Número do cartão é obrigatório
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Validade</label>
              <input type="number" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Data de validade é obrigatório
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="number" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Código de segurança é obrigatório
              </div>
            </div>
          </div>

          <hr class="my-4">

          <a class="w-100 btn btn-primary btn-lg" href="confirmação.php" type="submit">Continue pagamento</a>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2021 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
