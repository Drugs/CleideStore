<?php
include '../database/Connection.php';
$id = $_GET['id'];
$consulta = "SELECT * FROM `produto` WHERE `id_produto` = {$id}";
$resultado = mysqli_query($connection, $consulta);
$dados = mysqli_fetch_assoc($resultado);
$row = $dados;

echo "
    <h3> Informações do Produto </h3>
    <table class='table table-light table-striped table-bordered table-hover'>
    <thead class='text-center text-uppercase'>
    <tr>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Tamanho</th>
      <th>Cor</th>
      <th>Valor</th>
    


    </tr>
    </thead>
    <tbody class='text-center'>
    <tr>
      <td>{$row['nome_produto']}</td>
      <td>{$row['desc_produto']}</td>
      <td>{$row['tamanho_produto']}</td>
      <td>{$row['cor_produto']}</td>
      <td>{$row['valor_produto']}</td>
    </tbody>
    </table>
    <div class= 'd-flex justify-content-center'>
      <a class='btn btn-warning' href='form_att_produto.php?id={$row['id_produto']}'>Editar</a>
    <div class= 'col-lg-3'> 
    </div>
  
<button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#rapadura'>
Deletar
</button>

    </div>
    ";