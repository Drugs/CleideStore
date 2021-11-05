<?php

include "../functions/redirect_products.php";
$product = PullProduct($_GET['product']);
define('TITLE', $product['nome_produto']);
define('CSSFILE', '../');
include '../includes/header.php';


?>

<div class="container">
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
                <div class="carousel-inner ">
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
        <!--Infos produto-->
        <div class="col-12 col-sm-6 col-lg-5 justify-content-center">
            <!--Frete / avaliação-->
            <div class="row mt-3 mt-md-0 mb-3">
                <div class="col-6 col-sm d-flex">
                    <img class="icon col-2" src="../images/icons/freight_icon.svg" alt="icone de frete">
                    <p class="p-title col ms-2 bold">Frete grátis</p>
                </div>
                <!--estrelas-->
                <div class="col-4 col-sm d-flex justify-content-start justify-content-sm-start mb-3 mb-sm-0">
                    <img class="icon" src="../images/icons/star_icon.svg" alt="icone de estrela" />
                    <img class="icon ms-1" src="../images/icons/star_icon.svg" alt="icone de estrela" />
                    <img class="icon ms-1" src="../images/icons/star_icon.svg" alt="icone de estrela" />
                    <img class="icon ms-1" src="../images/icons/star_icon.svg" alt="icone de estrela" />
                    <img class="icon ms-1" src="../images/icons/star_icon.svg" alt="icone de estrela" />
                </div>

            </div>
            <!--preço-->
            <div class="row">
                <p class="prg-2 bold mb-0 ">R$ <?= $product['valor_produto'] ?></p>
                <p class="text-muted ">Até 2x de R$ <?= ceil($product['valor_produto'] / 2) ?></p>
            </div>
            <!--Titulo e descrição-->
            <div class="row mb-3">
                <h1 class="h1 bold text-center mb-3"><?= $product['nome_produto'] ?></h1>
                <p class="text-black prg-0"><?= $product['desc_produto'] ?></p>
            </div>
            <!--Opções de produto-->
            <div class="row">
                <!--selecionar tamanho-->
                <div class="row mt-3">
                    <p class="col-5 col-sm-4 prg-1 bold text-uppercase">Tamanho:</p>
                    <div class="col">
                        <select class="select-control " name="">
                            <option value="p">P</option>
                            <option value="m">M</option>
                            <option value="g">G</option>
                        </select>
                    </div>
                    </label>
                </div>
                <!--Selecionar cor-->
                <div class="row mt-3">
                    <p class="col-5 col-sm-2 prg-1 bold text-uppercase">Cor:</p>
                    <div class="col">
                        <select class="select-control " name="">
                            <option value="black">Preto</option>
                            <option value="white">Branco</option>
                            <option value="red">Vermelho</option>
                        </select>
                    </div>
                    </label>
                </div>

                <!--Botão de comprar e favorito-->
                <div class="row m-auto mt-3 container-plus align-items-center">
                    <button class="col col-sm btn btn-green">Comprar</button>
                    <div class="col-3 col-sm-2 ms-4">
                        <button class=" btn btn-rounded-lg align-items-center shadow-clear">
                            <img src="../images/icons/shop_cart.svg" alt="Icone de carrinho">
                        </button>
                    </div>
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