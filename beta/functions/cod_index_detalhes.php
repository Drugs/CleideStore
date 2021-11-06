<?php
include '../database/Connection.php';
$id = $_GET["id"];
$teste = $_GET["teste"];

if ($teste == NULL){
 
  $consulta_detalhes = "SELECT * FROM cliente
  join suporte on cliente.id_cliente = suporte.fk_id_cliente
  WHERE id_suporte = {$id};";

}else {
      $consulta_detalhes = "SELECT * FROM cliente
      join suporte on cliente.id_cliente = suporte.fk_id_cliente
      join pedido on pedido.fk_id_cliente = cliente.id_cliente
      join item_pedido on item_pedido.fk_id_pedido = pedido.id_pedido 
      join produto on produto.id_produto = item_pedido.fk_id_produto
      JOIN cupom on cupom.id_cupom = pedido.fk_id_cupom
      WHERE id_suporte = {$id};";
}

$resultado_detalhes = mysqli_query ($connection, $consulta_detalhes);
$dados_detalhes = mysqli_fetch_assoc($resultado_detalhes);
$row = $dados_detalhes;


if ($teste == NULL) {
    
    echo "
    <h3> Informações do Cliente </h3>
    <table class='table table-light table-striped table-bordered table-hover'>
    <thead class='text-center text-uppercase'>
    <tr>
      <th>Nome</th>
      <th>CPF</th>
      <th>Data de nascimento</th>
      <th>Endereço</th>
      <th>Email</th>


    </tr>
    </thead>
    <tbody class='text-center'>
    <tr>
 
      <td>{$row['nome_cliente']}</td>
      <td>{$row['cpf_cliente']}</td>
      <td>{$row['data_n_cliente']}</td>
      <td>{$row['endereco_cliente']}</td>
      <td>{$row['email_cliente']}</td>
      </tbody>
      </table>";

    echo "
    <h3> Informações do Suporte </h3>
    <table class='table table-light table-striped table-bordered table-hover'>
    <thead class='text-center text-uppercase'>
    <tr>
      <th>Nome</th>
      <th>CPF</th>
      <th>Data de nascimento</th>
      <th>Endereço</th>


    </tr>
    </thead>
    <tbody class='text-center'>
    <tr>
    
      <td>{$row['nome_cliente']}</td>
      <td>{$row['data_suporte']}</td>
      <td>{$row['status_suporte']}</td>
      <td>{$row['informacoes_suporte']}</td>
    </tbody>
    </table>";

    echo "  
    <div class= 'd-flex justify-content-center'>
    <a class='btn btn-warning' href='form_editar_suporte.php?id={$row['id_suporte']}&teste={$teste}'>Editar</a> 
    </div>

        ";
} else {
      echo "
      <h3> Informações do Cliente </h3>
      <table class='table table-light table-striped table-bordered table-hover'>
      <thead class='text-center text-uppercase'>
      <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Data de nascimento</th>
        <th>Endereço</th>
        <th>Email</th>


       </tr>
       </thead>
       <tbody class='text-center'>
       <tr>

        <td>{$row['nome_cliente']}</td>
        <td>{$row['cpf_cliente']}</td>
        <td>{$row['data_n_cliente']}</td>
        <td>{$row['endereco_cliente']}</td>
        <td>{$row['email_cliente']}</td>
      </tbody>
      </table>
      ";

      echo "  
      <h3> Informações do Pedido </h3>
      <table class='table table-light table-striped table-bordered table-hover'>
      <thead class='text-center text-uppercase'>
      <tr>
        <th>Tipo de entrega</th>
        <th>Cupom</th>
        <th>CEP</th>
        <th>Endereço</th>
        <th>Data</th>
        <th>Status</th>
        <th>Quantidade</th>


      </tr>
      </thead>
      <tbody class='text-center'>
      <tr>

        <td>{$row['codigo_cupom']}</td>
        <td>{$row['tipo_entrega']}</td>
        <td>{$row['CEP_pedido']}</td>
        <td>{$row['endereco_pedido']}</td>
        <td>{$row['data_pedido']}</td>
        <td>{$row['status_pedido']}</td>
        <td>{$row['quantidade_item']}</td>
     
       </tbody>
       </table>
          ";

      echo "
      <h3> Informações do Produto </h3>
      <table class='table table-light table-striped table-bordered table-hover'>
      <thead class='text-center text-uppercase'>
      <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Tamanho</th>
        <th>Endereço</th>
        <th>Cor</th>
        <th>Valor</th>
    

      </tr>
      </thead>
      <tbody class='text-center'>
      <tr>

        <td>{$row['nome_produto']}</td>
        <td>{$row['desc_produto']}</td>
        <td>{$row['tamanho_produto']}</td>
        <td>{$row['endereco_pedido']}</td>
        <td>{$row['cor_produto']}</td>
        <td>{$row['valor_produto']}</td>  

      </tbody>
      </table>
      ";


     echo "
     <h3> Informações do Suporte </h3>
     <table class='table table-light table-striped table-bordered table-hover'>
     <thead class='text-center text-uppercase'>
    <tr>
      <th>Nome do cliente</th>
      <th>Data</th>
      <th>Status</th>
      <th>Descrição</th>
   
    


    </tr>
    </thead>
    <tbody class='text-center'>
    <tr>

      <td>{$row['nome_cliente']}</td>
      <td>{$row['data_suporte']}</td>
      <td>{$row['status_suporte']}</td>
      <td>{$row['informacoes_suporte']}</td>
      
    </tbody>
    </table>";

    echo "  
    <div class= 'd-flex justify-content-center'>
    <a class='btn btn-warning' href='form_editar_suporte.php?id={$row['id_suporte']}&teste={$teste}'>Editar</a> 
    </div>

        ";

    
  }

?>