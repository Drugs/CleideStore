<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "test";



// Cria a conexão
$mysqli = mysqli_connect($servername, $username, $password, $bd);

$query = "DELETE FROM usuario WHERE id_usuario<2";
echo $query;
mysqli_query($mysqli, $query);
header('Location: index.php');
if (!$query) {
  echo("Error description: " . mysqli_error($con));
}
?>