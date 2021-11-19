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
    $result = mysqli_fetch_assoc($result);

    if (strpos($result['nome_produto'], "Ageu") !== false) {
        $result['nameBoy'] = "ageu";
    }
    if (strpos($result['nome_produto'], "Maciel") !== false) {
        $result['nameBoy'] = "maciel";
    }
    if (strpos($result['nome_produto'], "Prof") !== false) {
        $result['nameBoy'] = "prof";
    }
    if (strpos($result['nome_produto'], "Marcos") !== false) {
        $result['nameBoy'] = "marcos";
    }

    return $result;
}

function SearchName($name_product)
{
    $sql = "SELECT * FROM produto WHERE nome_produto ='{$name_product}' ";
    $result = mysqli_query($GLOBALS['connection'], $sql);

    return mysqli_fetch_assoc($result);
}
