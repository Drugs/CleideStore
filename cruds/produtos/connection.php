<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "test";

$connection = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "Falha ao conectar " . mysqli_connect_error();
    exit();
}


function Select($table, $column = "*", $data = "")
{
    $query = "SELECT $column FROM $table ";
    $consulta = mysqli_query($GLOBALS['connection'], $query);

    
    while ($row = mysqli_fetch_assoc($consulta)) {
        echo
        "<tr>
            <td>{$row['nome_prod']}</td>
            <td>{$row['descricao_prod']}</td>
            <td>{$row['valor_prod']}</td>
            <td>{$row['tamanho_prod']}</td>
            <td>{$row['cor_prod']}</td>
           
            <td>
            <a class='btn btn-warning' href='formatt.php?id={$row['id_prod']}'>Editar</a>
            <a class='btn btn-danger' href='formdel.php?id={$row['id_prod']}'>Deletar</a>

            </td>
       
         </tr>";

    }
}
