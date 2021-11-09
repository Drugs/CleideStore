<?php include_once "../database/Connection.php";

 $sql = "SELECT * FROM `cliente` where cliente_id = 4";
 $query = mysqli_query($connection, $sql);
 $consult = mysqli_fetch_assoc($query);
 

define('CSSFILE', '../');
 
include '../includes/header.php';
?>

<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--ESTILO CSS BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- JavaScript Bundle with Popper --> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 

    <!--ESTILO CSS-->
    <style>
      .fa{
        font-size: 20px;
      }
      .incial-none{
        display: ;
        
      }
    
    </style>
  </head>
  <body>
  <!--PARTE DO NOME-->
  <div class="list-group">
  <a onclick="myNome()" href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <i alt="twbs" width="32" height="32" class="fa fa-share-square-o rounded-circle flex-shrink-0"></i>
    <div class="d-flex gap-2 w-100 justify-content-between">
    <div>
        <h6 class="mb-0">Meu nome:</h6>
        <p class="mb-0 opacity-75">
          <?php echo $consult['nome']; ?>
        </p>
      </div>
      <small class="opacity-50 text-nowrap">Nome</small>
    </div>
  </a>
  <a onclick="myEmail()" href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <i alt="twbs" width="32" height="32" class="fa fa-share-square-o rounded-circle flex-shrink-0"></i>
    <div class="d-flex gap-2 w-100 justify-content-between"></i>
      <div>
        <h6 class="mb-0">Meu email:</h6>
        <p class="mb-0 opacity-75"><?php echo $consult['email']; ?></p>
      </div>
      <small class="opacity-50 text-nowrap">Email</small>
    </div>
  </a>
    <!--PARTE DO CPF-->
  <a onclick="myCpf()" href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <i  alt="twbs" width="32" height="32" class="fa fa-share-square-o rounded-circle flex-shrink-0"></i>
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Meu CPF:</h6>
        <p class="mb-0 opacity-75"><?php echo $consult['cpf']; ?></p>
      </div>
      <small class="opacity-50 text-nowrap">CPF</small>
    </div>
  </a>
    <!--PARTE DO ENDEREÇO-->
    <a onclick="myRua()" href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <i  alt="twbs" width="32" height="32" class="fa fa-share-square-o rounded-circle flex-shrink-0"></i>
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Meu Endereço:</h6>
        <p class="mb-0 opacity-75"><?php echo $consult['endereco']; ?></p>
      </div>
      <small class="opacity-50 text-nowrap">Endereço</small>
    </div>
  </a>
</div>
    </div> 
      <!--EDITAR OS DADOS-->
      <div class="modal-footer flex-column border-top-0">
        <a href="editar.php" class="btn btn-lg btn-primary w-100 mx-0 mb-2">Editar dados </a>
       </div>
 
<?php

 $sql = "SELECT * FROM `produto` where id_produto= 1";
 $query = mysqli_query($connection, $sql);
 $produto = mysqli_fetch_assoc($query);


?>
      <h4 class="p-3 mt-5 d-flex justify-content-center">Listas de compras</h4>
        <div class="bd-example">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h4 class="px-6 d-flex accordion-header" id="headingOne"> 
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                id produto: 
              </button>
            </h4>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              
      </div>
        <table class="table table-striped">
          <thead>
          <tr>
            <th scope="col">id do produto</th>
            <th scope="col">Nome</th>
            <th scope="col">Tamanho</th>
            <th scope="col">Valor</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <th scope="row"><?php echo  $produto['id_produto'];
            ?>
            </th>
            <td><?php echo $produto['nome_produto'];
            ?>
            </td>
            <td><?php echo $produto['tamanho_produto'];
            ?>
            </td>
            <td><?php echo $produto['valor_produto'];
            ?>
            </td>
          </tr>
          </tbody>
        </table>
        </div>
        
        
        <!-- JavaScript Bundle with Popper --> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script> 



  </body>
</html>
<?php include '../includes/footer.php'; ?>