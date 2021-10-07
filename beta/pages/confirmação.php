<?php
include 'Connection.php';
session_start();
$id = $_SESSION['id'];
$query = "SELECT * FROM pedido 
JOIN cliente ON pedido.fk_id_cliente = cliente.id_cliente 
JOIN item_pedido ON item_pedido.fk_id_pedido = pedido.id_pedido 
JOIN produto ON produto.id_produto = item_pedido.fk_id_produto 
LEFT JOIN cupom ON cupom.id_cupom = pedido.fk_id_cupom 
WHERE id_cliente = {$id}";

$total = 0;
$cliente = 'Teste';
$data_cupom = '';
$desconto_cupom = 0;
$codigo_cupom = '';
$text_status = 'success';
$discounted = false; 

$result = mysqli_query($GLOBALS['connection'], $query);

function CreateList()
{
    echo "
    <li class='list-group-item d-flex '>
    <div>
    <h6>Produto</h6>
    </div>";
    while ($row = mysqli_fetch_assoc($GLOBALS['result'])) {
        $GLOBALS['cliente'] = $row['nome_cliente'];
        echo "
            
            <li class='list-group-item d-flex justify-content-between lh-sm'>
            <div>
                <h6 class='my-0'>{$row['nome_produto']}</h6>
                <small class='text-muted'>{$row['quantidade_item']} Items de: R$ {$row['valor_produto']}</small>
            </div>
            
            <span class='text-muted'>R$" . $row['valor_produto'] * $row['quantidade_item'] . "</span>
        </li>
            ";

        $GLOBALS['total'] += $row['valor_produto'] * $row['quantidade_item'];

        if (isset($row['codigo_cupom']) && $GLOBALS['discounted'] == false) {

            $GLOBALS['discounted'] = true;
            $GLOBALS['codigo_cupom'] = $row['codigo_cupom'];
            ValidateCupom($row['d_limite_cupom'], $row['valor_cupom']);
        }
    } 
}

function ValidateCupom($data_cupom, $valor)
{

    date_default_timezone_set('America/Bahia');
    $date = date('Y-m-d');

    if (strtotime($data_cupom) > strtotime($date)) {
        $GLOBALS['text_status'] = 'success';
        $GLOBALS['desconto_cupom'] = $valor;

        $GLOBALS['total'] -= $GLOBALS['desconto_cupom'];
    } else {
        $GLOBALS['text_status'] = 'danger';
        $GLOBALS['desconto_cupom'] = 0;
        $GLOBALS['codigo_cupom'] = $GLOBALS['codigo_cupom'] . ' - Expirado';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="includes/bootstrap.min.css" />
    <title>Confirmação de <?= $cliente ?></title>
</head>

<body>
        <ul class='list-group mb-3 mt-5'>

            <?php CreateList(); ?>
            <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-<?= $text_status ?>">
                    <h6 class="my-0">Cupom de desconto</h6>
                    <small><?= $codigo_cupom ?></small>
                </div>
                <span class="text-<?= $text_status ?>">−R$ <?= $desconto_cupom ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span>Total:</span>
                <strong>$<?= $total ?></strong>
            </li>  
        </ul>
        <div class="row text-center mt-3">
            <h2 class="h2 "><?= $cliente ?></h2>
            <p>Deseja finalizar sua compra ?</p>
            <a class="btn btn-success" href="./white.php">Finalizar</a>
        </div>


    </div>

    <footer class="mb-4 mt-5">
        <div class="container-fluid">
            <p class="text-center display-8 mb-1">Código criado e bugado por alguém do grupo B.</p>

            <p class="display-8 text-center"><a href="https://instagram.com/siimon.pao" class="text-decoration-none text-info">☕ Me pague um café ❤</a></p>

        </div>
    </footer>

    <script src="includes/bootstrap.min.js"></script>
</body>

</html>

<!--
                     .
                    / V\
                  / `  /
                 <<   |
                 /    |
               /      |
             /        |
           /    \  \ /
          (      ) | |
    _______|   _/_  | |
  <_________\______)\__)
-->