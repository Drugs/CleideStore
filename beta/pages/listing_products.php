<?php
define('TITLE', 'Listagem de produtos');
include '../functions/search.php';
include '../includes/header.php';


?>

<section class="container">
    <div class="row">
        <h1 class="h1 text-center mb-4">Resultados da sua pesquisa</h1>
        <?= SearchProduct(); ?>
    </div>
</section>

<?php include '../includes/footer.php'; ?>