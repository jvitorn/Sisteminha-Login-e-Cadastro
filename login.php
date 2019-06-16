<?php
// Header
include_once 'includes/header.php';
?>

<section class="container">
    <div class="row">
        <div class="col-md-5 col-sm-10 mx-auto">
            <form class="form-login p-5 rounded needs-validation">
                <h2 class="text-center">Login</h2>
                <div class="form-group"><label>Email</label><input type="email" class="form-control"
                        placeholder="exemplo@email.com">
                    <div class="invalid-feedback">
                        <p>Email não cadastrado ou incorreto</p>
                    </div>
                </div>
                <div class="form-group"><label>Senha</label><input type="password" class="form-control valid">
                    <div class="invalid-feedback">
                        <p>Senha Inválida</p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check"><input type="checkbox" class="form-check-input"><label
                            class="form-check-label">Lembre-se de mim </label></div>
                </div>
                <div class="form-row p-2">
                    <div class="mx-auto"><button type="submit" class="btn btn-primary btn-lg">Entrar</button></div>
                </div>
            </form>
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