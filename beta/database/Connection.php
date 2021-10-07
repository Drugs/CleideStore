<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "cleide_store_beta";

$connection = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "Falha ao conectar " . mysqli_connect_error();
    exit();
}
