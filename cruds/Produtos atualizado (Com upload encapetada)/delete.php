<?php
var_dump ($_POST);

$server = "localhost";
$user = "root";
$password = "";
$database = "test";
$id = $_POST["id"];

$connection = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "Falha ao conectar " . mysqli_connect_error();
    exit();
}


$delete= "DELETE FROM lista_produtos WHERE id_prod='{$id}'";

echo $delete;

mysqli_query($connection, $delete);

$_GET['status'] = 1;

if (isset($_GET['status'])){
    
    header ("Location: index.php?confirmacao={$_GET['status']}"); 
};


?>