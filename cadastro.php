<?php
// Header
include_once 'includes/header.php';
?>

<section class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12 mx-auto">
            <form class="form-cadastro p-5 rounded" action="php_action/cadastrar.php" method="POST">
                <h2 class="text-center">Cadastro de Usuário</h2>
                <fieldset class="pt-2">
                    <div class="form-group">
                        <label>Nome</label>
                        <input class="form-control" type="text" name="nome">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="exemplo@email.com" name="email">
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control valid" name="senha">
                    </div>
                </fieldset>
                <div class="form-row p-2">
                    <div class="mx-auto">
                        <button type="submit" name="btn-cadastrar" class="btn btn-primary btn-lg">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
include_once 'includes/footer.php';
?>