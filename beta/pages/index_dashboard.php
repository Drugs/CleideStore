<?php
require_once("conexao.php");
$query = "SELECT * FROM `cliente`";
$consulta = mysqli_query($mysqli, $query);
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <link rel="stylesheet" href="style.css">
  <title>Dashboard</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

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
  <link href="dashboard.css" rel="stylesheet">
</head>

<body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Cleide Store</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Procurar" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" data-bs-toggle="modal" data-bs-target="#sair">Sair</a>
      </div>
    </div>
  </header>
  <!-- Modal -->
  <div class="modal fade" id="sair" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="#examplemodal">Sair</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Você realmente deseja sair?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não, voltar para a lista</button>
          <a href="https://www.google.com"><button type="button" class="btn btn-primary">Sim</button></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pedidos.php">
                <span data-feather="file"></span>
                Pedidos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                Produtos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Suporte
              </a>
            </li>
          </ul>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Clientes</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <a href="adicionar_pedido.html"><button type="button" class="btn btn-sm btn-outline-secondary">Adicionar cliente</button></a>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary">
              <span data-feather="calendar"></span>
              Esta semana
            </button>
          </div>
        </div>
        <div class="tabela table-responsive">
          <div style="overflow-x:auto;">
            <table class="tabela table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">NOME</th>
                  <th scope="col">EMAIL</th>
                  <th scope="col">ENDEREÇO</th>
                  <th scope="col">DATA DE NASCIMENTO</th>
                  <th scope="col">AÇÕES</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php while ($dado = $consulta->fetch_array()) { ?>
                    <td><?php echo $dado["id_cliente"]; ?></td>
                    <td><?php echo $dado["nome_cliente"]; ?></td>
                    <td><?php echo $dado["email_cliente"]; ?></td>
                    <td><?php echo $dado["endereco_cliente"]; ?></td>
                    <td><?php echo $dado["data_n_cliente"]; ?></td>
                    <td><a href="editar1.php?id=<?php echo $dado["id_cliente"]; ?>"><button type="button" class="btn btn-primary">EDITAR</button></a>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#remover<?php echo $dado["id_cliente"]; ?>" onclick="remover()">REMOVER</button>
                    </td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  </div>
  <!-- Modal -->
  <?php
  $query = "SELECT * FROM `cliente`";
  $consulta = mysqli_query($mysqli, $query);
  while ($dado = $consulta->fetch_array()) { ?>

    <div class="modal fade" id="remover<?php echo $dado["id_cliente"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Remover item</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Você realmente deseja remover esse item?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não, voltar para a lista</button>
            <a href="deletar.php?id=<?php echo $dado["id_cliente"]; ?>"><button type="button" class="btn btn-primary">Sim</button></a>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>>
    <script>
      
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#252e39"
    },
    "button": {
      "background": "#a317d4"
    }
  },
  "theme": "classic",
  "type": "opt-out",
  "content": {
    "message": "Este site usa cookies para garantir que você tenha a melhor experiência em nosso site.",
    "dismiss": "Permitir",
    "deny": "Agora não",
    "link": "Saber mais."
  }
});
</script>
</body>

</html>