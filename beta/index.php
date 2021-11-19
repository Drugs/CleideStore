<?php

define('TITLE', 'Cleide Store - Index');
define('CSSFILE', '');

include 'functions/home.php';
include 'includes/header.php';

?>
<section class="container-fluid mb-5">
    <?php
    if (isset($_GET['status']) && $_GET['status'] == "success") {

        echo "<div id='alert' class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Logado com sucesso!!</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
          </div>";
    }
    ?>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active promotion">
                <img src="images/promotions/slide-1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item promotion">
                <img src="images/promotions/slide-2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item promotion">
                <img src="images/promotions/slide-3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section class="container ">

    <!--Exibindo 20 produtos-->
    <div class="row">
        <h1 class="h1 text-center mb-4">Olá <?= $userName ?>!</h1>
        <?= ShowProducts(20); ?>
    </div>

</section>

<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $("#alert").fadeOut("slow", function() {
                $(this).alert('close');
            });
        }, 4000);
    });
</script>

<?php
include 'includes/footer.php';
?>





<!--
                     .
                    / V\
                  / `  /
                 <<   |
                 /    |
               /      |
             /        |
           /    \  \ /
          (      ) | |
    _______|   _/_  | |
  <_________\______)\__)
-->