<?php
  
  $servidor = "localhost";
  $usuario = "id13395315_usuariomaciel";
  $senha = "5PKHjE^Ea<j|RWNJ";
  $banco = "id13395315_cliente";
  
  $mysql = mysqli_connect($servidor, $usuario, $senha, $banco);
  
  if(mysqli_connect_errno()){
      echo "A conexão mysql falhou" . mysql_connect_error;
     
      exit();
  }

  //var_dump($servidor, $usuario, $senha, $banco);


?>