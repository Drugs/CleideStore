<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href= "./bootstrap.min.css" />
  <title>Consulta de cliente</title>
</head>

<body>
  <div class="container m-auto">
    <div class="mb-5 mt-4">
      <h1 class="h1 mb-2">Lista de produtos</h1>
     <?php if (isset($_REQUEST['confirmacao'])  and $_GET['confirmacao']=="1" ) {
      echo "<div class='alert alert-danger' role='alert'>
      Produto excluído com sucesso
    </div>"
    ;
      };
      if (isset($_REQUEST['confirmacao'])  and $_GET['confirmacao']=="0" ) {
        echo "<div class='alert alert-success' role='alert'>
        Produto adicionado com sucesso
      </div>";
      };
      if (isset($_REQUEST['confirmacao'])  and $_GET['confirmacao']=="2" ) {
        echo "<div class='alert alert-warning' role='alert'>
       Produto editado com sucesso </div>";
      }
      else {
        echo "<h5> Olá, seja bem-vindo! </h5> </br>";
      };
       ?>
     <a class='btn btn-success' href='formadd.php'>Adicionar produto</a>
    </div>
    <table class="table table-light table-striped table-bordered table-hover">
      <thead class="text-center text-uppercase">
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <th>valor</th>
          <th>Tamanho</th>
          <th>Cor</th>
          <th>Img</th>
          <th>Ação</th>

        </tr>
      </thead>
      <tbody class="text-center">
        <?php Select("lista_produtos"); ?>
      </tbody>
    </table>
  </div>
  <script src="bootstrap.min.js"></script>
</body>

</html>