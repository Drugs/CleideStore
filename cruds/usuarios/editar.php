<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "test";
$nome = $_POST["login"];
$senha = $_POST["senha"];
$nivel = $_POST["nivel"];



// Cria a conexão
$mysqli = mysqli_connect($servername, $username, $password, $bd);

$query = "UPDATE usuario SET login_usuario='$nome',senha_usuario='$senha',nivel_usuario='$nivel' WHERE id_usuario='{$_POST["id"]}'";
echo $query;
mysqli_query($mysqli, $query);
header('Location: index.php');
if (!$query) {
  echo("Error description: " . mysqli_error($con));
}
?>