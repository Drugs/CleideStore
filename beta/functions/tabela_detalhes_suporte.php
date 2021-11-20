<?php 


if ($teste == NULL) {
    
    echo "
    <div class='container'>
     <div class= 'row d-flex justify-content-center'>
      <div class='col-sm-4'>
     <h3 class= 'mb-3'>Informações do Cliente:</h3>
    <ul class='list-group'>
  <li class='list-group-item d-flex'>
    <div class='ms-2'>
      <div class='fw-bold'>Nome:</div>
      {$row['nome_cliente']}
    </div>
    </li>
  <li class='list-group-item d-flex'>
    <div class='ms-2'>
      <div class='fw-bold'>CPF:</div>
       {$row['cpf_cliente']}
    </div>
    </li>
  <li class='list-group-item d-flex'>
  <div class='ms-2'>
    <div class='fw-bold'>Data de nascimento:</div>
    {$row['data_n_cliente']}
  </div>
  </li>
  <li class='list-group-item d-flex'>
    <div class='ms-2'>
      <div class='fw-bold'>Endereço:</div>
      {$row['endereco_cliente']}
    </div>
    </li>
  <li class='list-group-item d-flex'>
  <div class='ms-2'>
    <div class='fw-bold'> Email:</div>
    {$row['email_cliente']}
  </div>
  </li>
  </ul>
     </div>

     <div class='col-4'>
     <h3 class= 'mb-3'>Informações do Suporte:</h3>
    <ul class='list-group'>
  <li class='list-group-item d-flex'>
    <div class='ms-2'>
      <div class='fw-bold'>Tipo de entrega:</div>
      {$row['nome_cliente']}
    </div>
    </li>
  <li class='list-group-item d-flex'>
    <div class='ms-2'>
      <div class='fw-bold'>Data:</div>
       {$row['data_suporte']}
    </div>
    </li>
  <li class='list-group-item d-flex'>
  <div class='ms-2'>
    <div class='fw-bold'>Status:</div>
    {$row['status_suporte']}
  </div>
  </li>
  <li class='list-group-item d-flex'>
    <div class='ms-2'>
      <div class='fw-bold'>Endereço:</div>
      {$row['endereco_cliente']}
    </div>
    </li>
  <li class='list-group-item d-flex'>
  <div class='ms-2'>
    <div class='fw-bold'> Descrição:</div>
    {$row['informacoes_suporte']}
  </div>
  </li>
  </ul>
     </div>
    </div>
    </div>";

    echo "  
    <div class= 'd-flex mt-5 justify-content-center'>
    <a class='btn btn-yellow' href='form_editar_suporte.php?id={$row['id_suporte']}&teste={$teste}'>Editar</a> 
    </div>

        ";
} else {
      echo "
      <div class='container'>
     <div class= 'row d-flex justify-content-center'>
      <div class='col-sm-4'>
     <h3 class= 'mb-3'>Informações do Cliente:</h3>
    <ul class='list-group'>
  <li class='list-group-item d-flex'>
    <div class='ms-2'>
      <div class='fw-bold'>Nome:</div>
      {$row['nome_cliente']}
    </div>
    </li>
  <li class='list-group-item d-flex'>
    <div class='ms-2'>
      <div class='fw-bold'>CPF:</div>
       {$row['cpf_cliente']}
    </div>
    </li>
  <li class='list-group-item d-flex'>
  <div class='ms-2'>
    <div class='fw-bold'>Data de nascimento:</div>
    {$row['data_n_cliente']}
  </div>
  </li>
  <li class='list-group-item d-flex'>
    <div class='ms-2'>
      <div class='fw-bold'>Endereço:</div>
      {$row['endereco_cliente']}
    </div>
    </li>
  <li class='list-group-item d-flex'>
  <div class='ms-2'>
    <div class='fw-bold'> Email:</div>
    {$row['email_cliente']}
  </div>
  </li>
  </ul>
     </div>
 
     <div class='col-sm-4'>
     <h3 class= 'mb-3'>Informações do Produto:</h3>
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

     <div class='col-4'>
     <h3 class= 'mb-3'>Informações do Suporte:</h3>
    <ul class='list-group'>
  <li class='list-group-item d-flex'>
    <div class='ms-2'>
      <div class='fw-bold'>Tipo de entrega:</div>
      {$row['nome_cliente']}
    </div>
    </li>
  <li class='list-group-item d-flex'>
    <div class='ms-2'>
      <div class='fw-bold'>Data:</div>
       {$row['data_suporte']}
    </div>
    </li>
  <li class='list-group-item d-flex'>
  <div class='ms-2'>
    <div class='fw-bold'>Status:</div>
    {$row['status_suporte']}
  </div>
  </li>
  <li class='list-group-item d-flex'>
    <div class='ms-2'>
      <div class='fw-bold'>Endereço:</div>
      {$row['endereco_pedido']}
    </div>
    </li>
  <li class='list-group-item d-flex'>
  <div class='ms-2'>
    <div class='fw-bold'> Descrição:</div>
    {$row['informacoes_suporte']}
  </div>
  </li>
  </ul>
     </div>
     
     
     <div class='col-sm-4 mb-5 mt-4'>
     <h3 class='mb-3'>Informações do Pedido:</h3>
    <ul class='list-group'>
  <li class='list-group-item d-flex'>
    <div class='ms-2'>
      <div class='fw-bold'>Tipo de entrega:</div>
      {$row['tipo_entrega']}
    </div>
    </li>
  <li class='list-group-item d-flex'>
    <div class='ms-2'>
      <div class='fw-bold'>Cupom:</div>
       {$row['codigo_cupom']}
    </div>
    </li>
  <li class='list-group-item d-flex'>
  <div class='ms-2'>
    <div class='fw-bold'>CEP:</div>
    {$row['CEP_pedido']}
  </div>
  </li>
  <li class='list-group-item d-flex'>
    <div class='ms-2'>
      <div class='fw-bold'>Endereço:</div>
      {$row['endereco_pedido']}
    </div>
    </li>
  <li class='list-group-item d-flex'>
  <div class='ms-2'>
    <div class='fw-bold'> Data:</div>
    {$row['data_pedido']}
  </div>
  </li>
  <li class='list-group-item d-flex'>
  <div class='ms-2'>
    <div class='fw-bold'> Status:</div>
    {$row['status_pedido']}
  </div>
  </li>
  <li class='list-group-item d-flex'>
  <div class='ms-2'>
    <div class='fw-bold'> Quantidade:</div>
    {$row['quantidade_item']}
  </div>
  </li>
  </ul>
     </div>
";

    echo " 
    <h1> </h1> 
    <div class= 'd-flex justify-content-center'>
    <a class='btn btn-yellow' href='form_editar_suporte.php?id={$row['id_suporte']}&teste={$teste}'>Editar</a> 
    </div>
    </div>
    </div>
        ";

    
  }
?>