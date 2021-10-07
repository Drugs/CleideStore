<?php
define('TITLE', 'Cleide Store - Index');

include '../functions/home.php';
include '../includes/header.php';
?>

<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between ">
            <a href="/index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <strong>Logo</strong>
            </a>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
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
<div class="container ">


</div>


<?php
include '../includes/footer.php';
?>