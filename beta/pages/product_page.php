<?php

include "../functions/redirect_products.php";
$product = PullProduct($_GET['product']);
define('TITLE', $product['nome_produto']);
define('CSSFILE', '../');
include '../includes/header.php';



?>

<div class="container">
    <div id="divf">
        <!--<div class='alert alert-success alert-dismissible fade show' id="alert" role='alert'>Produto adicionado ao carrinho!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button></div>-->
    </div>
    <div class="row">
        <!--Imagenszinhas-->
        <div class="col-0 col-sm-0 col-lg-2 d-none d-lg-flex justify-content-center align-content-center">
            <div class="row">
                <ul class="list-unstyled">
                    <li class="thumbnail">
                        <img class="rounded-1 thumbnail-image" onclick="changeImage(this)" src="../images/products/<?= $product['nameBoy'] ?>/roupa-1.png" />
                    </li>
                    <li class="thumbnail">
                        <img class="rounded-1 thumbnail-image" onclick="changeImage(this)" src="../images/products/<?= $product['nameBoy'] ?>/roupa-2.png" />
                    </li>
                    <li class="thumbnail">
                        <img class="rounded-1 thumbnail-image" onclick="changeImage(this)" src="../images/products/<?= $product['nameBoy'] ?>/roupa-3.png" />
                    </li>
                </ul>
            </div>
        </div>
        <!--Foto maior-->
        <div class="col-12 col-sm-6 col-lg-5 justify-content-center">
            <div class="row d-none d-lg-flex">
                <img class="rounded-1 thumbnail-full" src="../images/products/<?= $product['nameBoy'] ?>/roupa-1.png" id="main_product_image" />
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
                        <img src="../images/products/<?= $product['nameBoy'] ?>/roupa-1.png" class="d-block w-100" alt="Imagem do produto" />
                    </div>
                    <div class="carousel-item">
                        <img src="../images/products/<?= $product['nameBoy'] ?>/roupa-2.png" class="d-block w-100" alt="Imagem do produto" />
                    </div>
                    <div class="carousel-item">
                        <img src="../images/products/<?= $product['nameBoy'] ?>/roupa-3.png" class="d-block w-100" alt="Imagem do produto" />
                    </div>
                </div>
            </div>
        </div>
        <!--Infos produto-->
        <div class="col-12 col-sm-6 col-lg-5 justify-content-center">
            <!--Frete / avaliação-->
            <div class="row mt-3 mt-md-0 mb-2">
                <div class="col-6 col-sm d-flex">
                    <img class="icon col-2" src="../images/icons/freight_icon.svg" alt="icone de frete">
                    <p class="p-title col ms-2 bold">Frete grátis</p>
                </div>
                <!--estrelas-->
                <div class="col-4 col-sm d-flex justify-content-start justify-content-sm-start mb-2 mb-sm-0">
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
            <div class="row mb-2">
                <h1 class="h1 bold text-center mb-3"><?= $product['nome_produto'] ?></h1>
                <p class="text-black prg-0"><?= $product['desc_produto'] ?></p>
            </div>
            <!--Opções de produto-->
            <div class="row">
                <!--selecionar tamanho-->
                <div class="row mt-2">
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
                <div class="row mt-2">
                    <p class="col-5 col-sm-2 prg-1 bold text-uppercase">Cor:</p>
                    <div class="col">
                        <select class="select-control " name="">
                            <option value="black">Preto</option>
                            <option value="gray">Cinza</option>
                            <option value="red">Vermelho</option>
                        </select>
                    </div>
                    </label>
                </div>

                <!--Botão de comprar e favorito-->
                <div class="row m-auto mt-3 container-plus align-items-center">
                    <button onclick="AjaxAdd(<?= $product['id_produto'] ?>)" class="col col-sm btn btn-green">Comprar</button>
                    <div class="col-3 col-sm-2 ms-4">
                        <button class=" btn btn-rounded-lg align-items-center shadow-clear">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                            </svg>
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

    function AjaxAdd(id) {
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let divF = document.getElementById("divf");
                console.log(this.responseText);
                if (this.responseText == "success") {
                    divF.innerHTML = "<div class='alert alert-success alert-dismissible fade show' id='alert' role='alert'>Produto adicionado ao carrinho!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button></div>"

                } else {
                    divF.innerHTML = "<div class='alert alert-danger alert-dismissible fade show' id='alert' role='alert'>Precisa estar logado para comprar!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button></div>"
                }

                deleteAlert();
            }
        }
        xmlhttp.open("GET", "../functions/addtocar.php?id=" + id, true);
        xmlhttp.send();

    }
</script>
<?php include '../includes/footer.php'; ?>