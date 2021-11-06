<?php
include '../database/Connection.php';
$a = 0;



if ($_POST['b'] == 'ids')  {
    
    $id = $_POST['cliente'];
    $consulta = "SELECT * FROM `suporte` WHERE `id_suporte` = {$id};";
    $resultado = mysqli_query($connection, $consulta);
      while ($dados = mysqli_fetch_array($resultado)) { 
             $row [] = $dados;
             $itens = count($row);
      
      }
      if ($row == NULL){
    
        $_GET['status'] = 3;
        
        if (isset($_GET['status'])){
        header ("Location: form_busca_suporte.php?confirmacao={$_GET['status']}&id={$_POST['id']}"); 
        }
      } else {
   
      while ($a < $itens) {
            echo "
            <table class='table table-light table-striped table-bordered table-hover'>
            <thead class='text-center text-uppercase'>
            <tr>
              <th>Id do Suprte</th>
              <th>Data</th>
              <th>Status</th>
              <th>Descrição</th>
              <th>Ação</th>
            </tr>
  
            <tbody class='text-center'>
 
              <td>{$row[$a]['id_suporte']}</td>
              <td>{$row[$a]['data_suporte']}</td>
              <td>{$row[$a]['status_suporte']}</td>
              <td>{$row[$a]['informacoes_suporte']}</td>
              <td> <a type='button' class='btn btn-success' href='index_detalhes_suporte.php?id={$row[$a]['id_suporte']}&teste={$row[$a]['fk_id_pedido']}'>
              Detalhes </a>
  
            </table>
            </tbody>";
            $a++; 

      }
    }
  }

if ($_POST['b'] == 'idp')  {
    
    $id = $_POST['cliente'];
    $consulta = "SELECT * FROM `suporte` WHERE `fk_id_pedido` = {$id};";
    $resultado = mysqli_query($connection, $consulta);
    
    while ($dados = mysqli_fetch_assoc($resultado)) {
            
          $row [] = $dados;
          $itens = count($row);
    }
    if ($row == NULL){
    
      $_GET['status'] = 5;
      
      if (isset($_GET['status'])){
      header ("Location: form_busca_suporte.php?confirmacao={$_GET['status']}&id={$_POST['id']}"); 
      }
    } else {

    while ($a < $itens) {
        
          echo "
          <table class='table table-light table-striped table-bordered table-hover'>
          <thead class='text-center text-uppercase'>
          <tr>
            <th>Id do Suprte</th>
            <th>Data</th>
            <th>Status</th>
            <th>Descrição</th>
            <th>Ação</th>
          </tr>
  
          <tbody class='text-center'>
 
           <td>{$row[$a]['id_suporte']}</td>
           <td>{$row[$a]['data_suporte']}</td>
           <td>{$row[$a]['status_suporte']}</td>
           <td>{$row[$a]['informacoes_suporte']}</td>
          <td> <a type='button' class='btn btn-success' href='index_detalhes_suporte.php?id={$row[$a]['id_suporte']}&teste={$row[$a]['fk_id_pedido']}'> Detalhes </a>
  
        </table>
        </tbody>";
        $a++;

       }
      }
    }

if  ($_POST['b'] == 'nome')  {
    $id = $_POST['cliente'];
    $consulta = "SELECT * FROM `suporte` JOIN cliente on cliente.id_cliente = suporte.fk_id_cliente WHERE `nome_cliente` LIKE '%{$id}%'";
    $resultado = mysqli_query($connection, $consulta);
    while ($dados = mysqli_fetch_assoc($resultado)) {
    
            $row [] = $dados;
            $itens = count($row);
   }
   if ($row == NULL){
    
    $_GET['status'] = 4;
    
    if (isset($_GET['status'])){
    header ("Location: form_busca_suporte.php?confirmacao={$_GET['status']}&id={$_POST['id']}"); 
    }
  } else {
    while ($a < $itens) {
          
          echo "
          <table class='table table-light table-striped table-bordered table-hover'>
          <thead class='text-center text-uppercase'>
          <tr>
            <th>Nome</th>
            <th>Id do Suprte</th>
            <th>Data</th>
            <th>Status</th>
            <th>Descrição</th>
            <th>Ação</th>
          </tr>
  
          <tbody class='text-center'>
          
            <td>{$row[$a]['nome_cliente']}</td|>
            <td>{$row[$a]['id_suporte']}</td>
            <td>{$row[$a]['data_suporte']}</td>
            <td>{$row[$a]['status_suporte']}</td>
            <td>{$row[$a]['informacoes_suporte']}</td>
            <td> <a type='button' class='btn btn-success' href='index_detalhes_suporte.php?id={$row[$a]['id_suporte']}&teste={$row[$a]['fk_id_pedido']}&teste={$row[$a]['fk_id_pedido']}'> Detalhes </a>
  
          </table>
          </tbody>";
          $a++;
     } 
  }
}

