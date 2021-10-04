<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

include_once("conexao.php");
$query = "SELECT * FROM `suporte`"; //nessa linha foi adcionada a variável $query para puxar SELECT...
$consulta = mysqli_query($mysqli, $query); //foi adcionado a variável consulta para ser puxada no banco de dados os usuários


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Relatório</title>
</head>

<body>

  <h1>Listar Usuário</h1><br>
  <table class="table table-dark table-hover">
    <tr>
      <td scope="col">id_suporte</td>
      <td scope="col">id_cliente</td>
      <td scope="col">data_suporte</td>
      <td scope="col">status_suporte</td>
      <td scope="col">Ações</td>
    </tr>

    <!-- Button trigger modal -->

    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Excluir Usuário</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Você deseja realmente apagar esse usuário?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
            <a class='btn btn-primary' href='delete.php?id=45'>Sim</a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <?php while ($dado = mysqli_fetch_array($consulta)) { //Nessa linha eu estava colocando o mysqli como variável junto com fetch, PS: corrigi
    ?>
      <tr>
        <td><?php echo $dado["id_suporte"]; ?></td>
        <td><?php echo $dado["id_cliente"]; ?></td>
        <td><?php echo $dado["data_suporte"]; ?></td>
        <td><?php echo $dado["status_suporte"]; ?></td>                                                                                               
        <td><a class='btn btn-warning' href='editar.php?id=<?php echo $dado["id_suporte"]; ?>'>Editar</a>
          <button type="button" class="btn btn-danger" href='delete.php?id=<?php echo $dado["id_suporte"]; ?>' data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $dado["id_suporte"];?>"> 
            Excluir
          </button>
        </td>
      </tr>

      <div class="modal fade" id="exampleModal<?php echo $dado["id_suporte"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Você deseja realmente apagar esse usuário?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <a class='btn btn-primary' href='delete.php?id=<?php echo $dado["id_suporte"]; ?>'>Sim</a>
      </div>
    </div>
  </div>
</div>

    <?php } ?>
  </table>

</body>

</html>