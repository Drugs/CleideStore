<?php

include "../functions/redirect_products.php";
define('TITLE', 'Pagina do produto');
include '../includes/header.php';

$product = PullProduct($_GET['product']);

?>

<h1 class="h1 text-center mb-4"><?= $product['nome_produto'] ?></h1>
<div class="row">

    <!--Imagenszinhas-->
    <div class="col-0 col-sm-0 col-lg-2 d-none d-lg-flex justify-content-center align-content-center">
        <div class="row">
            <ul class="list-unstyled">
                <li class="thumbnail">
                    <img class="rounded-1 thumbnail-image" onclick="changeImage(this)" src="../images/roupa-1.jpg" />
                </li>
                <li class="thumbnail">
                    <img class="rounded-1 thumbnail-image" onclick="changeImage(this)" src="../images/roupa-2.jpg" />
                </li>
                <li class="thumbnail">
                    <img class="rounded-1 thumbnail-image" onclick="changeImage(this)" src="../images/roupa-1.jpg" />
                </li>
            </ul>
        </div>
    </div>
    <!--Foto maior-->
    <div class="col-12 col-sm-6 col-lg-5 justify-content-center">
        <div class="row d-none d-lg-flex">
            <img class="rounded-1 thumbnail-full" src="../images/roupa-1.jpg" id="main_product_image" />
        </div>
        <!--Slider-->
        <div id="caroulsContainer" class="carousel slide d-lg-none" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#caroulsContainer" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#caroulsContainer" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#caroulsContainer" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/roupa-2.jpg" class="d-block w-100" alt="Imagem do produto" />
                </div>
                <div class="carousel-item">
                    <img src="../images/roupa-2.jpg" class="d-block w-100" alt="Imagem do produto" />
                </div>
                <div class="carousel-item">
                    <img src="../images/roupa-2.jpg" class="d-block w-100" alt="Imagem do produto" />
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //Código pra galeria de imagens
    function changeImage(element) {
        var main_prodcut_image = document.getElementById("main_product_image");
        main_prodcut_image.src = element.src;
    }
</script>
<?php include '../includes/footer.php'; ?>