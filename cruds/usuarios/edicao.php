<?php
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
      main {
        margin-top: 140px;
        margin-left: 280px;
      }
    </style>
</head>

<body>

  <body class="bg-light">

    <div class="container">
      <main>

        <div class="row g-5">

          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3"></h4>
            <form class="needs-validation" action="editar.php" method="post">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">LOGIN</label>
                  <input type="text" class="form-control" name="login" placeholder="Dona Cleide Oliveira de Andrade" value="">
                  <div class="invalid-feedback">
                    Valide o nome.
                  </div>
                </div>

                <div class="col-12">
                  <label for="email" class="form-label">SENHA <span class="text-muted">(Obrigatório)</span></label>
                  <input type="text" class="form-control" name="senha" placeholder="Senha" value="" required>
                  <div class="invalid-feedback">
                    Insira um email válido para receber novidades.
                  </div>
                </div>

                <div class="col-12">
                  <label for="address" class="form-label">NIVEL</label>
                  <input type="text" class="form-control" name="nivel" placeholder="1,2 ou 3" required>
                  <div class="invalid-feedback">
                    Insira o endereço.
                  </div>
                </div>
                <input type="hidden" value="<?php echo $id ?>" name="id">
              <hr class="my-4">

              <button class="w-100 btn btn-primary btn-lg" type="submit">Editar dados</button>
            </form>
          </div>
        </div>
      </main>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"></script>
  </body>

</html>