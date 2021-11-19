<?php
//saimon
define('TITLE', 'Listagem de produtos');
define('CSSFILE', '../');
include '../functions/search.php';
include '../includes/header.php';


?>

<section class="container">
    <div class="row">
        <?= SearchProduct(); ?>
        <h1 class="h1 text-center mb-4 order-first"><?= SEARCHRESULT ?></h1>
        <h1></h1>
    </div>
</section>

<?php include '../includes/footer.php'; ?>