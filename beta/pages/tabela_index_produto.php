<?php

include '../database/Connection.php';
function Select($table, $column = "*", $data = "")
{
    $query = "SELECT $column FROM $table ";
    $consulta = mysqli_query($GLOBALS['connection'], $query);
    $a = 0;
    $limite = 10; 
    while ($row = mysqli_fetch_assoc($consulta) and $a < $limite) {
        echo
        "<tr>
            <td>{$row['nome_produto']}</td>
            <td>{$row['desc_produto']}</td>
            <td>{$row['valor_produto']}</td>
            <td>{$row['tamanho_produto']}</td>
            <td>{$row['cor_produto']}</td>
            <td>
            <a class='btn btn-success' href='index_detalhes_produto.php?id={$row['id_produto']}'>Detalhes</a>
            </td>
           
       
         </tr>";
         $a++;

    }
}
?>