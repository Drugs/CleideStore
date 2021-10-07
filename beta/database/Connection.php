<?php

$server = "localhost";
$user = "root";
$password = "root"; // se tiver "root" invés de vazio, foi saimon. Só trocar e ser feliz
$database = "cleide_store_beta";

$connection = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "Falha ao conectar " . mysqli_connect_error();
    exit();
}
