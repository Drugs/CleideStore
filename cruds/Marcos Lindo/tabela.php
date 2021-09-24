<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "test";
// Cria a conexão
$mysqli = mysqli_connect($servername, $username, $password, $bd);
$query = "SELECT * FROM `cliente`";
$consulta = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Tabela de Dados dos Clientes</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        body {
            background-color: #212529;
            height: 00px;
        }
        body table {
            margin-top: 20px;
        }
        #botao1 {
            margin-top: 60px;
        }
    </style>
</head>

<body>
<center>
<a href="cadastrar.html"><button type="button" class="btn btn-success" id="botao1">CADASTRAR CLIENTE</button></a>
</center>
<table class="table table-sm table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">ENDEREÇO</th>
                <th scope="col">EMAIL</th>
                <th scope="col">CPF</th>
                <th scope="col">DATA DE NASCIMENTO</th>
                <th scope="col">EDITAR</th>
                <th scope="col">REMOVER</th>
            </tr>
        </thead>
        <tbody>
<?php while($dado = $consulta->fetch_array()) { ?>
    
            <tr>
                <th scope="row"><?php echo $dado['cliente_id'];?></th>
                <td><?php echo $dado['nome'];?></td>
                <td><?php echo $dado['endereco'];?></td>
                <td><?php echo $dado['email'];?></td>
                <td><?php echo $dado['cpf'];?></td>
                <td><?php echo $dado['data_n'];?></td>
                <td><a class="btn btn-primary" href="editar.html" role="button">EDITAR</a></td>
                <td><a class="btn btn-danger" href="deletar.html" role="button">REMOVER</a></td>
            </tr>
    <?php } ?> 
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>