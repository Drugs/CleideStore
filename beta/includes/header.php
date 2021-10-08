<?php

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

    <title><?= strtoupper(TITLE); ?></title>
</head>

<body>

    <!--Header temporario-->
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between ">
                <a href="../pages/index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <strong>Cleide Store</strong>
                </a>
                <form class="col mb-3 mx-5 mb-lg-0 me-lg-3" action="../pages/listing_products.php" method="GET">
                    <input type="search" name="search" class="form-control" placeholder="Pesquise um produto" aria-label="Search">
                </form>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="true">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Minha conta</a></li>
                        <li><a class="dropdown-item" href="#">Meus pedidos</a></li>
                        <li><a class="dropdown-item" href="#">Carrinho</a></li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Deslogar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>