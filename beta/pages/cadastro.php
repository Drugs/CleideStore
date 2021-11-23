<?php

define('TITLE', 'Criar conta');
define('CSSFILE', '../');
include '../includes/header.php';
?>

<main>
    <div class="container">
        <h3 class="h3 mb-3 text-center bold">Crie sua conta</h3>

        <div class="row g-3 ">

            <form class="needs-validation d-flex flex-wrap flex-column align-content-center align-items-center" action="../functions/register.php" method="POST">

                <div class="row">
                    <?php
                    if (isset($_GET['status'])) {
                        if ($_GET['status'] == "exists") {
                            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <strong>Opaa!</strong> conta existente.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
                            </div>";
                        }

                        if ($_GET['status'] == "kid") {
                            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <strong>Opaa!</strong> precisa ser maior de idade.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
                            </div>";
                        }

                        if ($_GET['status'] == "error") {
                            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <strong>Opaa!</strong> algo de errado não está certo amigão.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
                            </div>";
                        }

                        if ($_GET['status'] == "success") {
                            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong>Eba!</strong> cadastrado com sucesso.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
                            </div>";
                        }
                    }
                    ?>

                    <div class="col-12 col-sm-6 col-md-6 mt-3 mt-sm-0">
                        <label for="nome" class="form-label mb-0">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Fernando Santana" required>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 mt-3 mt-sm-0">
                        <label for="cpf" class="form-label mb-0">Cpf:</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Sem pontos ou traços" maxlength="11" required>
                    </div>

                    <div class="col-12 col-sm-4 col-md-3 mt-3 mt-sm-3 mt-md-0">
                        <label for="dnasc" class="form-label mb-0">D. Nasc:</label>
                        <input type="date" class="form-control" id="dnasc" name="dnasc" required>
                    </div>

                    <div class="col-12 col-sm-8 col-md-12 mt-3 mt-sm-3">
                        <label for="ende" class="form-label mb-0">Endereço:</label>
                        <input type="text" class="form-control" id="ende" name="ende" placeholder="Bairro tal, rua tal, numero tal" maxlength="100" required>
                    </div>

                    <div class="col-12 col-sm-6 mt-3">
                        <label for="email" class="form-label mb-0">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@exemplo.com" required>
                    </div>

                    <div class="col-12 col-sm-6 mt-3">
                        <label for="senha" class="form-label mb-0">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="" required>
                    </div>

                </div>

                <a type="submit" class="btn btn-green btn-lg mt-3 mb-4" href="./login.php">Registrar</a>
            </form>


        </div>
    </div>
</main>



<?php include '../includes/footer.php'; ?>