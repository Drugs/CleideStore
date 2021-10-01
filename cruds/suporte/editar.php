<?php session_start();
include_once('conexao.php');
$id = $_GET['id'];

$consulta = "SELECT * FROM `suporte` WHERE `id_suporte` = $id";

$result = mysqli_query($mysqli, $consulta);
$dados = mysqli_fetch_assoc($result);


    if(isset($_POST['submit'])){ //Isso é depois de mandar o formulário
		//echo "alguem mandou ";
        $id = $_POST['id_suporte'];
		$status = $_POST['status_suporte'];
        $iclient = $_POST['id_cliente'];
        $data = $_POST['data_suporte'];


        $consulta = "UPDATE `suporte` SET `status_suporte` = '$status', `id_cliente` = $iclient, `data_suporte` = '$data' WHERE `suporte`.`id_suporte` = $id";
		//echo $consulta; //(Escrever a consulta e testar no Banco de Dados).
        
        $result = mysqli_query($mysqli, $consulta);

        if($result==true){
            header('Location: relatorio.php');
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
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body> <a href="relatorio.php">Voltar</a>
    <div class="box">
        <form action="" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Suporte</b></legend>
                <br>
                <div class="inputBox">
                    <input type="number" name="id_cliente" id="id_cliente" class="inputUser" value="<?php if(isset($dados['id_cliente']) and $dados['id_cliente'] !='') {echo $dados['id_cliente'];}?>" required>
                    <label for="id_cliente" class="labelInput"></label>
                </div>
                <br><br>    
                <div class="inputBox">
                    <input type="datetime-local" name="data_suporte" id="data_suporte" class="inputUser" value="<?php if(isset($dados['data_suporte']) and $dados['data_suporte'] !='') {echo date('Y-m-d\TH:i', strtotime($dados['data_suporte']));}?>" required>
                    <label for="data_suporte" class="labelInput"></label>
                    <?php  ?>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="status_suporte" id="status_suporte" class="inputUser" value="<?php if(isset($dados['status_suporte']) and $dados['status_suporte'] !='') {echo $dados['status_suporte'];}?>" required>
                    <label for="status_suporte" class="labelInput"></label>
                </div>
                <input type="hidden" name="id_suporte" value="<?php echo $_GET['id']; ?>">
                <br><br><br>
                <input type="submit" name="submit" value="Editar" id="submit"><br><br>
            </fieldset>
        </form>
    </div>
</body>
</html>
