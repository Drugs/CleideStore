<?php
include '../database/Connection.php';



if (isset($_GET['id'])) {

    SqlExecute("id_produto", $_GET['id']);
} else {
    //header('Location: ../pages/index.php');
}


function SqlExecute($param, $value)
{

    $sql = "SELECT * FROM produto WHERE $param = ";
    $sql .= $param == "id_produto" ? "$value" : "'{$value}'";

    $result = mysqli_query($GLOBALS['connection'], $sql);


    if (mysqli_num_rows($result) == 0) {

        header('Location: ../pages/index.php');
    } else {

        $row = mysqli_fetch_assoc($result);
        header("Location: ../pages/product_page.php?product={$row['nome_produto']}");
    }
}


function PullProduct($name_product)
{

    $sql = "SELECT * FROM produto WHERE nome_produto ='{$name_product}' ";
    $result = mysqli_query($GLOBALS['connection'], $sql);

    return mysqli_fetch_assoc($result);
}
