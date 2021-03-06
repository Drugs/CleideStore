<?php
include '../includes/header_dash.php';
include '../database/Connection.php';
session_start();
?>
<div class="container flex justfy col-md-10">
<form class="needs-validation" action="" novalidate>
        
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Ponha um nome válido.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Sobrenome</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Ponha um sobrenome válido.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="email" class="form-label">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
              <div class="invalid-feedback">
               Por favor insira um email válido.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="password" class="form-label">Senha <span class="text-muted"></span></label>
              <input type="password" class="form-control" id="senha" placeholder="">
              <div class="invalid-feedback">
               Por favor insira um email válido.
              </div>
            </div>
            <div class="col-12">
              <label for="address" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="address2" class="form-label">Logradouro<span class="text-muted">(Opcional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Casa ou apartamento">
            </div>

            <div class="col-sm-6">
            <label for="address2" class="form-label">Cidade<span class="text-muted"></span></label>
              <input type="text" class="form-control" id="address3" placeholder="">
                
                
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-sm-6">
            <label for="address2" class="form-label">Estado<span class="text-muted"></span></label>
              <input type="text" class="form-control" id="address4" placeholder="">
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-6">
              <label for="zip" class="form-label">CEP</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <a class="btn btn-success btn-lg " href="./login.php">Faça login</a>
          <a class="btn btn-success btn-lg float-end" href="login.php" type="submit">Cadastrar</a>
        </form> 
</div>

<?php include '../includes/footer.php'; ?>


<script src="../js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

<script src="../js/form-validation.js"></script>
</body>

</html>