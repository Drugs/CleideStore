<?php
include '../database/Connection.php';

if (isset($_POST)) {
    $data = array("nome" => $_POST['nome'], "cpf" => $_POST['cpf'], "dnasc" => $_POST['dnasc'], "ende" => $_POST['ende'], "email" => $_POST['email'], "senha" => $_POST['senha'],);

    VerifyData($data);
}



function VerifyData($arrayData)
{


    if (calcAge($arrayData['dnasc']) >= 18) {
        $arrayData['cpf'] = preg_replace('/[^0-9]/', '', $arrayData['cpf']);
        $arrayData['senha'] = password_hash($arrayData['senha'], PASSWORD_BCRYPT);;
        $arrayData['email'] = str_replace(' ', '', $arrayData['email']);
        $GLOBALS['data'] = $arrayData;
        VerifyUser($arrayData['email'], $arrayData['cpf']);
    } else {
        header('Location: ../pages/cadastro.php?status=kid');
    }
}

function VerifyUser($email, $cpf)
{
    $query = "SELECT * FROM cliente WHERE email_cliente = '{$email}' or cpf_cliente = {$cpf}";
    $result = mysqli_query($GLOBALS['connection'], $query);

    if (mysqli_num_rows($result) == 0) {

        Register($GLOBALS['data']);
    } else {

        header('Location: ../pages/cadastro.php?status=exists');
    }
}

function calcAge($date)
{
    $dateNasc = explode('-', $date);
    $dateH = explode('-', date("Y-m-d"));
    $years = $dateH[0] - $dateNasc[0];
    return $years;
}

function Register($arrayData)
{
    $query = "INSERT INTO cliente (nome_cliente, email_cliente, cpf_cliente, endereco_cliente, data_n_cliente)
     VALUES ('{$arrayData['nome']}', '{$arrayData['email']}', '{$arrayData['cpf']}', '{$arrayData['ende']}', '{$arrayData['dnasc']}' )";

    if (mysqli_query($GLOBALS['connection'], $query)) {


        $querySelect = "SELECT id_cliente FROM cliente WHERE email_cliente = '{$arrayData['email']}' or cpf_cliente = {$arrayData['cpf']}";
        $result = mysqli_query($GLOBALS['connection'], $querySelect);
        if (mysqli_num_rows($result) != 0) {
            //
            $result = mysqli_fetch_assoc($result);
            $queryInsert = "INSERT INTO usuario (fk_id_cliente, email_usuario, senha_usuario, nivel_usuario) VALUES ( '{$result['id_cliente']}', '{$arrayData['email']}', '{$arrayData['senha']}', '1')";

            if (mysqli_query($GLOBALS['connection'], $queryInsert)) {
                header('Location: ../pages/cadastro.php?status=success');
                exit();
            } else {
                header('Location: ../pages/cadastro.php?status=error');
                exit();
            }
        } else {
            header('Location: ../pages/cadastro.php?status=error');
            exit();
        }
    } else {
        header('Location: ../pages/cadastro.php?status=error');
        exit();
    }
}

 //header('Location: ../pages/cadastro?status=');