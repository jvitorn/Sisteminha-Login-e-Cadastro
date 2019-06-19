<!DOCTYPE html>
<?php
// Conexão
require_once 'php_action/functions.php';

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sisteminha</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="index.php">Sisteminha</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <?php
                if(isset($_SESSION['logado'])):
                ?>
                <li class="nav-item">
                    <a class="nav-link active" href="home.php">Olá <?php echo $dados['nm_usuarios']; ?></a>
                </li>
                <?php
                else:
                ?>
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Entrar</a>
                </li>
                <li>
                    <a class="nav-link active " href="cadastro.php">Cadastrar</a>
                </li>
                <?php
                endif;
                ?>
            </ul>
        </div>
    </nav>