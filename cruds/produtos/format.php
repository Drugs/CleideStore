<!doctype html>
<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "test";

$connection = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "Falha ao conectar " . mysqli_connect_error();
    exit();
}

$consulta = "SELECT * FROM `lista_produtos` WHERE id_prod = {$_GET['id']}";
$resultado = mysqli_query ($connection, $consulta);
$dados = mysqli_fetch_assoc($resultado);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Checkout example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="./bootstrap.min.css" rel="stylesheet">

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
    <link href="./css/cadastro.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>

    <div class="row g-5">
     
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3"></h4>
        <form action="att.php" method="post" >
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label"></label>
              <input type="text" class="form-control" name="nome" id="firstName" placeholder="" value="<?php echo $dados['nome_prod'];  ?> " required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label"> <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" name="email" id="email" value="<?php echo $dados['nome_prod'];  ?>" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label"></label>
              <input type="text" class="form-control" value="ender"  name="endereco" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label"> </label>
              <input type="text" class="form-control"  name="cpf" value="cpf" id="address2" placeholder="CPF">
            </div> 
			
			<div class="col-12">
              <label for="address2" class="form-label">Data de Nascimento </label>
              <input type="date" class="form-control"  name="date" value="data" id="address2" placeholder="Apartment or suite">
            </div>
          </div>
          <input type="hidden" id="custId" name="id" value=<?php echo $_GET['id']?>>
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Editar dados</button>
        </form>
      </div>
    </div>
  </main>

 
</div>


    <script src="./bootstrap.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
