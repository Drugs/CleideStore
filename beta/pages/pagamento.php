<?php
include '../database/Connection.php';
define('TITLE', 'Carrinho');
define('CSSFILE', '../');
include '../includes/header.php';
?>

  <div class="container" class='d-flex justify-content-between lh-sm  '>
    <div class="py-5 text-center">
      <h2>PAGAMENTO</h2>
      <p class="lead">Essa é a etapa de pagamento.</p>
    </div>
      
    <h4 class="mb-3">Pagamento</h4>

    <div class="row g-3">
    <div class="col-sm-6">
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
  </div>
</br>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <label for="cc-name" class="form-label">Nome do cartão</label>
        <input type="text" class="form-control" id="cc-name" placeholder="" required>
        <small class="text-muted">Digite o mesmo nome do cartão corretamente</small>
        <div class="invalid-feedback">
          Nome do cartão é obrigatório
        </div>
      </div>

      <div class="col-md-4">
        <label for="cc-number" class="form-label">Número do cartão</label>
        <input type="number" class="form-control" id="cc-number" placeholder="" required>
        <div class="invalid-feedback">
          Número do cartão é obrigatório
        </div>
      </div>
      <div class="col-sm-1">
        <label for="cc-expiration" class="form-label">Validade</label>
        <input type="number" class="form-control" id="cc-expiration" placeholder="" required>
        <div class="invalid-feedback">
          Data de validade é obrigatório
        </div>
      </div>

      <div class="col-sm-1">
        <label for="cc-cvv" class="form-label">CVV</label>
        <input type="number" class="form-control" id="cc-cvv" placeholder="" required>
        <div class="invalid-feedback">
          Código de segurança é obrigatório
        </div>
      </div>
    </div>

    <hr class="my-4">
    <div class="d-flex justify-content-center row text-center mt-3">
    <a class=" text-white btn btn-success col-lg-5" href="./confirmacao.php">Finalizar</a>
    </div>
  </div>
  </div>
  </div>


  <?php include '../includes/footer.php'; ?>