<?php
$cssFile = CSSFILE;
include_once "{$cssFile}functions/verify.php";
$check = CheckUser($cssFile);
$userName = NameUser();

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSSFILE ?>css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="<?= CSSFILE ?>images/icons/favicon.png" type="image/x-icon" />
    <title><?= strtoupper(TITLE); ?></title>
</head>

<body>

    <!--Header temporario-->
    <header class="p-3 mb-5 border-bottom">
        <div class="container ">
            <div class="d-flex flex-wrap align-items-center ">
                <a href="../index.php" class="col-12 col-md-2 d-flex align-items-center mb-3 mb-md-0 text-dark text-decoration-none">
                    <strong>Cleide Store</strong>
                </a>
                <form class="col mb-3 mb-lg-0 me-sm-5 " action="..<?= CSSFILE == '' ? '/beta' : ''; ?>/pages/listing_products.php" method="GET">
                    <input type="search" name="search" class="form-control" placeholder="Pesquise um produto" aria-label="Search">
                </form>

                <div class="col-2 col-sm-1 ms-4 ms-sm-0 dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="true">

                        <img src="<?= CSSFILE ?>images/icons/<?= $GLOBALS['icon'] ?>.svg" alt="Icone de conta">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <?= $check ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>