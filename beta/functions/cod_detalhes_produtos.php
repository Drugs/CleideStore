<?php
include '../database/Connection.php';
$id = $_GET['id'];
$consulta = "SELECT * FROM `produto` WHERE `id_produto` = {$id}";
$resultado = mysqli_query($connection, $consulta);
$dados = mysqli_fetch_assoc($resultado);
$row = $dados;

echo "
<div class='col-sm-4'>
<h3 class= 'mb-4'>Informações do Produto:</h3>
<ul class='list-group'>
<li class='list-group-item d-flex'>
<div class='ms-2'>
 <div class='fw-bold'>Nome:</div>
  {$row['nome_produto']}
</div>
</li>
<li class='list-group-item d-flex'>
<div class='ms-2'>
<div class='fw-bold'>Descrição:</div>
{$row['desc_produto']}
</div>
</li>
<li class='list-group-item d-flex'>
<div class='ms-2'>
 <div class='fw-bold'>Valor:</div>
 {$row['valor_produto']}
</div>
</li>
<li class='list-group-item d-flex'>
<div class='ms-2'>
<div class='fw-bold'> Tamanho:</div>
{$row['tamanho_produto']}
</div>
</li>
<li class='list-group-item d-flex'>
<div class='ms-2'>
<div class='fw-bold'> Cor:</div>
{$row['cor_produto']}
</div>
</li>

</ul>
</div>

    <div class= '  mt-5 d-flex justify-content-center'>
      <a class='btn btn-yellow' href='form_att_produto.php?id={$row['id_produto']}'>Editar</a>
    <div class= 'col-lg-3'> 
    </div>
  
<button type='button' class='btn btn-pink' data-bs-toggle='modal' data-bs-target='#rapadura'>
Deletar
</button>

    </div>
    ";