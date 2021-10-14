<?php

include '../database/Connection.php';

function SearchProduct()
{
    if (!isset($_GET['search']) || empty($_GET['search'])) {
        header('Location: ../pages/index.php');
        exit;
    } else if (isset($_GET['search'])) {

        $productSearched = "%" . trim($_GET['search']) . "%";

        $sql = "SELECT * FROM produto WHERE nome_produto LIKE '{$productSearched}'";

        $result = mysqli_query($GLOBALS['connection'], $sql);

        if (mysqli_num_rows($result) == 0) {
            define('SEARCHRESULT', 'Nenhum resultado encontrado');
        } else {
            define('SEARCHRESULT', 'Resultados da sua pesquisa');
            while ($row = mysqli_fetch_assoc($result)) {

                $installments = ceil($row['valor_produto'] / 2);

                echo "
                <div class='col-12 col-sm-6 col-md-4 col-lg-3 container-product'>
                    <a href='../functions/redirect_products.php?id={$row['id_produto']}' class='link-reset'>
                        <div class=' box-product mb-4'>
                            <div class='img-area mb-2'> <img src='../images/roupa-1.jpg'> </div>
                            <div class='info-area'>
                                <h4 class='h4 text-uppercase mb-2'>{$row['nome_produto']}</h4>
                                <p class='prg-0 text-muted mb-1'>Até 2x de R$ {$installments}</p>
                                <p class='prg-1 text-uppercase'>Frete grátis</p>
                            </div>
                        </div>
                    </a>
                </div>
                    ";
            }
        }
    }
}

/*


*/