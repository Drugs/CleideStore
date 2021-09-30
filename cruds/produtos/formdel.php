<!doctype html>
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
     
      <div class="col-md-12 col-lg-12">
        <center> <h4 class="mb-3">Deseja excluir esse produto</h4> </center>
    </br>
   
    
        <form action="delete.php" method="post">
  
         <input type="hidden" id="custId" name="id" value=<?php echo $_GET['id']?>>
          <button class=" align-itens-center btn btn-danger w-100 btn btn-primary btn-lg" type="submit">Excluir</button>
        </form>
      </div>
    </div>
  </main>

 
</div>


    <script src="./bootstrap.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
