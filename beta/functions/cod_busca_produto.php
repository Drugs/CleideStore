<?php
include '../database/Connection.php';
$a = 0;

if( $_POST['b'] == 'idp')  {
   
    $id = $_POST['cliente'];
    $consulta = "SELECT * FROM `produto` WHERE `id_produto` = {$id};";
    $resultado = mysqli_query($connection, $consulta);
    
    while ($dados = mysqli_fetch_assoc($resultado)) {
           $row [] = $dados;
           $itens = count($row);
    }
    if ($row == NULL){
    
      $_GET['status'] = 3;
      
      if (isset($_GET['status'])){
      header ("Location: form_busca_produto.php?confirmacao={$_GET['status']}&id={$_POST['id']}"); 
      }
    } else {
    while ($a < $itens) {
          echo "
          <table class='table  table-light table-hover table-striped table-bordered table-hover'>
          <thead class='text-center text-uppercase'>
          <tr>
            <th>Nome do Produto</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Cor</th>
            <th>Tamanho</th>
            <th>Ação</th>
          </tr>
  
         <tbody class='text-center'>
 
           <td>{$row[$a]['nome_produto']}</td>
           <td>{$row[$a]['desc_produto']}</td>
           <td>{$row[$a]['valor_produto']}</td>
           <td>{$row[$a]['cor_produto']}</td>
           <td>{$row[$a]['tamanho_produto']}</td>
          <td> <a type='button' class='btn btn-success' href='index_detalhes_produto.php?id={$row[$a]['id_produto']}'>
          Detalhes</a>
  
        </table>
        </tbody>";
        $a++;
}
  }
    }

    
if( $_POST['b'] == 'nome')  {
    
    $id = $_POST['cliente'];
    $consulta = "SELECT * FROM `produto` WHERE `nome_produto` LIKE '%{$id}%'";
    $resultado = mysqli_query($connection, $consulta);
   
    while ($dados = mysqli_fetch_assoc($resultado)) {
           $row [] = $dados;
           $item = count($row);
    }

    if ($row === NULL){
    
      $_GET['status'] = 4;
      
      if (isset($_GET['status'])){
      header ("Location: form_busca_produto.php?confirmacao={$_GET['status']}&id={$_POST['id']}"); 
      }
    } else {
    while ($a < $item) {
           echo "
          <table class='table  table-light table-hover table-striped table-bordered table-hover'>
          <thead class='text-center text-uppercase'>
          <tr>
            <th>Nome do Produto</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Cor</th>
            <th>Tamanho</th>
            <th>Ação</th>
          </tr>
     
        <tbody class='text-center'>
    
          <td>{$row[$a]['nome_produto']}</td>
          <td>{$row[$a]['desc_produto']}</td>
          <td>{$row[$a]['valor_produto']}</td>
          <td>{$row[$a]['cor_produto']}</td>
          <td>{$row[$a]['tamanho_produto']}</td>
        <td> <a type='button' class='btn btn-success' href='index_detalhes_produto.php?id={$row[$a]['id_produto']}'>
        Detalhes </a>
     
        </table>
        </tbody>";
        $a++;
}
  }
    } 

