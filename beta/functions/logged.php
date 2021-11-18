<?php

include "../database/Connection.php";
session_start();

if (isset($_GET['exit']) && $_GET['exit'] == 1 && isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
    session_destroy();
    header("location: ../index.php");
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    //Verifica email
    $sql = "SELECT * FROM usuario WHERE email_usuario = '{$_POST['email']}'";
    $result = mysqli_query($GLOBALS['connection'], $sql);

    if (!empty($result)) {
        //Verifica senha
        $user = mysqli_fetch_assoc($result);
        $correctPass = password_verify($_POST['password'], $user['senha_usuario']);
        

        //Busca cliente por fk id.
        $sql = "SELECT * FROM cliente WHERE id_cliente = '{$user['fk_id_cliente']}'";
        $result = mysqli_query($GLOBALS['connection'], $sql);
        $cliente = mysqli_fetch_assoc($result);

        if ($correctPass) {
            header("location: ../index.php?status=success");
            $_SESSION['user'] = array('id' => $user['fk_id_cliente'], 'acess' => $user['nivel_usuario'], 'name' => $cliente['nome_cliente']);
        } else {
            header("location: ../pages/login.php?status=error");
        }
    }
}

