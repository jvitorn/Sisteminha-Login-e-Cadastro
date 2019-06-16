<?php
// Header
include_once 'includes/header.php';
// Verificação
if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;
?>

<section class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12 mx-auto text-center">
            <div class="p-5 rounded home">
                <h1>Olá <?php echo $dados['nm_usuarios']; ?></h1>
                <p>Parece que conseguiu logar.<br>Obrigado por testar o sisteminha.</p>
                <div class="row">
                    <div class="mx-auto p-3">
                        <a class="btn btn-primary" href="php_action/logout.php">Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Footer
include_once 'includes/javascript.php';
?>

<?php
// Footer
include_once 'includes/footer.php';
?>