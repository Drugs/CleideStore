<?php
include_once 'conexao.php';
$query = "SELECT * FROM `usuario`";
$consulta = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        body {
            background-color: #212529;
        }
    </style>
</head>
<body>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">LOGIN</th>
      <th scope="col">SENHA</th>
      <th scope="col">NÍVEL</th>
    </tr>
  </thead>
  <tbody>
  <?php while($dado = $consulta->fetch_array()) { ?>
    <tr>
      <th scope="row"><?php echo $dado['id_usuario'];?></th>
      <td><?php echo $dado['login_usuario'];?></td>
      <td><?php echo md5($dado['senha_usuario']);?></td>
      <td><?php echo $dado['nivel_usuario'];?></td>
    </tr>
  <?php } ?> 
  </tbody>
</table>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">EDITAR</th>
      <th scope="col">REMOVER</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="edicao.php?id=1" class="btn btn-primary" role="button" aria-pressed="true">EDITAR</a></td>
      <input type="hidden" value="<?php echo $id ?>" name="id">
      <td><a href="remover.php" class="btn btn-danger" role="button" aria-pressed="true">REMOVER</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><a href="edicao.php?id=2" class="btn btn-primary" role="button" aria-pressed="true">EDITAR</a></td>
      <td><a href="#" class="btn btn-danger" role="button" aria-pressed="true">REMOVER</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><a href="edicao.php?id=3" class="btn btn-primary" role="button" aria-pressed="true">EDITAR</a></td>
      <td><a href="#" class="btn btn-danger" role="button" aria-pressed="true">REMOVER</a></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><a href="edicao.php?id=4" class="btn btn-primary" role="button" aria-pressed="true">EDITAR</a></td>
      <td><a href="#" class="btn btn-danger" role="button" aria-pressed="true">REMOVER</a></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td><a href="edicao.php?id=5" class="btn btn-primary" role="button" aria-pressed="true">EDITAR</a></td>
      <td><a href="#" class="btn btn-danger" role="button" aria-pressed="true">REMOVER</a></td>
    </tr>
  </tbody>
</table>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>