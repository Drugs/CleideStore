<?php
include '../database/Connection.php';

$comand = $_GET['comand'];
$id_item = $_GET['id'];


if ($comand == "Add") {
    Alter("Add", $id_item);
    
}

if ($comand == "Remo") {
    Alter("Remo", $id_item);

}

function Alter($comand , $id_item) {

    $query = "SELECT quantidade_item, valor_produto FROM item_pedido JOIN produto on fk_id_produto = id_produto WHERE id_item_pedido = {$id_item}";
    $result = mysqli_query($GLOBALS['connection'], $query);
    $row = mysqli_fetch_assoc($result);
    $quanti = $row['quantidade_item'];
    $valor = $row['valor_produto'];
    
    $comand == "Add" ? $quanti++ : $quanti-- ;

	if($quanti <= 0){$quanti = 0;}
    $query = "UPDATE item_pedido SET quantidade_item = {$quanti} WHERE id_item_pedido = {$id_item}";
    $result = mysqli_query($GLOBALS['connection'], $query);
	if($quanti < 0) {
		$row = 	[
					"quantidade_item" => 0,
					"valor_produto" => $valor,
				];
        echo json_encode($row);
		die();
    }
    echo json_encode($row);
}








?>