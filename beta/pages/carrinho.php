<?php
include '../database/Connection.php';
session_start();

$_SESSION["id"] = "2";

$query = "SELECT * FROM pedido 
JOIN cliente ON pedido.fk_id_cliente = cliente.id_cliente 
JOIN item_pedido ON item_pedido.fk_id_pedido = pedido.id_pedido 
JOIN produto ON produto.id_produto = item_pedido.fk_id_produto 
LEFT JOIN cupom ON cupom.id_cupom = pedido.fk_id_cupom 
WHERE id_cliente = {$_SESSION['id']}";

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
                <small class='text-muted'>{$row['quant_item']} Items de: R$ {$row['valor_produto']}</small>
            </div>
            <button class='btn btn-sm btn-outline-secondary' type=''>Adcionar</button>
            <span class='text-muted'>R$" . $row['valor_produto'] * $row['quant_item'] . "</span>
        </li>
            ";

        $GLOBALS['total'] += $row['valor_produto'] * $row['quant_item'];

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
define('TITLE', 'Carrinho');
define('CSSFILE', '../');
include '../includes/header.php';
?>
<div class="container">
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
    <div class="d-flex justify-content-center row text-center mt-3">
        <h2 class="h2 ">Cliente: <?= $cliente ?></h2>
        <p>Deseja finalizar sua compra ?</p>
        <a class=" text-white btn btn-success col-lg-5" href="./check.php">Comprar</a>
    </div>


</div>
<?php include '../includes/footer.php'; ?>