<?php

include '../database/Connection.php';
$id = $_REQUEST['id'];
$delete= "DELETE FROM produto WHERE id_produto='{$id}'";
mysqli_query($connection, $delete);
$_GET['status'] = 1;

if (isset($_GET['status'])){
    
    header ("Location: ../pages/index_produtos.php?confirmacao={$_GET['status']}"); 
};


?>