<?php
var_dump ($_FILES);

$server = "localhost";
$user = "root";
$password = "";
$database = "test";
$nome = $_POST["nome"];
$tamanho = $_POST["tamanho"];
$cor = $_POST["cor"];
$img = base64_encode(strtotime('now'));
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$connection = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "Falha ao conectar " . mysqli_connect_error();
    exit();
}

$local_up = "img/";
$arquivo_up = $local_up . $img. ".jpeg";
echo $arquivo_up;
$up_ok = 1; 
$tipo_up = strtolower(pathinfo($arquivo_up,PATHINFO_EXTENSION));

if(isset($_FILES["img"])) {
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) {
      echo " O arquivo é uma imagem - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo " O arquivo não é uma imagem.";
      $uploadOk = 0;
    }
  }
  if ($_FILES["img"]["size"] > 200000000) {
    echo "Desculpa o arquivo é muito grande";
    $uploadOk = 0;
  }
  if($tipo_up != "jpeg") {
    echo "Tipo de arquivo não suportado";
    $uploadOk = 0;
  }

  if ($uploadOk == 0) {
    echo "Faça o upload de outro arquivo e tente novamente.";
  } else {
    $_FILES["img"]["name"] =  $img ."." .  $tipo_up;
    $nameimg = $_FILES["img"]["name"];
    if (move_uploaded_file($_FILES["img"]["tmp_name"], "img/" . $_FILES["img"]["name"])) {
      echo "The file ". htmlspecialchars( basename( $_FILES["{$img}"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
$querry= "INSERT INTO `lista_produtos` (nome_prod, tamanho_prod, cor_prod, valor_prod, descricao_prod, img_prod)
VALUES ('{$nome}', '{$tamanho}','{$cor}',{$preco},'{$descricao}','{$nameimg}')";
mysqli_query($connection, $querry);
$_GET['status'] = 0;

if (isset($_GET['status'])){
    
    header ("Location: index.php?confirmacao={$_GET['status']}"); 
};



?>