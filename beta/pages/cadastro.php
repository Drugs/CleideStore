<?php session_start();
include_once('Connection.php');

//echo "ninguém mandou";



if (isset($_POST['submit'])) {

    //echo "alguem mandou ";

    $iclient = $_POST['nome_cliente'];
    $email = $_POST['email_cliente'];
    $senha = $_POST['senha_cliente'];

    $consulta = "INSERT INTO cliente (nome_cliente, email_cliente, senha_cliente) VALUES ($iclient, '$email', '$senha')";
    $result = mysqli_query($mysqli, $consulta);


    //Para cadastrar, formulário, puxar os imputs das tabelas do bd;
    //Post pra frente, pegar dados e fazer consulta;
    //tiver tudo certo, manda pro relatório.


    //Imprimir as variáveis e verificar se os nomes estão todos (OK).

    //where client_id = {$id};
    //";
    #echo $consulta; //(Escrever a consulta e testar no Banco de Dados).

    $result = mysqli_query($mysqli, $consulta);

    if ($result == true) {
        include_once('index.php');
        die();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro </title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset {
            border: 3px solid dodgerblue;
        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>

<body> <a href="index.php?p=inicial">Voltar</a>
    <div class="box">
        <form action="" method="POST">
            <fieldset>
                <legend><b>Cadastro de Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="text" id="nome_cliente" class="inputUser" required>
                    <label for="nome_cliente" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email_cliente" id="email_cliente" class="inputUser" required>
                    <label for="email_cliente" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha_cliente" id="senha_cliente" class="inputUser" required>
                    <label for="senha_cliente" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="cpf_cliente" id="cpf_cliente" class="inputUser" required>
                    <label for="cpf_cliente" class="labelInput">CPF</label>
                </div>
                <br><br>

                <input type="submit" name="submit" value="Cadastre-se" id="submit"><br><br>
            </fieldset>
        </form>
    </div>
</body>

</html>