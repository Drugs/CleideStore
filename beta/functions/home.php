<?php

include 'database/Connection.php';

function Select($table)
{
    $sql = "SELECT * FROM $table";

    return mysqli_query($GLOBALS['connection'], $sql);
}

function ShowProducts($maxP = '')
{
    $result = Select('produto');

    $displayedProducts = 0;

    while ($row = mysqli_fetch_assoc($result)) {

        if ($displayedProducts < $maxP || empty($maxP)) {
            $nameBoy = "";
            $numImage = rand(1, 3);

            if (strpos($row['nome_produto'], "Ageu") !== false) {
                $nameBoy = "ageu";
            }
            if (strpos($row['nome_produto'], "Maciel") !== false) {
                $nameBoy = "maciel";
            }
            if (strpos($row['nome_produto'], "Prof") !== false) {
                $nameBoy = "prof";
            }
            if (strpos($row['nome_produto'], "Marcos") !== false) {
                $nameBoy = "marcos";
            }


            $displayedProducts++;
            $installments = ceil($row['valor_produto'] / 2);
            echo "
            <div class='col-12 col-sm-6 col-md-4 col-lg-3 container-product'>
                <a href='functions/redirect_products.php?id={$row['id_produto']}' class='link-reset'>
                    <div class=' box-product mb-4'>
                        <div class='img-area mb-2'> <img src='images/products/{$nameBoy}/roupa-{$numImage}.png'> </div>
                        <div class='info-area'>
                            <h4 class='h4 text-uppercase mb-2'>{$row['nome_produto']}</h4>
                            <p class='prg-0 text-muted mb-1'>Até 2x de R$ {$installments}</p>
                            <p class='prg-1 text-uppercase'>Frete grátis</p>
                        </div>
                    </div>
                </a>
            </div>
                ";
        } elseif ($displayedProducts == 20) {
            exit();
        }
    }
}
