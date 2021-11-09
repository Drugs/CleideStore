<!doctype html>
<?php
define('TITLE', 'Cleide Store');
define('CSSFILE', '../');
?>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSSFILE ?>css/style.css">

    <title><?= strtoupper(TITLE); ?></title>
</head>

<body>

    <!--Header temporario-->
    <header class="p-3 mb-5 border-bottom">
        <div class="container ">
            <div class="navbar navbar-light  d-flex flex-wrap align-items-center ">
                <a href="../index.php" class="col-12 col-md-2 d-flex align-items-center mb-3 mb-md-0 text-dark text-decoration-none">
                    <strong>Cleide Store</strong>
                </a>
             
                <div class="col-2 col-sm-1 ms-4 ms-sm-0 dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="true">

                        <img src="<?= CSSFILE ?>images/icons/account.svg" alt="Icone de conta">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="<?= CSSFILE ?>pages/carrinho.php">Carrinho</a></li>
                        <li><a class="dropdown-item" href="../">Minha conta</a></li>
                        <li><a class="dropdown-item" href="#">Meus pedidos</a></li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Deslogar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>