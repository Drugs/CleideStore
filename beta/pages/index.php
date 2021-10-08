<?php
define('TITLE', 'Cleide Store - Index');

include '../functions/home.php';
include '../includes/header.php';
?>

<section class="container ">

    <!--Exibindo 20 produtos-->
    <div class="row">
        <h1 class="h1 text-center mb-4">Alguns produtos da loja </h1>
        <?= ShowProducts(20); ?>
    </div>

</section>



<?php
include '../includes/footer.php';
?>