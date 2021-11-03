
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href= "../css/bootstrap.min.css" />
  <title>Detalhes Produto</title>
</head>

<body>
  <div class="container m-auto">
    <div class="mb-5 mt-4">
      <h1 class="h1 mb-2">Detalhes Suporte</h1>
      <?php 
      if (isset($_REQUEST['confirmacao'])  and $_GET['confirmacao']=="2" ) {
         
          echo "<div class='alert alert-warning' role='alert'>
          Produto editado com sucesso </div>";
      
      } else {
            
            echo "<h5> Olá, seja bem-vindo! </h5> </br>";
        };
      ?>
 

  
    </div>
  <?php include 'cod_detalhes_produtos.php'; ?>

    <script src="bootstrap.min.js"></script>
    
</body>

</html>