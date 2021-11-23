<?php

include "../database/Connection.php";
session_start();

$idProduct = $_GET['id'];

if (isset($_SESSION['user'])) {

    $sql = "SELECT * FROM pedido WHERE fk_id_cliente = '{$_SESSION['user']['id']}'";
    $result = mysqli_query($GLOBALS['connection'], $sql);
    if (mysqli_num_rows($result) != 0) {
    }


    //echo "success";
} else {
    echo "error";
    exit();
}

function VerifyItem()
{

    $queryVerify = "SELECT * FROM item_pedido WHERE fk_id_produto = '{$GLOBALS['idProduct']}'";
    $result = mysqli_query($GLOBALS['connection'], $queryVerify);

    if (mysqli_num_rows($result) != 0) {
        //existe esse item
        $row = mysqli_fetch_assoc($result);
        $row['quantidade_item']++;
        $queryUpdate = "UPDATE item_pedido SET quantidade_item = '{$row['quantidade_item']}'";
        if (mysqli_query($GLOBALS['connection'], $queryVerify)) {
            echo "success";
        }
    } else {
        //Não existe esse item
        $row = mysqli_fetch_assoc($result);
        $queryUpdate = "INSERT INTO item_pedido (fk_id_produto, )'{$row['quantidade_item']}'";
    }
}
