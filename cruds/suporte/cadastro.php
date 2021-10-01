<?php session_start();
include_once('conexao.php');

//echo "ninguém mandou";



if (isset($_POST['submit'])) {

    //echo "alguem mandou ";

    $status = $_POST['status_suporte'];
    $iclient = $_POST['pamonha'];
    $data = $_POST['data_suporte'];

    $consulta = "INSERT INTO suporte (id_cliente, data_suporte, status_suporte) VALUES ($iclient, '$data', '$status')";
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
        include_once('relatorio.php');
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
    <title>Formulário | GN</title>
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
                <legend><b>Fórmulário de Suporte</b></legend>
                <br>
                <div class="inputBox">
                    <input type="number" name="pamonha" id="id_cliente" class="inputUser" required>
                    <label for="id_cliente" class="labelInput">cliente</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="datetime-local" name="data_suporte" id="data_suporte" class="inputUser" required>
                    <label for="data_suporte" class="labelInput"></label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="status_suporte" id="status_suporte" class="inputUser" required>
                    <label for="status_suporte" class="labelInput">status</label>
                </div>
                <br><br>

                <input type="submit" name="submit" value="Editar" id="submit"><br><br>
            </fieldset>
        </form>
    </div>
</body>

</html>